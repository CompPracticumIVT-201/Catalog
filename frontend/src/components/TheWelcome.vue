<template>
  <footer style="background-color: #993E22; bottom: 0">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <div class="logo" >
            <a href="" >
              <img src="@/assets/footer.png" alt="" width="200" height="110">
            </a>
          </div>
          <span style="color: #FFEFD0; font-family: 'Roboto Condensed'; font-size: 11px; margin-left: 180px">2023/все права защищены</span>
        </div>
        <div class="col-9">
          <ul  style=" padding: 0; margin-top: 46px;  list-style-type: none; display: flex; margin-left: 150px;  ">
            <li class="item-ul" style="margin-right: 50px">
              <router-link :to="{name: 'C'}" style="text-decoration: none">
                <a href=""
                   style="text-decoration: none;color: #FFEFD0; font-family: 'Roboto Condensed'; font-size: 16px">
                  Популярное
                </a>
              </router-link>
            </li>
            <li class="item-ul" style="margin-right: 50px">
              <router-link :to="{name: 'D'}" style="text-decoration: none">
                <a href=""
                   style="text-decoration: none;color: #FFEFD0; font-family: 'Roboto Condensed'; font-size: 16px">
                  Отзывы
                </a>
              </router-link>
            </li>
            <li class="item-ul" style="margin-right: 50px">
              <router-link :to="{name: 'E'}" style="text-decoration: none">
                <a href=""
                   style="text-decoration: none;color: #FFEFD0; font-family: 'Roboto Condensed'; font-size: 16px">
                  Рассылка
                </a>
              </router-link>
            </li>
            <li  class="item-ul" style="margin-right: 50px">
              <a href="#" style="text-decoration: none; color: #FFEFD0; font-family: 'Roboto Condensed'; font-size: 16px">Каталог</a>
            </li>
            <li class="item-ul" style="margin-right: 50px">
              <router-link :to="{name: 'A'}" style="text-decoration: none">
                <a href=""
                   style="text-decoration: none;color: #FFEFD0; font-family: 'Roboto Condensed'; font-size: 16px">
                  Регистрация
                </a>
              </router-link>
            </li>
            <li class="item-ul" style="margin-right: 50px">
              <router-link :to="{name: 'B'}" style="text-decoration: none">
                <a href=""
                   style="text-decoration: none;color: #FFEFD0; font-family: 'Roboto Condensed'; font-size: 16px">
                  Вход
                </a>
              </router-link>
            </li>
          </ul>
          <ul  style=" padding: 0; margin-top: 66px;  list-style-type: none; display: flex; margin-left: 150px">
            <li class="item-ul" style="margin-right: 50px">
              <span href="#" style="text-decoration: none; color: #FFEFD0; font-family: 'Roboto Condensed'; font-size: 16px">Связаться с нами:</span>
            </li>
            <li class="item-ul" style="margin-right: 97px">
              <span href="#" style="text-decoration: none; color: #FFEFD0; font-family: 'Roboto Condensed'; font-size: 16px">8 (800) 555 35 35</span>
            </li>
            <li class="item-ul" style="margin-right: 50px">
              <router-link :to="{name: 'F'}" style="text-decoration: none">
                <a href=""
                   style="text-decoration: none;color: #FFEFD0; font-family: 'Roboto Condensed'; font-size: 16px">
                  Вконтакте
                </a>
              </router-link>
            </li>
            <li class="item-ul" style="margin-left: 50px">
              <router-link :to="{name: 'G'}" style="text-decoration: none">
                <a href=""
                   style="text-decoration: none;color: #FFEFD0; font-family: 'Roboto Condensed'; font-size: 16px">
                  Телеграм
                </a>
              </router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</template>

<style>
.logo{
  margin-top: 30px
}
.logo a{
  text-decoration: none;
}
</style>
<script setup lang="ts">
</script>