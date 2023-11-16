
<template>
  <div id="app">
    <HelloWorld/>
    <vMainWrapper/>
<!--    <SelectItem
      :options="options"
      @select="optionSelect"
      :selected="selected"
    />-->
    <ul>
      <li v-for="product in products" :key="product.id">
        {{ product.name }} - {{ product.price }}
      </li>
    </ul>

<!--    <TheCatalog
        :options="options"
        @select="optionSelect"
        :selected="selected"
    />-->


    <TheWelcome/>
  </div>

</template>

<script lang="ts">

import HelloWorld from './components/HelloWorld.vue'
import TheWelcome from './components/TheWelcome.vue'
import vMainWrapper from './components/MainWrapper.vue'
import SelectItem from "@/components/SelectItem.vue";

export default {
  name: 'app',
  components: {
    SelectItem,
    HelloWorld,
    TheWelcome,
    vMainWrapper
  },
  data() {
    return {
      options: [
        {name: 'По максимальной цене',  value: 1},
        {name: 'По минимальной цене', value: 2},
      ],
      selected: 'Select'
    }
  },
  methods: {
    optionSelect(option){
      this.selected = option.name
    }
  },
  computed: {
    sortedProducts() {
      if (this.sortOption === 'name') {
        return this.products.slice().sort((a, b) => a.name.localeCompare(b.name));
      } else if (this.sortOption === 'price') {
        return this.products.slice().sort((a, b) => a.price - b.price);
      }
    }
  }
}
</script>
<style>
</style>





