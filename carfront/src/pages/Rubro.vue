<template>
  <div style="height: 80vh ; width: 100%;">
    <l-map
      @ready="onReady"
      v-model="zoom"
      :zoom="zoom"
      :center="center"
      @move="log('move')"

    >
<!--      @click="ubicacion"-->
      <l-tile-layer
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
      ></l-tile-layer>
      <l-marker @click="mostrarpunto(c)" :lat-lng="[c.lat, c.lng]" v-for="c in puntos" :key="c.id"  >
        <l-icon
          :icon-size="dynamicSize"
          :icon-anchor="dynamicAnchor"
          :icon-url="url+'../img/'+c.imagen"
        />
      </l-marker>

      <l-polyline
        :lat-lngs="rutacarnaval"
        color="red"
        :weight="7"
        line-cap="round"
        line-join="round"
        :opacity="0.6"
      />
    </l-map>
    <q-dialog v-model="modelactualizarpunto" full-width>
      <q-card>
        <q-card-section>
          <div class="text-h6">Actualizar punto</div>
        </q-card-section>
        <q-form @submit="actualizarpunto">
          <q-card-section class="q-pt-none">
            <q-select @filter="filterFn" use-input outlined dense label="Conjunto" :options="puntos" v-model="punto"/>
            <q-btn type="submit" color="primary" class="full-width" label="Actualizar" icon="send" />
          </q-card-section>
        </q-form>
      </q-card>
    </q-dialog>
    <q-dialog v-model="modaldatos" full-width>
      <q-card class=" bg-secondary text-white">
        <q-card-section>
          <div class="text-h5 flex flex-center">{{punto.label}}</div>
        </q-card-section>
        <q-card-section class="">
          <div class="flex flex-center">
            <q-img
              :src="url+'../img/'+punto.imagen"
              spinner-color="white"
              style="height: 35px; max-width: 35px"
            />
          </div>
          <div class="h6"><b>Direccion: </b>{{punto.direccion}}</div>
          <div class="h6"><b>Descripcion: </b>{{punto.descripcion}}</div>
          <div class="h6"><b>Telefono: </b>{{punto.telefono}}</div>
        </q-card-section>
        <q-card-actions align="right" class="bg-white text-teal">
          <q-btn flat icon="cancel" label="cerrar" v-close-popup />
        </q-card-actions>
      </q-card>
    </q-dialog>
  </div>
</template>
<script>

import {
  LMap,
  LIcon,
  LTileLayer,
  LMarker,
  LControlLayers,
  LTooltip,
  LPopup,
  LPolyline,
  LPolygon,
  LRectangle,
} from "@vue-leaflet/vue-leaflet";
import "leaflet/dist/leaflet.css";

