<template>
<q-page class="q-pa-xs">
  <div class="row">
    <div class="col-12 col-md-3"></div>
    <div class="col-12 col-md-6">
      <q-carousel
        height="50em"
        swipeable
        animated
        v-model="slide"
        v-model:fullscreen="fullscreen"
        thumbnails
        :autoplay="4000"
        infinite
        arrows
      >
        <q-carousel-slide :name="1" img-src="img/16.jpeg" />
        <q-carousel-slide :name="17" img-src="img/17.jpg" />
        <q-carousel-slide :name="3" img-src="img/18.jpg" />
        <q-carousel-slide :name="4" img-src="img/19.jpg" />
        <q-carousel-slide :name="5" img-src="img/20.jpg" />
        <q-carousel-slide :name="6" img-src="img/21.jpg" />
        <q-carousel-slide :name="7" img-src="img/22.jpg" />
        <q-carousel-slide :name="8" img-src="img/23.jpg" />
        <q-carousel-slide :name="9" img-src="img/24.jpg" />
        <q-carousel-slide :name="10" img-src="img/25.jpg" />
        <q-carousel-slide :name="11" img-src="img/26.jpg" />
        <q-carousel-slide :name="12" img-src="img/27.jpg" />
        <q-carousel-slide :name="13" img-src="img/28.jpg" />
        <q-carousel-slide :name="29" img-src="img/29.jpg" />
        <q-carousel-slide :name="30" img-src="img/30.jpg" />
        <template v-slot:control>
          <q-carousel-control
            position="bottom-right"
            :offset="[18, 18]"
          >
            <q-btn
              push round dense color="white" text-color="primary"
              :icon="fullscreen ? 'fullscreen_exit' : 'fullscreen'"
              @click="fullscreen = !fullscreen"
            />
          </q-carousel-control>
        </template>
      </q-carousel>
    </div>
    <div class="col-12 col-md-3"></div>
  </div>


</q-page>
</template>

<script>
export default {
  data(){
    return{
      slide: 1,
      fullscreen:false,
    }
  }
}
</script>

<style lang="sass" scoped>
.custom-caption
  text-align: center
  padding: 12px
  color: white
  background-color: rgba(0, 0, 0, .3)
</style>
