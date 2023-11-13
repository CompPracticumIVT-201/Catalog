<template>
  <div class="main-catalog">
    <div class="v-catalog__list">
      <CatalogItem
        v-for="product in products"
        :key="product.article"
        v-bind:product_data="product"
      />
    </div>
  </div>
</template>

<script lang="ts">

import CatalogItem from "./CatalogItem.vue";
import SelectItem from "./SelectItem.vue"
import  image1 from '@/assets/1748097.png';
import  image2 from '@/assets/attak.jpg';
import  image3 from '@/assets/pyshkin.jpg';
import  image4 from '@/assets/magic.jpeg';


export default {
  name: 'TheMainCatalog',
  components: {
    CatalogItem,
    SelectItem
  },
  props: {

  },
  data(){
    //const catalogStore = UseProductStore()
    return {
      products: [
        {
          image: image1,
          name: "1 book",
          price: 1000,
          article: "B1",
          available: true,
        },
        {
          image: image2,
          name: "2 book",
          price: 2000,
          article: "B2",
          available: true,
        },
        {
          image: image3,
          name: "3 book",
          price: 3000,
          article: "B3",
          available: true,
        },
        {
          image: image4,
          name: "4 book",
          price: 4000,
          article: "B4",
          available: true,
        },
        {
          image: image1,
          name: "5 book",
          price: 5000,
          article: "B5",
          available: true,
        },
        {
          image: image2,
          name: "6 book",
          price: 6000,
          article: "B6",
          available: true,
        },
        {
          image: image3,
          name: "7 book",
          price:7000,
          article: "B7",
          available: true,
        },
        {
          image: image4,
          name: "8 book",
          price: 8000,
          article: "B8",
          available: true,
        },
      ],
      sortOrder: '' // переменная для хранения типа сортировки
    }
  },
  computed: {

  }
}
</script>

<style>
  .main-catalog{
    width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;

  }
  .v-catalog__list{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    width: 100%;
  }
</style>