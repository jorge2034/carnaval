<template>
  <div class="q-pa-xs q-gutter-sm">

    <div class="row justify-center">
      <q-btn-toggle
        glossy
        v-model="slide"
        :options="[
          { label: 'SABADO', value: 'sabado' },
          { label: 'DOMINGO', value: 'domingo' },
          // { label: 'danza de la caporales', value: 'tres' }
        ]"
      />
    </div>
    <q-carousel
      animated
      v-model="slide"
      infinite
      height="48em"
      width="100%"
    >
      <q-carousel-slide name="sabado" class="full-width">


        <q-list bordered class="rounded-borders" style="width: 100%">
      <q-item-label header>Rol de Ingreso Sabado</q-item-label>



      <!-- <q-item clickable v-ripple> -->
      <q-item v-for="c in conjunto" :key="c.id" clickable v-ripple>
        <q-item-section avatar>
          <!-- <q-avatar color="red" text-color="white">
            D
          </q-avatar> -->
          <q-avatar>
            <img :src="url+'../img/'+c.imagen">
          </q-avatar>
        </q-item-section>

        <q-item-section>
          <q-item-label class="text-weight-light" lines="2">{{c.ordensabado}}.- {{c.nombre}}</q-item-label>
          <q-item-label caption lines="2">
            <span class="text-weight-bold">Grupo {{c.grupo}}</span>
          </q-item-label>
          <q-item-label caption lines="2">
            <span class="text-weight-bold"><q-icon v-if="c.calles!==null && c.estado=='EN PROCESO' " name="place" color="green" size="15px" />{{c.calles!==null&& c.estado=='EN PROCESO'?`${c.calles}`:""}}</span>
          </q-item-label>
        </q-item-section>

        <q-item-section side top>
          {{c.estado}}
        </q-item-section>
      </q-item>
      <q-separator inset="item" />
    </q-list>

      </q-carousel-slide>

      <q-carousel-slide name="domingo">

        <q-list bordered class="rounded-borders" style="width: 100%">
      <q-item-label header>Rol de Ingreso Domingo</q-item-label>



      <!-- <q-item clickable v-ripple> -->
      <q-item v-for="c in conjunto2" :key="c.id" clickable v-ripple>
        <q-item-section avatar>
          <!-- <q-avatar color="red" text-color="white">
            D
          </q-avatar> -->
          <q-avatar>
            <img :src="url+'../img/'+c.imagen">
          </q-avatar>
        </q-item-section>

        <q-item-section>
          <q-item-label class="text-weight-light" lines="2">{{c.ordendomingo}}.- {{c.nombre}}</q-item-label>
          <q-item-label caption lines="2">
            <span class="text-weight-bold">Grupo {{c.grupo}}</span>
          </q-item-label>
          <q-item-label caption lines="2">
            <span class="text-weight-bold"><q-icon v-if="c.calles!==null && c.estado=='EN PROCESO' " name="place" color="green" size="15px" />{{c.calles!==null&& c.estado=='EN PROCESO'?`${c.calles}`:""}}</span>
          </q-item-label>
        </q-item-section>

        <q-item-section side top>
          {{c.estado}}
        </q-item-section>
      </q-item>
      <q-separator inset="item" />
    </q-list>

      </q-carousel-slide>

    </q-carousel>

  </div>
</template>

<script>

export default {
  data() {
    return {
      url:process.env.API,
      conjuntos:[],
      conjunto2:{},
      conjunto:{},
      slide:'domingo'
    }
  },
  created() {
//    this.$store.commit("login/nombre",undefined)
   this.misconjuntos();
   console.log(this.conjunto)
  },
  methods: {
    misconjuntos(dia){
       this.$q.loading.show()
        this.$api.get("conjuntosabado").then(res=>{
         console.log("sabado",res.data)
        this.conjunto=res.data
      })
        this.$api.get("conjuntodomingo").then(res=>{
         console.log("domingo",res.data)
        this.conjunto2=res.data

      })
      this.$q.loading.hide()

    },
  }

}
</script>
