<template>
  <div id="app" style="display: flex; flex-direction: column; height: 100%">
    <HelloWorld/>
    <router-view ></router-view>
    <TheWelcome/>
  </div>

<!--  style="display: flex; flex-direction: column; height: 100%"-->


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





