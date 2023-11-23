<template>
  <div class="main-catalog">
    <form class="sorting" action="">
      <select v-model="sortOption" @change="applySorting">
        <option style="font-family: 'Roboto Condensed';" value="name" selected>Выберите сортировку</option>
        <option value="pricemin" >По увеличению цены</option>
        <option value="pricemax">По уменьшению цены</option>
      </select>
    </form>
    <div style="margin-right: 10px; margin-bottom: 40px; position: relative">
      <input type="text" v-model="searchQuery" placeholder="Что будем искать?" style="width: 735px; height: 42px; border-radius: 20px; font-size: 17px; font-family: 'Roboto Condensed'; background-color: #FCEFEF">
      <button @click="search" style="background: transparent; border: none; position: relative; right: 50px; top: 5px"><i class="material-icons">search</i></button>
      <div v-for="product in searchResults" :key="product.article">
        <div class="" style="margin-top: 34px; margin-right: 34px">
          <img :src="product.image" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
          <p style="font-size: 17px; font-family: 'Roboto Condensed'; margin-bottom: 20px">{{ product.name }}</p>
          <p style="font-size: 17px; font-family: 'Roboto Condensed'; opacity: 0.7">{{product.author}}</p>
          <div style="display: flex; justify-content: center; font-size: 17px; font-family: 'Roboto Condensed'; color: #993E22; "><p>{{product.price}} руб.</p></div>
        </div>
      </div>
    </div>
    <div class="v-catalog__list">
      <CatalogItem
          v-for="product in paginatedData"
          :key="product.article"
          v-bind:product_data="product"
      />
    </div>




  </div>
  <pagination
      :current-page="currentPage"
      :total-pages="totalPages"
      @page-changed="handlePageChanged"
  ></pagination>
</template>

<script lang="ts">

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
      products: [
        {
          image: image2,
          name: "K",
          price: 1,
          article: "B1",
          available: true,
          author: "А.С. Пушкин",
          publishing_house: "Эксмо" ,
          year_publishing: 2020,
          pages: 445,
          cover_type: "Ламинированный",
          age: "18+"
        },
        {
          image: image2,
          name: "K",
          price: 1,
          article: "B10",
          available: true,
          author: "А.С. Пушкин",
          publishing_house: "Эксмо" ,
          year_publishing: 2020,
          pages: 445,
          cover_type: "Ламинированный",
          age: "18+"
        },
        {
          image: image2,
          name: "K",
          price: 1,
          article: "B11",
          available: true,
          author: "А.С. Пушкин",
          publishing_house: "Эксмо" ,
          year_publishing: 2020,
          pages: 445,
          cover_type: "Ламинированный",
          age: "18+"
        },

        {
          image: image2,
          name: "Атака Титанов",
          price: 2,
          article: "B2",
          available: true,
          author: "А.С. Онегин",
          publishing_house: "Эксмо" ,
          year_publishing: 2019,
          pages: 385,
          cover_type: "Ламинированный",
          age: "18+"
        },
        {
          image: image2,
          name: "Атака Титанов",
          price: 3,
          article: "B9",
          available: true,
          author: "А.С. Онегин",
          publishing_house: "Эксмо" ,
          year_publishing: 2019,
          pages: 385,
          cover_type: "Ламинированный",
          age: "18+"
        },
        {
          image: image3,
          name: "Капитанская дочка",
          price: 4,
          article: "B3",
          available: true,
          author: "А.С. Достоевский",
          publishing_house: "Эксмо" ,
          year_publishing: 2006,
          pages: 450,
          cover_type: "Твёрдый переплёт",
          age: "12+"
        },
        {
          image: image4,
          name: "Магическая битва",
          price: 16,
          article: "B4",
          available: true,
          author: "А.С. Лермонтов",
          publishing_house: "Эксмо" ,
          year_publishing: 2012,
          pages: 500,
          cover_type: "Ламинированный",
          age: "18+"
        },
        {
          image: image4,
          name: "Магическая битва",
          price: 126,
          article: "B12",
          available: true,
          author: "А.С. Лермонтов",
          publishing_house: "Эксмо" ,
          year_publishing: 2012,
          pages: 500,
          cover_type: "Ламинированный",
          age: "18+"
        },
        {
          image: image4,
          name: "Магическая битва",
          price: 10,
          article: "B13",
          available: true,
          author: "А.С. Лермонтов",
          publishing_house: "Эксмо" ,
          year_publishing: 2012,
          pages: 500,
          cover_type: "Ламинированный",
          age: "18+"
        },
        {
          image: image4,
          name: "Клинок рассекабщий демонов",
          price: 6,
          article: "B5",
          available: true,
          author: "А.С. Мамин Сибиряк",
          publishing_house: "Эксмо" ,
          year_publishing: 2010,
          pages: 340,
          cover_type: "Ламинированный",
          age: "18+"
        },
        {
          image: image2,
          name: "Атака Титанов",
          price: 7,
          article: "B6",
          available: true,
          author: "А.С. Толстой",
          publishing_house: "Эксмо" ,
          year_publishing: 2020,
          pages: 500,
          cover_type: "Ламинированный",
          age: "18+"
        },
        {
          image: image3,
          name: "Капитанская дочка",
          price: 8,
          article: "B7",
          available: true,
          author: "А.С. Грибоедов",
          publishing_house: "Эксмо" ,
          year_publishing: 2019,
          pages: 720,
          cover_type: "Ламинированный",
          age: "18+"
        },
        {
          image: image4,
          name: "Магическая битва",
          price: 9,
          article: "B8",
          available: true,
          author: "А.С. Есенин",
          publishing_house: "Эксмо" ,
          year_publishing: 2006,
          pages: 483,
          cover_type: "Ламинированный",
          age: "12+"
        },
      ],
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
      sortOrder: '' // переменная для хранения типа сортировки
    }
  },
  methods: {
    /*search() {
      // Добавьте свою логику для выполнения поиска здесь
      // Например, вы можете отправить запрос на сервер и получить результаты
      // Здесь я просто фильтрую элементы на основе значения поля поиска
      this.searchResults = this.products.filter(product =>
          product.name.toLowerCase().includes(this.searchQuery.toLowerCase())
      );
    },*/
    applySorting() {
      // асываем текущую страницу при изменении сортировки
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
    justify-content: space-between;
    align-items: center;
    width: 100%;

  }
</style>