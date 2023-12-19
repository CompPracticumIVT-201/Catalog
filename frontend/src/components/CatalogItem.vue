<template>
  <ModalWindow
      v-if="isInfoPopupVisible"
        @closeModal="closeInfoPopup"
    >
      <div style="display: flex;  align-items: flex-start">
        <img src="@/assets/pyshkin.jpg" alt="ddd" width="350" height="550" style="margin-top: 10px">
        <div class="text-container" style="margin-left: 10px; ">
          <p style="margin-left: 30px; font-family: 'Roboto Condensed'; font-size: 32px; white-space: nowrap">{{ products[0].name_book }}</p>
          <p style="margin-left: 30px;font-family: 'Roboto Condensed';font-size: 24px; color: #993E22; margin-bottom: 70px">{{ products[0].author }}</p>
          <div style=" width: 530px; margin-left: 30px;font-family: 'Roboto Condensed';font-size: 20px; margin-bottom: 20px; display: flex; justify-content: space-between">
            <span style="opacity: 0.6">Издательство</span>
            <div style="float: right; margin-left:160px; white-space: wrap">{{products[0].production}}</div>
          </div>
          <div style="
                      width: 430px;
                      margin-left: 30px;
                      font-family: 'Roboto Condensed';
                      font-size: 20px;
                      margin-bottom: 20px">
            <span style="opacity: 0.6">Год издания</span>
            <span style="float: right; margin-right: 110px">{{products[0].year_production}}</span>
          </div>
          <div style="margin-bottom: 20px;
                      width: 430px;
                      margin-left: 30px;
                      font-family: 'Roboto Condensed';
                      font-size: 20px;">
          <span style="opacity: 0.6">Количество страниц</span>
          <span style="float: right; margin-right: 120px">{{products[0].page}}</span>
        </div>
          <div style="margin-bottom: 20px;
                      width: 325px;
                      margin-left: 30px;
                      font-family: 'Roboto Condensed';
                      font-size: 20px;
                      display: flex; justify-content: space-between">
            <span style="opacity: 0.6">Тип обложки</span>
            <div style="float: left; margin-left:60px; white-space: wrap">{{products[0].type_preview}}</div>
          </div>
          <div style="margin-bottom: 60px;
                      width: 430px;
                      margin-left: 30px;
                      font-family: 'Roboto Condensed';
                      font-size: 20px;">
            <span style="opacity: 0.6">Возрастные ограничения</span>
            <span style="float: right; margin-right: 120px">{{products[0].age_baryer}}</span>
          </div>
          <div style="display: flex;justify-content: center; margin-bottom: 50px">
            <p style="font-family: 'Roboto Condensed'; font-size: 48px; color: #993E22 ">{{products[0].price}} &#8381;</p>
          </div>
        </div>
      </div>
    </ModalWindow>
  <div
      class="catalog-item"
      @click="showpopupInfo"
  >
    <div class=""
    >
      <img v-if="product_data.id==0" src="@/assets/pyshkin.jpg" alt="ddd" width="240" height="270" style="margin-bottom: 10px" >
      <img v-if="product_data.id==10" src="@/assets/attak.jpg" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
      <img v-if="product_data.id==1" src="@/assets/magic.jpeg" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
      <img v-if="product_data.id==3" src="@/assets/pyshkin.jpg" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
      <img v-if="product_data.id==5" src="@/assets/pyshkin.jpg" alt="ddd" width="240" height="270" style="margin-bottom: 10px" >
      <img v-if="product_data.id==7" src="@/assets/attak.jpg" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
      <img v-if="product_data.id==6" src="@/assets/magic.jpeg" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
      <img v-if="product_data.id==8" src="@/assets/pyshkin.jpg" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
      <img v-if="product_data.id==15" src="@/assets/pyshkin.jpg" alt="ddd" width="240" height="270" style="margin-bottom: 10px" >
      <img v-if="product_data.id==9" src="@/assets/attak.jpg" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
      <img v-if="product_data.id==2" src="@/assets/magic.jpeg" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
      <img v-if="product_data.id==13" src="@/assets/pyshkin.jpg" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
      <img v-if="product_data.id==12" src="@/assets/pyshkin.jpg" alt="ddd" width="240" height="270" style="margin-bottom: 10px" >
      <img v-if="product_data.id==11" src="@/assets/attak.jpg" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
      <img v-if="product_data.id==14" src="@/assets/magic.jpeg" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
      <img v-if="product_data.id==4" src="@/assets/magic.jpeg" alt="ddd" width="240" height="270" style="margin-bottom: 10px">


      <p style="font-size: 17px; font-family: 'Roboto Condensed'; margin-bottom: 20px">{{ product_data.name }}</p>
      <p style="font-size: 17px; font-family: 'Roboto Condensed'; opacity: 0.7">{{product_data.Author}}</p>
      <div  style="display: flex; justify-content: center; font-size: 17px; font-family: 'Roboto Condensed'; color: #993E22; "><p>{{product_data.price}} &#8381;</p></div>

    </div>
  </div>
</template>

<script lang="ts">
import ModalWindow from "./ModalWindow.vue";
import  image1 from '@/assets/1748097.png';
import  image2 from '@/assets/attak.jpg';
import  image3 from '@/assets/pyshkin.jpg';
import  image4 from '@/assets/magic.jpeg';
import axios from "axios";
export default {
  name: 'CatalogItem',
  components: {
    ModalWindow
  },
  props: {
    product_data: {
      type:Object,
      default(){
        return {}
      }
    }
  },
  data(){
    return {
      isInfoPopupVisible: false,
      products: [],
      errors: [],
      counter: 0,
    }
  },
  methods: {
    showpopupInfo(){
      this.isInfoPopupVisible = true;
      this.getBookId(this.product_data.id)
    },
    addCounter(){
      this.counter++;
    },
    getBookId(id){
      axios
          .get(`http://localhost:8000/api/books/get/${id}`)
          .then(response => {this.products = response.data.data[0]})
          .catch(e => {
            this.errors.push(e)
          });
    },
    closeInfoPopup(){
      this.isInfoPopupVisible = false;
    }
  },
  computed: {

  },
  /*mounted(){
    this.id = 1;
    axios
        .get(`http://localhost:8000/api/books/get/${this.id}`)
        .then(response => {this.products = response.data.data[0]})
        .catch(e => {
          this.errors.push(e)
        })
  },*/
}
</script>

<style>
.transition{
  transition: 1s;
}
  .catalog-item{
    align-items: center;
    margin-right: 60px;
    width: 20%;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, .3);
    padding: 9px;
    margin-bottom: 10px;
    height: 400px;
    background-color: #FCEFEF
  }
  .catalog-item:hover{
    -webkit-transform: scale(1.15);
    -ms-transform: scale(1.15);
    transition: transform 700ms;
    transform: scale(1.15);
    background-color: #FCEFEF
  }
  .catalog-item-info{

  }
</style>