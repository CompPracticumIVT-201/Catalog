<template>
  <div class="catalog-item">
    <img :src="product_data.image" alt="ddd" width="200" height="250">
    <p>{{ product_data.name }}</p>
    <p>Price: {{product_data.price}}</p>
    <button>Add to cart</button>
  </div>
</template>

<script lang="ts">
export default {
  name: 'CatalogItem',
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