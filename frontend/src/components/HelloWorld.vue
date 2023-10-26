
<template>

 <header class="sticky">
   <div class="container">
     <div class="row">
       <div class="col-3">
         <div class="logo">
           <a href="#">
             <img src="@/assets/logotip.png" class="logo" alt="logotip" width="100" height="100">
           </a>
         </div>
       </div>
       <div class="col-9">
         <div class="row">
           <div class="col-8">
             <div class="search_header">
               <input type="text" placeholder="Что будем искать?" class="search_form_txt">
               <button class="searc_btn">
                 <img class="search_input" src="@/assets/search.png" width="30" height="30">
               </button>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

 </header>

</template>

<style>
  header {
    background-color: #2484c6;
    width: 100%;
    height: 150px;
  }
  .logo {
    position: relative;
    top: 8px;
    align-items: center;
    display: flex;
    justify-content: center;
  }
  .search_header {
    border: 1px solid #1a79be;
    display: inline-flex;
    position: relative;
    top: 40px;
    justify-content: space-between;
    align-items: center;
    height: 50px;
    border-radius: 8px;
    overflow: hidden;
    background-color: white;
  }
  .search_form_txt {
    border: none;
    width: 400px;
    outline: none;
    font-size: 20px;
    padding-right: 10px;
    padding-left: 15px;
  }
  .searc_btn {
    border: none;
    width: 42px;
    height: 42px;
    position: relative;
    background-color: white;
    right: 5px;
  }
  .search_input {
    display: flex;
    align-items: center;
  }
  .search_header:focus {
    border: 3px solid blue;
  }
</style>


<script setup lang="ts">
</script>