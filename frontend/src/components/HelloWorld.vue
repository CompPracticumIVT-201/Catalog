
<template>

  <header>
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <div class="logo" >
              <a href="" >
                <img src="@/assets/logob.png" alt="" width="180" height="90">
              </a>
            </div>
          </div>
          <div class="col-9">
            <div class="row" >
              <div class="col-8">
                <div class="header-block">
                  <ul class="header-block-item" >
                    <li>
                      <router-link :to="{name: 'C'}"><a href="" >Популярное</a></router-link>
                    </li>
                    <li >
                      <router-link :to="{name: 'D'}"><a href="">Отзывы</a></router-link>
                    </li>
                    <li >
                      <router-link :to="{name: 'E'}"><a href="">Рассылка</a></router-link>

                    </li>
                  </ul>
                </div>


              </div>
              <div class="col-4">
                <div class="header-block-btn">


                  <router-link :to="{name: 'A'}"> <button class="btn-reg"><p>Регистрация</p></button></router-link>
                  <router-link :to="{name: 'B'}"> <button class="btn-log"><p>Вход</p></button></router-link>
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
  .logo{
    margin-top: 10px
  }
  .logo a{
    text-decoration: none;
  }
  .header-block{
    margin-top: 30px
  }
  .header-block-item{
    display: flex;
    float: right;
    list-style-type: none;
  }
  .header-block-item li{
    margin-left: 70px
  }
  .header-block-item a{
    text-decoration: none;
    color: #351f1f;
    font-family: 'Roboto Condensed';
    font-size: 16px;
    font-weight: 550
  }
  .header-block-btn{
    margin-top: 30px;
    display: flex;
    margin-left: 50px;
  }
  .btn-reg{
    position: relative;
    color: #ffefd0;
    background-color: #dd5a31;
    width: 102px;
    height: 36px;
    border-radius: 12px;
    border: 1px solid #dd5a31;
  }
  .btn-reg p{
    position: absolute;
    margin: 0;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
  }
  .btn-log{
    position: relative;
    color: #dd5a31;
    background-color: #ffefd0;
    width: 46px;
    height: 36px;
    border-radius: 12px;
    margin-left: 30px;
    border: 3px solid #dd5a31;
  }
  .btn-log p{
    position: absolute;
    margin: 0;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
  }
</style>


<script lang="ts">
</script>
