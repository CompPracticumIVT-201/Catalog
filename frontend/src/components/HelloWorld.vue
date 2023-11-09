
<template>

  <header>
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <div class="logo" style="margin-top: 40px">
              <a href="" style="text-decoration: none; color: #a1e3a1; font-family: 'Comic Sans MS'; font-size: 40px; font-weight: 600">
                КИНОBOOK
              </a>
            </div>
          </div>
          <div class="col-9">
            <div class="row" >
              <div class="col-8">
                <div class="header_block">
                  <div>
                    <a class="city" href="#">
                      <img src="@/assets/free-icon-location-pin-1201684.png"
                           alt="geolocation"
                           width="15px"
                           height="15px"
                           style="padding-bottom: 2px; padding-left: 2px">
                      <span>&nbsp;Волгоград</span>
                    </a>
                    <a href="tel:+78005503749" style="text-decoration: none; color: black">
                      +7 (800) 550-37-49
                    </a>
                  </div>
                  <div>
                    <ul class="header_block_about">
                      <li class="about_item">
                        <a href="#" style="text-decoration: none; color: black">О сайте</a>
                      </li>
                      <li class="about_item" >
                        <a href="#" style="text-decoration: none; color: black">Наши книги</a>
                      </li>
                      <li class="about_item" >
                        <a href="#" style="text-decoration: none; color: black">Контакты</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <form action="#" class="mt-3" style="display: inline-block">
                  <label class="search_header">
                    <input class="search_header_input"
                           type="text"
                           placeholder="Поиск товара по каталогу">
                    <button class="search_header_button"
                            type="submit"
                            aria-label="search">
                      <img src="@/assets/icons8-поиск.svg"
                           alt="poisk"
                           width="25px"
                           height="25px">
                    </button>
                  </label>
                </form>
                <div class="mt-3" style="display: flex; font-size: 13px; color: black; opacity: 0.5">
                  <a class="info" href="#" style="font-weight: 600">
                    <span>БЕСПЛАТНО</span>
                  </a>
                  <a class="info" href="#" >
                    <span style="white-space: nowrap;">SALE 2023</span>
                  </a>
                  <a class="info" href="#" >
                    <span>Я-АВТОР</span>
                  </a>
                  <a class="info" href="#" style="margin-right: 90px">
                    <span style="white-space: nowrap;">НОВОСТИ</span>
                  </a>
                  <a class="info" href="#" style="margin-right: 3px">
                    <span style="white-space: nowrap;">СПРАВКА</span>
                  </a>
                </div>
              </div>
              <div class="col-4">
                <div class="header_block" style="position: relative; bottom: 7px; justify-content: center">
                  <div class="btn" style="display: flex; position: relative; justify-content: center">
                    <div class="btn-LGreen">Заказать звонок</div>
                    <div class="btn-DGreen" >Написать нам</div>
                  </div>
                </div>
                <div class="basket">
                  <img src="@/assets/icons8-корзина-2-64.png"
                       alt="asd"
                       width="25px"
                       height="25px"
                       style="position:relative; right: 20px;">
                  <span style="position:relative; right: 10px">В корзине пока ничего нет</span>
                </div>
                <div class="mt-3">
                  <div class="group-icons mt-3">
                    <a href="#"  style="margin-right: 10px; text-decoration: none">
                      <img src="@/assets/icons8-показать-64.png"
                           alt="qwe"
                           width="25px"
                           height="25px">
                    </a>
                    <a href="#" style="margin-right: 10px; text-decoration: none">
                      <img src="@/assets/icons8-сердце-48.png"
                           alt="qwe"
                           width="25px"
                           height="25px">
                    </a>
                    <a href="#" style="text-decoration: none">
                      <img src="@/assets/icons8-столбчатая-диаграмма-64.png"
                           alt="qwe"
                           width="25px"
                           height="25px">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          
        </div>
      </div>
    </div>
  </header>

</template>

<style>
.header_block{
  display: flex;
  justify-content: space-between;
}

.city{
  text-decoration: none;
  margin-right: 20px;
  color: green;
}

.header_block_about{
  margin: 2px;
  padding: 0;
}

.about_item{
  display: inline;
  list-style-type: none;
  margin: 5px;
  padding: 0;
}

.search_header{
  background: none;
  float: left;
  color: white;
  font-size: 14px;
  line-height: 40px;
}

.search_header_input{
  position: absolute;
  width: 636px;
}

.search_header_button{
  position: relative;
  border: 0;
  background-color: white;
  left: 585px;
  top: 1px;
}

.info{
  display: flex;
  text-decoration: none;
  color: black;
  margin-right: 79px
}

.btn-LGreen{
  display: inline-block;
  white-space: nowrap;
  outline: none;
  border-radius: 6px;
  font-size: 13px;
  font-weight: 700;
  margin-right: 15px;
  height: 28px;
  padding: 3px 15px;
  color: white;
  background: #77C043;
}

.btn-DGreen{
  display: inline-block;
  white-space: nowrap;
  outline: none;
  border-radius: 6px;
  font-size: 13px;
  color: white;
  font-weight: 700;
  height: 28px;
  padding: 3px 15px;
  background: #00A85F;
}
.basket{
  position: relative;
  display: flex;
  justify-content: center;
  width: 265px;
  height: 45px;
  margin-top: -1px;
  left: 20px;
  font-weight: 700;
  white-space: nowrap;
  outline: none;
  border-radius: 6px;
  font-size: 13px;
  padding: 10px 8px;
  background: #a5a191;
  color: white
}

.group-icons{
  position:relative;
  float: right;
  right: 20px;
  bottom: 20px
}
.header {
  box-shadow: 0 4px 24px rgba(0,0,0,.16);
  padding: 24px 0 16px
}
</style>


<script setup lang="ts">

import { defineComponent } from 'vue';

export default defineComponent({
  data() {
    return {
      searchQuery: ''
    };
  },
  methods: {
    handleSearch() {
      console.log('Searching for:', this.searchQuery);
    }
  }
});
</script>

<style scoped>
.bg-cdeae1 {
  background-color: #cdeae1;
}
</script>