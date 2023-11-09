<template>
  <footer style="margin-top: 40px">
    <div  class="info-akcii">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="h2" style="font-size: 24px;">
              Будьте в курсе всех акций!
            </div>
            <p class="mt-2" style="font-size: 14px; margin: 8px 0 0">
              Узнавайте лучшие акции, выгодные цены и многое другое
            </p>
          </div>
          <div class="col-lg-6 ">
            <form>
              <div class="form-input-btn" >
                <input  type="text" placeholder="Введите Ваш e-mail" >
                <button type="submit" >
                  Подписаться
                </button>
              </div>
              <label class="form-p mt-1">
                <input type="checkbox" style="height: 16px;margin-right: 10px;">
                Настоящим даю согласие на рассылку
              </label>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col">
            <ul  style=" padding: 0; margin-top: 26px">
              <li class="top-li"> Каталог книг и подарков </li>
              <li class="item-ul" >
                <a href="#">Книги</a>
              </li>
              <li class="item-ul" >
                <a href="#" >Подарки и сувениры</a>
              </li>
              <li class="item-ul" >
                <a href="#">Софт</a>
              </li>
              <li  class="item-ul" >
                <a href="#" >Подарочные сертификаты и обложки</a>
              </li>
              <li class="item-ul" >
                <a href="#">Живопись, современное искусство</a>
              </li>
              <li class="item-ul" >
                <a href="#" >Блог</a>
              </li>
            </ul>
          </div>
          <div class="col mt-3 mt-sm-0" style="position:relative; ">
            <ul style=" padding: 0; margin-top: 26px">
              <li class="top-li"> Клиентам и партнёрам </li>
              <li class="item-ul" >
                <a href="#">Пользовательское соглашение</a>
              </li>
              <li class="item-ul">
                <a href="#" >Реклама на сайте</a>
              </li>
              <li class="item-ul" >
                <a href="#"  >Обратная связь</a>
              </li>
              <li class="item-ul" >
                <a href="#"  >Вакансии</a>
              </li>
              <li class="item-ul">
                <a href="#" >Помощь</a>
              </li>
            </ul>
          </div>

          <div class="col mt-3 mt-sm-0" style="position:relative; ">
            <ul  style=" padding: 0; margin-top: 26px">
              <li class="top-li" > Свяжитесь с нами </li>
              <li class="item-ul" >
                <a href="tel:+78005503749" >8 (800) 555-35-35</a>
              </li>
              <li class="item-ul" >
                <span>пн-пт с 8:00 до 18:30 <br>сб-вс с 9:30 до 17:00</span>
              </li>
              <li class="item-ul">
                <a href="#" class="email" style="color: #77c043">info@kinobook.ru</a>
              </li>
              <li class="item-ul" >
                <span>г. Волгоград, <br>ул. Санаторий Волгоград, д. 66</span>
              </li>
              <li class="item-ul" >
                <span style="color: #77c043">Связь с руководителем</span>
              </li>
            </ul>
          </div>
          <div class="col">
            <div  style="margin-top: 26px">
              <div class="questions">Возникли вопросы?</div>
              <div class="footer-Green" >Заказать звонок</div>
              <div class="footer-DGreen">Написать нам</div>
            </div>
            <div class=" mt-4" style="font-size: 22px; margin-left: 26px;">
              <a href="#" style="text-decoration: none;margin-right: 5px">
                <img src="@/assets/vk.png"
                     alt="vk"
                     width="23"
                     height="23" >
              </a>
              <a href="#" style="text-decoration: none;margin-right: 5px">
                <img src="@/assets/telegram.png"
                     alt="vk"
                     width="23"
                     height="23" >
              </a>
              <a href="#" style="text-decoration: none;margin-right: 5px">
                <img src="@/assets/zen.png"
                     alt="vk"
                     width="23"
                     height="23" >
              </a>
              <a href="#" style="text-decoration: none;">
                <img src="@/assets/youtube.png"
                     alt="vk"
                     width="32"
                     height="32" x>
              </a>
            </div>
          </div>
        </div>
        <div class="row mt-4 ">
          <div class="col-12 col-md-6">
            <a href="" style="text-decoration: none; color: #a1e3a1; font-family: 'Comic Sans MS'; font-size: 40px; font-weight: 600">
              КИНОBOOK
            </a>

          </div>
          <div class="col-12 col-md-6">

          </div>
        </div>
        <div class="row mt-4">
          <div class="col">
            <div class="footer-gg">
                        <span>© 2013–2023 КИНОBOOK - книжный интернет-магазин г. Волгоград.
                            Все права защищены, нарушения авторских прав будут преследоваться по закону.
                        </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<style>
.info-akcii{
  background-color: #dfddd0;
  padding: 16px 0
}

.form-input-btn{
  position: relative;
}

.form-input-btn input{
  width: 465px;
  height: 45px
}

.form-input-btn button{
  border-radius: 0 4px 4px 0;
  font-size: 16px;
  font-weight: 400;
  height: 100%;
  padding: 0 40px;
  position: absolute;
  right: 0;
  top: 0;
  align-items: center;
  cursor: pointer;
  color: #fff;
  background-color: #77c043;
  border: 1px solid #77c043;
}

.form-p{
  align-items: center;
  display: flex;
  flex-wrap: wrap
}

.top-li{
  list-style-type: none;
  margin: 0;
  font-weight: 700;
  font-size: 14px;
  padding: 0;
}

.item-ul{
  font-size: 14px;
  margin-top: 8px;
  list-style-type: none
}

.item-ul a{
  text-decoration: none;
  color: black
}

.questions{
  width: 100%;
  margin-left: 24px;
  font-size: 14px;
  font-weight: 700;
  display: flex
}

.footer-Green{
  margin-left: 24px;
  margin-bottom: 10px;
  font-size: 14px;
  font-weight: 700;
  background-color: #77c043;
  color: #fff;
  display: inline-block;
  padding: 4px 14px;
  cursor: pointer;
  border-radius: 4px;
  align-items: center;
}

.footer-DGreen{
  margin-left: 24px;
  font-size: 14px;
  font-weight: 700;
  background-color: #00a85f;
  color: #fff;
  display: inline-block;
  padding: 4px 14px;
  cursor: pointer;
  border-radius: 4px;
  align-items: center;
}

.footer-gg{
  border-top: 1px solid #a5a191;
  padding-top: 24px;
  margin-bottom: 10px
}

.footer-gg{
  color: #a5a191;
  font-size: 12px;
}
</style>
<script setup lang="ts">
</script>