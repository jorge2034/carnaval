<template>
<q-page class="q-pa-xs">
  <div class="row">
    <div class="col-12 col-md-3"></div>
    <div class="col-12 col-md-6">
      <q-carousel
        height="48em"
        swipeable
        animated
        v-model="slide"
        v-model:fullscreen="fullscreen"
        thumbnails
        :autoplay="4000"
        infinite
        arrows
      >
        <q-carousel-slide :name="1" img-src="img/1.jpeg" />
        <q-carousel-slide :name="2" img-src="img/2.jpeg" />
        <q-carousel-slide :name="3" img-src="img/3.jpeg" />
        <q-carousel-slide :name="4" img-src="img/4.jpeg" />
        <q-carousel-slide :name="5" img-src="img/5.jpeg" />
        <q-carousel-slide :name="6" img-src="img/6.jpeg" />
        <q-carousel-slide :name="7" img-src="img/7.jpeg" />
        <q-carousel-slide :name="8" img-src="img/8.jpeg" />
        <q-carousel-slide :name="9" img-src="img/9.jpeg" />
        <q-carousel-slide :name="10" img-src="img/10.jpeg" />
        <q-carousel-slide :name="11" img-src="img/11.jpeg" />
        <q-carousel-slide :name="12" img-src="img/12.jpeg" />
        <q-carousel-slide :name="13" img-src="img/13.jpeg" />
        <q-carousel-slide :name="14" img-src="img/14.jpeg" />
        <q-carousel-slide :name="15" img-src="img/15.jpeg" />
        <q-carousel-slide :name="16" img-src="img/16.jpeg" />
        <q-carousel-slide :name="17" img-src="img/17.jpeg" />
        <q-carousel-slide :name="18" img-src="img/18.jpeg" />
        <q-carousel-slide :name="19" img-src="img/19.jpeg" />
        <q-carousel-slide :name="20" img-src="img/20.jpeg" />
        <q-carousel-slide :name="21" img-src="img/21.jpeg" />
        <q-carousel-slide :name="22" img-src="img/22.jpeg" />
        <q-carousel-slide :name="23" img-src="img/23.jpeg" />
        <q-carousel-slide :name="24" img-src="img/24.jpeg" />
        <q-carousel-slide :name="25" img-src="img/25.jpeg" />
        <q-carousel-slide :name="26" img-src="img/26.jpeg" />
        <q-carousel-slide :name="27" img-src="img/27.jpeg" />
        <q-carousel-slide :name="28" img-src="img/28.jpeg" />
        <q-carousel-slide :name="29" img-src="img/29.jpeg" />
        <q-carousel-slide :name="30" img-src="img/30.jpeg" />
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