export default {
  components: {
    LMap,
    LIcon,
    LTileLayer,
    LMarker,
    // LControlLayers,
    // LTooltip,
    // LPopup,
    LPolyline,
    // LPolygon,
    // LRectangle,
  },
  data() {
    return {
      modaldatos:false,
      url:process.env.API,
      modelactualizarpunto:false,
      rutacarnaval:[
        [-17.9612296067391,-67.10803475010364],
        [-17.961445119004555,-67.10603530174386],
        [-17.96232282916619,-67.10629282032106],
        [-17.968323800452232,-67.10788085154705],
        [-17.971662120760836,-67.10897768934925],
        [-17.971242566549805,-67.11073501577758],
        [-17.970119969911718,-67.11444757526542],
        [-17.969288170678904,-67.11418543294249],
        [-17.96916065440438,-67.11502699206409],
        [-17.969895449728007,-67.11526305075984],
        [-17.969201476446962,-67.11785969641318],
        [-17.968323800452232,-67.11760217783599],
        [-17.968038044536293,-67.1180742952275],
        [-17.967323652515017,-67.11785951304016],
        [-17.96709912898689,-67.11809575510893],
        [-17.967242007761914,-67.11841765333043],
        [-17.967446120097293,-67.11873955155191],
      ],
      center:[-17.970371, -67.112303],
      zoom: 15,
      iconWidth: 25,
      iconHeight: 40,
      puntos:[],
      puntos2:[],
      punto:{},
      lat:0,
      lng:0,
      iconSize: 30,
      id:this.$route.params.id
    };
  },
  created() {
    // console.log(this.$store.getters["login/nombre"])
    // if (this.)
    this.$api.get("rubro/"+(parseInt(this.id))).then(res=>{
      this.$store.commit("login/nombre",res.data.nombre)
    })
    this.misrubros();
    this.$watch(
      () => this.$route.params,
      (toParams, previousParams) => {
        // react to route changes...
        // console.log(toParams)
        this.id=toParams.id
        // console.log(this.id)
        this.misrubros();
        if (this.id!=undefined){
          this.$api.get("rubro/"+(parseInt(this.id))).then(res=>{
            this.$store.commit("login/nombre",res.data.nombre)
          })
        }

      }
    )
  },
  methods: {
    click(){
    },
    mostrarpunto(c){
      this.punto=c
      this.modaldatos=true
      // console.log(this.punto)
    },
    draggablepunto(e,c){
      // console.log(c)
      // console.log(e.target._latlng.lat)
      // if (e.latlng!=undefined){
      //   console.log(e.latlng.lat+','+e.latlng.lng)
      // }
      this.$q.loading.show()
      this.punto=c
      this.punto.lat=e.target._latlng.lat
      this.punto.lng=e.target._latlng.lng
      this.$api.put("punto/"+this.punto.id,this.punto).then(res=>{
        // console.log(res.data)
        this.misrubros()
        this.modelactualizarpunto=false
      })
    },
    actualizarpunto(){
      this.$q.loading.show()
      this.punto.lat=this.lat
      this.punto.lng=this.lng

      this.$api.put("punto/"+this.punto.id,this.punto).then(res=>{
        // console.log(res.data)
        this.misrubros()
        this.modelactualizarpunto=false
      })
    },
    misrubros(){
      this.$q.loading.show()
      this.$api.get("punto/"+this.id).then(res=>{
        // console.log(res.data)
        this.puntos=[]
        res.data.forEach(r=>{
          let d=r
          d.label=r.nombre
          this.puntos.push(d)
        })
        this.puntos2=this.puntos
        this.punto=this.puntos[0]
        this.$q.loading.hide()
      })
    },
    ubicacion(e){
      // console.log(e.latlng)
      if (e.latlng!=undefined){
        // console.log(e.latlng.lat+','+e.latlng.lng)
        this.lat=e.latlng.lat
        this.lng=e.latlng.lng
        this.modelactualizarpunto=true
      }

      // this.center=[e.latlng.lat,e.latlng.lng]
    },
    // async getCentro() {
    //   this.center = [-17.970371, -67.112303]
    //   // check if API is supported
    //   // if (navigator.geolocation) {
    //   //   // get  geolocation
    //   //   navigator.geolocation.getCurrentPosition(pos => {
    //   //     // set user location
    //   //     this.center = [
    //   //       pos.coords.latitude,
    //   //       pos.coords.longitude
    //   //     ]
    //   //   });
    //   // }
    // },
    // async getUserPosition() {
    //   this.center = [0,0]
    //   // check if API is supported
    //   if (navigator.geolocation) {
    //     // get  geolocation
    //     navigator.geolocation.getCurrentPosition(pos => {
    //       // set user location
    //       this.center = [
    //         pos.coords.latitude,
    //         pos.coords.longitude
    //       ]
    //     });
    //   }
    // },
    filterFn (val, update) {
      if (val === '') {
        update(() => {
          this.puntos = this.puntos2
          // here you have access to "ref" which
          // is the Vue reference of the QSelect
        })
        return
      }
      update(() => {
        const needle = val.toLowerCase()
        this.puntos = this.puntos2.filter(v => v.label.toLowerCase().indexOf(needle) > -1)
      })
    },
    onReady (mapObject) {
      mapObject.locate();
    },
    onLocationFound(location){
      // console.log(location)
      this.center=[location.latlng.lat,location.latlng.lng]
    },
    log(a) {
      console.log(a);
    },
    changeIcon() {
      this.iconWidth += 2;
      if (this.iconWidth > this.iconHeight) {
        this.iconWidth = Math.floor(this.iconHeight / 2);
      }
    },
  },
  computed: {
    dynamicSize() {
      return [this.iconSize, this.iconSize * 1.15];
    },
    dynamicAnchor() {
      return [this.iconSize / 2, this.iconSize * 1.15];
    }
    // iconUrl() {
    //   return `https://placekitten.com/25/40`;
    // },
    // iconSize() {
    //   return [this.iconWidth, this.iconHeight];
    // },
    // total(){
    //   let total=0
    //   this.misproductos.forEach(r=>{
    //     total+=parseFloat(r.subtotal)
    //   })
    //   return total.toFixed(2)
    // }
  },
};
</script>
