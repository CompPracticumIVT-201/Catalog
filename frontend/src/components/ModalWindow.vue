<template>
  <div class="pop-wrapper" @click="closeModalOutside">
    <div class="v-popup">
      <div class="v-popup__header">
        <span>{{product_data.name}}</span>
        <span>
        <i
            class="material-icons"
            @click="closeModal"
            style="cursor: pointer;"
        >close</i>
      </span>
      </div>
      <div class="v-popup__content">
        <slot></slot>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "ModalWindow",
  props: {
    product_data: {
      type: Object,
      default() {
        return {}
      }
    }
  },
  data() {
    return {}
  },
  methods: {
    closeModal() {
      this.$emit('closeModal');
    },
    closeModalOutside(event) {
      // Проверяем, является ли цель клика модальным окном или его потомком
      const modal = this.$el.querySelector('.v-popup');
      if (!modal.contains(event.target)) {
        // Если клик был совершен вне модального окна, закрываем его
        this.closeModal();
      }
    },


  }
}
</script>

<style>
.pop-wrapper{
  background: rgba(82, 80, 80, 0.4);
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  right: 0;
  left: 0;
  top: 0;
  bottom: 0;
  z-index: 1000;


}
.v-popup{
  padding: 16px;
  position: fixed;
  top: 70px;
  width: 1100px;
  height: 600px;
  background: #ffffff;
  box-shadow: 0 0 17px 0 #e7e7e7;
}
  .v-popup__header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 440px;
    float: right;
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