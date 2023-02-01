<template>
  <q-page class="q-pa-xs">
    <div class="row">
      <div class="col-12">
        <q-item v-for="a in avisos" :key="a.id" :to="a.url" >
          <q-card  >
              <img style="height: 150px"  :src="url+'../img/'+a.imagen"  >
              <q-card-section>
                <div class="text-h6" >{{a.titulo}}</div>
                <div class="text-subtitle2">{{a.subtitulo}} {{a.fecha}} {{a.hora}}</div>
              </q-card-section>
              <q-card-section class="q-pt-none">
                {{a.descripcion}}
              </q-card-section>
          </q-card>
        </q-item>
      </div>
    </div>
  </q-page>
</template>

<script>

export default {
  data(){
    return {
      avisos:[],
      url:process.env.API
    }
  },
  created() {
    // console.log('a')
    this.$api.get('aviso').then(res=>{
      console.log(res.data)
      this.avisos=res.data
    })
  }
}
</script>
