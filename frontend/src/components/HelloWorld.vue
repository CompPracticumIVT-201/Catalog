
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
                      <a href="" >Популярное</a>
                    </li>
                    <li >
                      <a href="">Отзывы</a>
                    </li>
                    <li >
                      <a href="">Рассылка</a>
                    </li>
                  </ul>
                </div>


              </div>
              <div class="col-4">
                <div class="header-block-btn">
                  <div class="btn-reg"><p>Регистрация</p></div>
                  <div class="btn-log"><p>Вход</p></div>
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
    color: #ffefd0;
    background-color: #dd5a31;
    width: 46px;
    height: 36px;
    border-radius: 12px;
    margin-left: 30px;
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

import { defineComponent } from 'vue';

</script>
