<template>
  <div class="main-catalog" style="margin-bottom: 50px">
    <form class="sorting" action="">
      <select v-model="sortOption" @change="applySorting">
        <option style="font-family: 'Roboto Condensed';" value="name" selected>Выберите сортировку</option>
        <option value="pricemin" >По увеличению цены</option>
        <option value="pricemax">По уменьшению цены</option>
      </select>
    </form>
    <div style="margin-right: 10px; margin-bottom: 40px; position: relative">
      <input
          type="text"
          v-on:keydown.enter="search"
          v-model="searchQuery"
          placeholder="Что будем искать?"
          style="
              width: 735px;
              height: 42px;
              border-radius: 20px;
              font-size: 17px;
              font-family: 'Roboto Condensed';
              background-color: #FCEFEF">
      <button
          style="
              background: transparent;
              border: none;
              position: relative;
              right: 50px;
              top: 5px"
          @click="search"
      >

        <i class="material-icons">search</i></button>
    </div>

    {{searchResults.name}}
    <div class="v-catalog__list">
      <CatalogItem
          v-for="product in paginatedData"
          :key="product.id"
          v-bind:product_data="product"
      />
    </div>
    <pagination
        :current-page="currentPage"
        :total-pages="totalPages"
        @page-changed="handlePageChanged"
        style="margin: auto; "

    ></pagination>
  </div>

</template>

<script lang="ts">
import axios from 'axios';
import CatalogItem from "./CatalogItem.vue";
import Pagination from "@/components/Pagination.vue";
import ModalWindow from "@/components/ModalWindow.vue";
import SelectItem from "./SelectItem.vue"
import  image1 from '@/assets/1748097.png';
import  image2 from '@/assets/attak.jpg';
import  image3 from '@/assets/pyshkin.jpg';
import  image4 from '@/assets/magic.jpeg';
export default {
  name: 'TheMainCatalog',
  components: {
    CatalogItem,
    ModalWindow,
    Pagination
  },
  props: {
  },
  data() {
    return {
      products: [],
      errors:[],
      categories: [
        {name: "Все", value: ""},
        {name: "По максимальной цене", value: "max"},
        {name: "По минимальной  цене", value: "min"},
      ],
      currentPage: 1,
      itemsPerPage: 8,
      selected: "",
      sortOption: 'name',
      searchQuery: "",
      searchResults: [],
     // sortedProducts: [],
      sortOrder: ''
    }
  },
  mounted(){
    axios
        .get('http://localhost:8000/api/books/list')
        .then(response => {this.products = response.data.data[0]})
  .catch(e => {
      this.errors.push(e)
    })
  },
  /*created() {
    this.getProducts();
  },*/
  methods: {
    search() {
      axios
          .get(`http://localhost:8000/api/books/search/${this.searchQuery}`, {
            /*params: {
              query: this.searchQuery
            }*/
          })
          .then(response => {this.products = response.data.data[0];
                             this.searchResults = this.products.filter(product =>
                                product.name.toLowerCase().includes(this.searchQuery.toLowerCase()));
            })
          .catch(e => {
            this.errors.push(e)
          });
      /*this.searchResults = this.products.filter(product =>
          product.name.toLowerCase().includes(this.searchQuery.toLowerCase())
      );*/
    },
    applySorting() {
      this.currentPage = 1;
    },
    handlePageChanged(page) {
      this.currentPage = page;
    }
  },

  computed: {
    totalPages() {
      return Math.ceil(this.sortedProducts.length / this.itemsPerPage);
    },
    sortedProducts() {
      if (this.sortOption === 'name'){
        return this.products;
      }
      if (this.sortOption === 'pricemax') {
        return this.products.slice().sort((a, b) => b.price - a.price);
      } else if (this.sortOption === 'pricemin') {
        return this.products.slice().sort((a, b) => a.price - b.price);
      }
    },
    paginatedData() {
      const startIndex = (this.currentPage - 1) * this.itemsPerPage;
      const endIndex = startIndex + this.itemsPerPage;
      return this.sortedProducts.slice(startIndex, endIndex);
    },

  }
}
</script>

<style>
  .main-catalog{
    width: 100%;
    height: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  }
  .sorting{
    margin-bottom: 40px;
  }
  .sorting select{
    width: 200px;
    height: 23px;
    background-color: #FCEFEF;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, .3);
    font-family: 'Roboto Condensed';
  }
  .sorting option{

    font-size: 12px;

  }
  .v-catalog__list{
    display: flex;
    flex-wrap: wrap;
    margin-left: 29px;
    align-items: center;
    width: 100%;

  }
</style>