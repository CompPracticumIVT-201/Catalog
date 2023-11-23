<template>
  <div style="display: flex; justify-content: center; margin-bottom: 40px">
    <button v-if="currentPage > 1" @click="changePage(currentPage - 1)" class="circle" style="border-radius: 50%; background-color: #FCEFEF; width: 40px; height: 38px; margin-right: 10px"><span style="font-size: 35px; font-family: 'Roboto Condensed'; position: relative; bottom: 12px">&laquo;</span></button>
    <button
        v-for="page in totalPages"
        :key="page"
        :class="{ active: page === currentPage }"
        @click="changePage(page)"
        class="circle"
        style="border-radius: 50%; background-color: #FCEFEF; width: 40px; height: 38px; margin-right: 10px"
    >
      <span style="font-size: 25px; font-family: 'Roboto Condensed';" >{{ page }}</span>

    </button>
    <div >
      <button class="circle" v-if="currentPage < totalPages" @click="changePage(currentPage + 1)" style="border-radius: 50%; background-color: #FCEFEF; width: 40px; height: 38px; display: flex; justify-content: center"><span style="font-size: 35px; font-family: 'Roboto Condensed'; position: relative; bottom: 12px">&raquo;</span></button>
    </div>

  </div>
</template>

<script>
export default {
  props: {
    currentPage: {
      type: Number,
      required: true
    },
    totalPages: {
      type: Number,
      required: true
    }
  },
  methods: {
    changePage(page) {
      this.$emit('page-changed', page);
    }
  }
};
</script>

<style>
button.active {
  font-weight: bold;
}
</style>