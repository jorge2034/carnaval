<template>
  <div class="q-pa-md q-gutter-sm">
    <q-carousel
      animated
      v-model="slide"
      infinite
    >
      <!-- <q-carousel-slide name="uno">
        <q-video
          class="absolute-full"
          src="https://www.youtube.com/embed/Pjn0w9PhMh0"
        />
      </q-carousel-slide> -->

      <q-carousel-slide name="dos">
        <q-video
          class="absolute-full"
          src="https://www.youtube.com/embed/V2tOqMHe9-A"
        />
      </q-carousel-slide>

      <!-- <q-carousel-slide name="tres">
        <q-video
          class="absolute-full"
          src="https://www.youtube.com/embed/UI-8oFUzDSU"
        />
      </q-carousel-slide> -->
    </q-carousel>

    <div class="row justify-center">
      <q-btn-toggle
        glossy
        v-model="slide"
        :options="[
          // { label: 'danza del toba', value: 'uno' },
          { label: 'SPOT CARNAVAL 2023', value: 'dos' },
          // { label: 'danza de la caporales', value: 'tres' }
        ]"
      />
    </div>
  </div>
</template>

<script>
import { ref } from 'vue'

export default {
  setup () {
    return {
      slide: ref('dos')
    }
  }
}
</script>
