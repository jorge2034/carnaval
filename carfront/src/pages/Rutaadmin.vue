<template>
  <div style="height: 80vh ; width: 100%;">
    <!--    <q-btn @click="click" label="click" icon="send" color="negative" />-->
    <l-map
      @ready="onReady"
      v-model="zoom"
      :zoom="zoom"
      :center="center"
      @move="log('move')"
      @click="ubicacion"
    >

      <!--      @locationfound="onLocationFound"-->
      <l-tile-layer
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
      ></l-tile-layer>
      <!--      <l-control-layers />-->
      <!--      <l-marker :lat-lng="[-17.970491, -67.113511]" draggable @moveend="log('moveend')">-->
      <!--        <l-tooltip>-->
      <!--          lol-->
      <!--        </l-tooltip>-->
      <!--      </l-marker>-->

      <!--      <l-marker @click="clickopciones(c)" v-for="c in clientes" :key="c.Cod_Aut" :lat-lng="[c.Latitud, c.longitud]"  >-->
      <!--        <l-icon><q-badge class="q-pa-none q-ma-none " color="info" >{{c.Cod_Aut}}</q-badge></l-icon>-->
      <!--      </l-marker>-->
      <!--      <l-marker :lat-lng="center"  >-->
      <!--        <l-icon><q-badge color="info">{{c.Cod_Aut}}</q-badge></l-icon>-->
      <!--      </l-marker>-->

      <!--      <l-marker :lat-lng="[50, 50]" draggable @moveend="log('moveend')">-->
      <!--        <l-popup>-->
      <!--          lol-->
      <!--        </l-popup>-->
      <!--      </l-marker>-->

      <l-marker @click="mostrarconjunto(c)" :lat-lng="[c.lat, c.lng]" v-for="c in conjuntos" :key="c.id" draggable @moveend="draggableconjunto($event,c)" >
        <!--              <l-popup>-->
        <!--                lol-->
        <!--              </l-popup>-->
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
      <!--      <l-polygon-->
      <!--        :lat-lngs="[-->
      <!--          [46.334852, -1.509485],-->
      <!--          [46.342596, -1.328731],-->
      <!--          [46.241487, -1.190568],-->
      <!--          [46.234787, -1.358337],-->
      <!--        ]"-->
      <!--        color="#41b782"-->
      <!--        :fill="true"-->
      <!--        :fillOpacity="0.5"-->
      <!--        fillColor="#41b782"-->
      <!--      />-->
      <!--      <l-rectangle-->
      <!--        :lat-lngs="[-->
      <!--          [46.334852, -1.509485],-->
      <!--          [46.342596, -1.328731],-->
      <!--          [46.241487, -1.190568],-->
      <!--          [46.234787, -1.358337],-->
      <!--        ]"-->
      <!--        :fill="true"-->
      <!--        color="#35495d"-->
      <!--      />-->
      <!--      <l-rectangle-->
      <!--        :bounds="[-->
      <!--          [46.334852, -1.190568],-->
      <!--          [46.241487, -1.090357],-->
      <!--        ]"-->
      <!--      >-->
      <!--        <l-popup>-->
      <!--          lol-->
      <!--        </l-popup>-->
      <!--      </l-rectangle>-->
    </l-map>
    <q-dialog v-model="modelactualizarconjunto" full-width>
      <q-card>
        <q-card-section>
          <div class="text-h6">Actualizar conjunto</div>
        </q-card-section>
        <q-form @submit="actualizarconjunto">
          <q-card-section class="q-pt-none">
            <q-select @filter="filterFn" use-input outlined dense label="Conjunto" :options="conjuntos" v-model="conjunto"/>
            <q-btn type="submit" color="primary" class="full-width" label="Actualizar" icon="send" />
          </q-card-section>
        </q-form>
        <!--        <q-card-actions align="right" class="bg-white text-teal">-->
        <!--          <q-btn flat label="OK" v-close-popup />-->
        <!--        </q-card-actions>-->
      </q-card>
    </q-dialog>
    <q-dialog v-model="modaldatos" full-width>
      <q-card class=" bg-secondary text-white">
        <q-card-section class="flex flex-center">
          <div class="text-h5">{{conjunto.label}}</div>
        </q-card-section>
        <q-card-section class="flex flex-center">
          <q-img
            :src="url+'../img/'+conjunto.imagen"
            spinner-color="white"
            style="height: 35px; max-width: 35px"
          />
        </q-card-section>
               <!-- <pre>{{conjunto}}</pre> -->
               <q-form @submit="modificarcalleconjunto()">
                 <q-card-section class="q-pt-none">
                  <q-input filled  v-model="calle" label="CALLES DONDE SE ENCUENTRA EL CONJUNTO" stack-label :dense="dense"/>
                   <q-btn type="submit" color="green" class="full-width" label="Actualizar calle" icon="send" />
               </q-card-section>
              </q-form>
               <q-form @submit="finalizarconjunto()">
                 <q-card-section class="q-pt-none">
                   <q-btn type="submit" color="primary" class="full-width" label="FINALIZAR" icon="send" />
               </q-card-section>
            </q-form>
        <q-card-actions align="right" class="bg-white text-teal">
          <q-btn flat icon="cancel" label="cerrar" v-close-popup />
        </q-card-actions>
      </q-card>
    </q-dialog>
  </div>
