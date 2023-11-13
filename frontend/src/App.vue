
<template>
  <div id="app">
    <HelloWorld/>
    <vMainWrapper/>
    <SelectItem
      :options="options"
      @select="optionSelect"
      :selected="selected"
    />
    <p>Я наконецто сделал это{{selected}}</p>
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
        {name: 'Option 1',  value: 1},
        {name: 'Option 2', value: 2},
        {name: 'Option 3', value: 3},
        {name: 'Option 4', value: 4},
      ],
      selected: 'Select'
    }
  },
  methods: {
    optionSelect(option){
      this.selected = option.name
    }
  }
}
</script>
<style>
</style>





