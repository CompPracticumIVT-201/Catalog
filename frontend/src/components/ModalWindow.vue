<template>
  <div class="v-popup">
    <div class="v-popup__header">
      <span>Popup name</span>
      <span>
        <i
            class="material-icons"
            @click="closeModal"
        >close</i>
      </span>
    </div>
    <div class="v-popup__content">
      <slot></slot>
    </div>
    <div class="v-popup__footer">
        <button class="close_modal" @click="closeModal">Close</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "ModalWindow",
  props: {},
  data(){
    return {

    }
  },
  computed: {

  },
  methods: {
    closeModal(){
      this.$emit('closeModal')
    }
  }
}

</script>

<style>
.v-popup{
  padding: 16px;
  position: fixed;
  top: 50px;
  width: 400px;
  background: #ffffff;
  box-shadow: 0 0 17px 0 #e7e7e7;
}
  .v-popup__header{
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .v-popup__content{
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .v-popup__footer{
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .close_modal{
    background: red;
    padding: 8px;
    color: #ffffff;
  }
</style>