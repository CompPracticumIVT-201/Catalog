<template>
  <div class="select-item">
    <p
        class="title"
        @click="areOptionsVisible = !areOptionsVisible"
       style="margin-left: 100px; border: 1px solid green">{{ selected }}</p>
    <div class="options"
      v-if="areOptionsVisible"
    >
      <p
          v-for="option in options"
          :key="option.value"
          @click="selectOptions(option)"
      >
        {{option.name}}
      </p>
    </div>

  </div>

</template>

<script lang="ts">
export default {
  name: "SelectItem",
  props: {
    options: {
      type: Array,
      default(){
        return[]
      }
    },
    selected: {
      type: String,
      default: ''
    }
  },
  data(){
    return {
      areOptionsVisible: false,
    }
  },
  methods: {
    selectOptions(option){
      this.$emit('select', option)
      this.areOptionsVisible = false
    },
    hideSelect(){
      this.areOptionsVisible = false
    }
  },
  mounted(){
    document.addEventListener('click', this.hideSelect.bind(this), true)
  },
  beforeDestroy(){
    document.removeEventListener('click', this.hideSelect)
  }
}
</script>

<style scoped>

.select-item{
  position: relative;
  width: 200px;
}

.options{
  width: 100%;
  border: 1px solid #00A85F;
  top: 30px;
  margin-left: 100px;
}
.options p:hover{
  background-color: #e7e7e7;
}
</style>