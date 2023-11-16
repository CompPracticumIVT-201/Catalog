<template>


    <ModalWindow
        v-if="isInfoPopupVisible"
        @closeModal="closeInfoPopup"
    >
      <div style="display: flex;  align-items: flex-start">
        <img :src="product_data.image" alt="ddd" width="200" height="250" >
        <div class="text-container" style="margin-left: 10px">
          <p style="margin-left: 10px">{{ product_data.name }}</p>

          <p>Price: {{product_data.price}}</p>
        </div>
      </div>
    </ModalWindow>
  <div
      class="catalog-item"
      @click="showpopupInfo"
  >
    <div class="">
      <img :src="product_data.image" alt="ddd" width="200" height="250">
      <p>{{ product_data.name }}</p>
      <p>Price: {{product_data.price}}</p>


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
    background-color: #ffefd0;
  }
  .catalog-item:hover{
    -webkit-transform: scale(1.15);
    -ms-transform: scale(1.15);
    transition: transform 700ms;
    transform: scale(1.15);
    background: linear-gradient(to bottom, #ffefd0, #ffe1b9);
  }
  .catalog-item-info{

  }
</style>