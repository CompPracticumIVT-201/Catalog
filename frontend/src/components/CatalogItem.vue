<template>


    <ModalWindow
        v-if="isInfoPopupVisible"
        @closeModal="closeInfoPopup"
    >
      <div style="display: flex;  align-items: flex-start">
        <img :src="product_data.image" alt="ddd" width="400" height="550" style="margin-top: 10px">
        <div class="text-container" style="margin-left: 10px; ">
          <p style="margin-left: 30px; font-family: 'Roboto Condensed'; font-size: 32px; white-space: nowrap">{{ product_data.name }}</p>
          <p style="margin-left: 30px;font-family: 'Roboto Condensed';font-size: 24px; color: #993E22; margin-bottom: 70px">{{ product_data.author }}</p>
          <div style=" width: 430px; margin-left: 30px;font-family: 'Roboto Condensed';font-size: 20px; margin-bottom: 20px">
            <span style="opacity: 0.6">Издательство</span>
            <div style="float: right; margin-right:95px">{{product_data.publishing_house}}</div>
          </div>
          <div style="
                      width: 430px;
                      margin-left: 30px;
                      font-family: 'Roboto Condensed';
                      font-size: 20px;
                      margin-bottom: 20px">
            <span style="opacity: 0.6">Год издания</span>
            <span style="float: right; margin-right: 110px">{{product_data.year_publishing}}</span>
          </div>
          <div style="margin-bottom: 20px;
                      width: 430px;
                      margin-left: 30px;
                      font-family: 'Roboto Condensed';
                      font-size: 20px;">
          <span style="opacity: 0.6">Количество страниц</span>
          <span style="float: right; margin-right: 120px">{{product_data.pages}}</span>
        </div>
          <div style="margin-bottom: 20px;
                      width: 430px;
                      margin-left: 30px;
                      font-family: 'Roboto Condensed';
                      font-size: 20px;">
            <span style="opacity: 0.6">Тип обложки</span>
            <span style="float: right;">{{product_data.cover_type}}</span>
          </div>
          <div style="margin-bottom: 90px;
                      width: 430px;
                      margin-left: 30px;
                      font-family: 'Roboto Condensed';
                      font-size: 20px;">
            <span style="opacity: 0.6">Возрастные ограничения</span>
            <span style="float: right; margin-right: 120px">{{product_data.age}}</span>
          </div>
          <div style="display: flex;justify-content: center">
            <p style="font-family: 'Roboto Condensed'; font-size: 48px; color: #993E22 ">{{product_data.price}} руб.</p>
          </div>

        </div>
      </div>
    </ModalWindow>
  <div
      class="catalog-item"
      @click="showpopupInfo"
  >
    <div class="">
      <img :src="product_data.image" alt="ddd" width="240" height="270" style="margin-bottom: 10px">
      <p style="font-size: 17px; font-family: 'Roboto Condensed'; margin-bottom: 20px">{{ product_data.name }}</p>
      <p style="font-size: 17px; font-family: 'Roboto Condensed'; opacity: 0.7">{{product_data.author}}</p>
      <div style="display: flex; justify-content: center; font-size: 17px; font-family: 'Roboto Condensed'; color: #993E22; "><p>{{product_data.price}} руб.</p></div>


    </div>

  </div>

  <!--    <button
      class="catalog-item-info"
      @click="showpopupInfo"
    >Show info</button>-->
</template>

<script lang="ts">
import ModalWindow from "./ModalWindow.vue";
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
    }
  },
  methods: {
    showpopupInfo(){
      this.isInfoPopupVisible = true;
    },
    closeInfoPopup(){
      this.isInfoPopupVisible = false;
    }
  },
  computed: {

  }
}
</script>

<style>
.transition{
  transition: 1s;
}
  .catalog-item{
    align-items: center;
    margin-right: 10px;
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