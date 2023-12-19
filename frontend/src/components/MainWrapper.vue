<template>
  <div class="main-wrapper" style="flex: 1 0 auto">
    <div class="container" >
      <div class="row">
        <div class="col-12">
          <vTheMainCatalog/>
        </div>
      </div>
    </div>


  </div>
</template>

<script lang="ts">
  import vTheMainCatalog from './TheMainCatalog.vue';
  import vCatalogItem from './CatalogItem.vue';
  import vCart from './Cart.vue';

  export default {
    name: 'MainWrapper',
    components: {
      vTheMainCatalog,
    },
    props: {},
    data(){
      return {
        title: 'Main Wrapper'
      }
    },
    computed: {},
    methods: {},
    watch: {},
    mounted(){}

  }
</script>

<style>
  .main-wrapper{
    margin-top: 100px;
    width: 100%;

  }
</style>