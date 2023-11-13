<template>
  <div class="catalog-item">

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

    <img :src="product_data.image" alt="ddd" width="200" height="250">
    <p>{{ product_data.name }}</p>
    <p>Price: {{product_data.price}}</p>
    <button
      class="catalog-item-info"
      @click="showpopupInfo"
    >Show info</button>
    <button>Add to cart</button>
  </div>
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
  .catalog-item{
    align-items: center;
    margin-right: 10px;
    width: 20%;
    box-shadow: 0 0 8px 0 #e0e0e0;
    padding: 9px;
    margin-bottom: 10px;
    height: 400px;

  }
</style>