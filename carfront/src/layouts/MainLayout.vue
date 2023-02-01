<template>
  <q-layout view="lHh Lpr lFf">
    <q-header >
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
          @click="leftDrawerOpen = !leftDrawerOpen"
        />

        <!--        <q-toolbar-title>-->
        <!--          Inicio-->
        <!--        </q-toolbar-title>-->
        <!--        <div>Quasar v{{ $q.version }}</div>-->
      </q-toolbar>
      <div class="q-px-lg">
        <div v-if="$store.getters['login/nombre']==undefined" class="text-h6">Carnaval 2023 <small style="font-size: 10px">(Tiempo real)</small></div>
        <div v-else class="text-h6">{{$store.getters["login/nombre"]}}</div>
<!--        <div>{{$store.getters["login/nombre"]}}</div>-->
        <div class="text-subtitle2">{{now}} </div>
      </div>
      <q-img
        src="~assets/gamo.jpg"
        class="header-image absolute-top"
      />
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      :width="200"
      :breakpoint="600"
    >
      <q-scroll-area style="height: calc(100% - 103.99px); margin-top: 103.99px; border-right: 1px solid #ddd">
        <q-list bordered>
          <q-item v-for="r in rubros" :key="r.id"  :to="r.url" exact clickable v-ripple>
            <q-item-section avatar>
              <q-icon :name="r.icono" material-icons-outlined/>

            </q-item-section>
            <q-item-section>
              <q-item-label> {{ r.nombre }}</q-item-label>
              <q-item-label caption>{{ r.descripcion }}</q-item-label>
            </q-item-section>
          </q-item>
        </q-list>
      </q-scroll-area>

      <q-img class="absolute-top" src="~assets/gamo.jpg" style="height: 103.99px">
        <div class="absolute-bottom bg-transparent">
          <q-avatar size="56px" class="q-mb-sm">
            <img src="~assets/logo.png">
          </q-avatar>
          <div class="text-weight-bold">G.A.M.O.</div>
          <div>Gobierno autonomo</div>
        </div>
      </q-img>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
import {date} from 'quasar';
export default {
  data () {
    return {
      leftDrawerOpen: false,
      rubros:[],
    }
  },
  created() {


    this.$api.get('rubro').then(res=>{
      this.rubros=res.data
       // console.log(res.data)
    })
  },
  computed:{
    now(){
      let timeStamp = Date.now()
      // let formattedString = date.formatDate(timeStamp, 'dddd D MMMM');
      let formattedString = date.formatDate(timeStamp, 'dddd D MMMM', {
        days: ['Domingo', 'Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo' /* and all the rest of days - remember starting with Sunday */],
        daysShort: ['Dum', 'Lun', /* and all the rest of days - remember starting with Sunday */],
        months: ['Enero', 'Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre', /* and all the rest of months */],
        monthsShort: ['Ian', 'Feb', /* and all the rest of months */]
      })
      return formattedString
    }
  }
}
</script>
<style lang="scss">
.header-image{
  height: 100%;
  z-index: -1;
  opacity: 0.2;
  filter: grayscale(100%);
}
</style>