</template>
<script>
// import io from 'socket.io-client'
// const socket = io('http://localhost:3000')
// const socket = io('https://policeoru.herokuapp.com')

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
import { io } from 'socket.io-client';
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
      url:process.env.API,
      modelactualizarconjunto:false,
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
      conjuntos:[],
      conjuntos2:[],
      conjunto:{},
      lat:0,
      lng:0,
      iconSize: 30,
      modaldatos:false,
      socket : io('https://carnavalsocket.gamo.gob.bo'),
      // socket : io('http://localhost:3000'),
      swsocket : 0,
      calle:""
    };
  },
  created() {
    this.misconjuntos();
    this.misocket();
  },
  beforeUnmount() {
    if (this.socket) {
        this.socket.disconnect();
    }
  },
  methods: {
    click(){
      socket.emit('chat message','adimer')
    },
    misocket(){
    this.socket.emit('my message', 'hola desde rutaadmin ');
    this.socket.on('my broadcast', (data) => {
        console.log(data);
        this.misconjuntos()
      });
    },
    mostrarconjunto(c){
      this.conjunto=c
      // console.log(this.conjunto)
      this.modaldatos=true
    },
    draggableconjunto(e,c){
      // console.log(c)
      // console.log(e.target._latlng.lat)
      // if (e.latlng!=undefined){
      //   console.log(e.latlng.lat+','+e.latlng.lng)
      // }
      this.$q.loading.show()
      this.conjunto=c
      this.conjunto.lat=e.target._latlng.lat
      this.conjunto.lng=e.target._latlng.lng
      this.$api.put("conjunto/"+this.conjunto.id,this.conjunto).then(res=>{
        // console.log(res.data)
        this.misocket();
        this.modelactualizarconjunto=false
        this.$q.loading.hide()
      })
    },
    actualizarconjunto(){
      this.$q.loading.show()
      this.conjunto.lat=this.lat
      this.conjunto.lng=this.lng

      this.$api.put("conjunto/"+this.conjunto.id,this.conjunto).then(res=>{
        // console.log(res.data)
        this.misocket();
        this.modelactualizarconjunto=false
        this.$q.loading.hide()
      })
    },
    finalizarconjunto(){
      this.$q.loading.show()
      this.conjunto.lat=15
      this.conjunto.lng=15
      this.conjunto.estado="FINALIZADO"
      this.$api.put("conjunto/"+this.conjunto.id,this.conjunto).then(res=>{
        // console.log(res.data)
        this.misocket();
        this.modaldatos=false
        this.$q.loading.hide()
      })
    },
    modificarcalleconjunto(){
      this.$q.loading.show()
      this.conjunto.calles=this.calle
      this.$api.put("conjunto/"+this.conjunto.id,this.conjunto).then(res=>{
        // console.log(res.data)
        this.misocket();
        this.modaldatos=false
        this.$q.loading.hide()
      })
    },
    misconjuntos(){
    //  this.$q.loading.show()
      this.$api.get("conjunto").then(res=>{
        // console.log(res.data)
        this.conjuntos=[]
        res.data.forEach(r=>{
          let d=r
          d.label=r.ordensabado+".- " + r.nombre
          this.conjuntos.push(d)
        })
        this.conjuntos2=this.conjuntos
       // this.conjunto=this.conjuntos[0]
    //    this.$q.loading.hide()
      }).catch(err=>{
        this.$q.loading.hide()
        this.$q.notify({
          message:err.response.data,
          color:'red',
          icon:'error'
        })
      })
    },
    ubicacion(e){
      // console.log(e.latlng)
      if (e.latlng!=undefined){
        // console.log(e.latlng.lat+','+e.latlng.lng)
        this.lat=e.latlng.lat
        this.lng=e.latlng.lng
        this.modelactualizarconjunto=true
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
          this.conjuntos = this.conjuntos2
          // here you have access to "ref" which
          // is the Vue reference of the QSelect
        })
        return
      }
      update(() => {
        const needle = val.toLowerCase()
        this.conjuntos = this.conjuntos2.filter(v => v.label.toLowerCase().indexOf(needle) > -1)
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
