<template row>
  <q-page class="flex flex-center">
    <q-toolbar-title> Albums</q-toolbar-title>
    <div>
      <LightGallery
        :images="images"
        :index="index"
        :disable-scroll="true"
        @close="index = null"
      />

      <ul class="row">
        <li
          v-for="(thumb, thumbIndex) in [
            'https://via.placeholder.com/150/d32776',
            'https://via.placeholder.com/150/d32776',
            'https://via.placeholder.com/150/d32776',
            'https://via.placeholder.com/150/d32776',
            'https://via.placeholder.com/150/d32776',
            'https://via.placeholder.com/150/d32776',
            'https://via.placeholder.com/150/d32776',
            'https://via.placeholder.com/150/d32776',
          ]"
          :key="thumbIndex"
          @click="index = thumbIndex"
        >
          <img :src="thumb" />
        </li>
      </ul>
    </div>
    <!-- <q-icon name="collections" /> -->
  </q-page>
</template>

<script>
import { LightGallery } from "vue-light-gallery";

export default {
  name: "PageIndex",
  components: {
    LightGallery,
  },
  data() {
    return {
      images: [
        { title: "img 1", url: "https://via.placeholder.com/150/d32776" },
        { title: "img 2", url: "https://via.placeholder.com/150/d32776" },
        { title: "img 3", url: "https://via.placeholder.com/150/d32776" },
        { title: "img 4", url: "https://via.placeholder.com/150/d32776" },
        { title: "img 5", url: "https://via.placeholder.com/150/d32776" },
        { title: "img 6", url: "https://via.placeholder.com/150/d32776" },
        { title: "img 7", url: "https://via.placeholder.com/150/d32776" },
        { title: "img 8", url: "https://via.placeholder.com/150/d32776" },
      ],
      index: null,
    };
  },
};
</script>

<style lang="scss">
.image {
  width: 100px;
  height: 100px;
  background-size: cover;
  cursor: pointer;
  margin: 5px;
  border-radius: 3px;
  border: 1px solid lightgray;
  object-fit: contain;
}
ul {
  li {
    list-style-type: none;
  }
}
</style>