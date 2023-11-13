<template>
  <div class="main-catalog">
<!--    <SelectItem
      :selected="selected"
      :options="categories"
    />-->
    <form action="">
      <select v-model="sortOption" style="margin-right: 1000px; box-shadow: 0px 5px 10px rgba(0, 0, 0, .3);">
        <option value="name" selected>Выберите сортировку</option>
        <option value="pricemax" >Сортировать максимальной</option>
        <option value="pricemin">Сортировать минимальной</option>
      </select>
    </form>

    <div class="v-catalog__list">
      <CatalogItem
        v-for="product in sortedProducts"
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
  },
  props: {
  },
  data() {
    return {
      products: [
        {
          image: image1,
          name: "abook",
          price: 10000,
          article: "B1",
          available: true,
        },
        {
          image: image2,
          name: "bbook",
          price: 2000,
          article: "B2",
          available: true,
        },
        {
          image: image3,
          name: "zbook",
          price: 3000,
          article: "B3",
          available: true,
        },
        {
          image: image4,
          name: "obook",
          price: 4000,
          article: "B4",
          available: true,
        },
        {
          image: image1,
          name: "pbook",
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
          price: 7000,
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
      categories: [
        {name: "Все", value: ""},
        {name: "По максимальной цене", value: "max"},
        {name: "По минимальной  цене", value: "min"},
      ],
      selected: "",
      sortOption: 'name',
     // sortedProducts: [],
      sortOrder: '' // переменная для хранения типа сортировки
    }
  },
  computed: {

    sortedProducts() {
      if (this.sortOption === 'name'){
        return this.products;
      }
      if (this.sortOption === 'pricemax') {
        return this.products.slice().sort((a, b) => b.price - a.price);
      } else if (this.sortOption === 'pricemin') {
        return this.products.slice().sort((a, b) => a.price - b.price);
      }
    }
  }
  /*methods: {
    sortByCategories(price) {
      this.products.map(function (item) {
        if (this.price === price.name) {

        }
      })
    },
  },*/
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