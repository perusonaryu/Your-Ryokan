<template>
<div>
    <v-app-bar
    color="black"
    fixed
    flat
    class="header"
    height="64px"
    >
        <router-link to="/">
            <v-toolbar-title class="logo">
                YOUR RYOKAN
            </v-toolbar-title>

        </router-link>

        <v-spacer></v-spacer>
        <div class="nav_link">
            <router-link to="/RyokanPage">旅館</router-link>
            <router-link to="/event">イベント</router-link>
            <router-link to="/contact">お問い合わせ</router-link>
        </div>

        <div class="hamburger sp">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="globalMenuSp">
            <ul>
                <li class="link"><router-link to="/RyokanPage">旅館</router-link></li>
                <li class="link"><router-link to="/event">イベント</router-link></li>
                <li class="link"><router-link to="/contact">お問い合わせ</router-link></li>
            </ul>
        </nav>

    </v-app-bar>
</div>
  
  
</template>

<script>
export default {

}

$(function() {
    $('.hamburger').click(function() {
        $(this).toggleClass('active');
        // $('.globalMenuSp').fadeIn(1000);
 
        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active').fadeIn(500);
            $('.logo').hide();
            // $('.globalMenuSp').fadeIn(2000);
        } else {
            $('.globalMenuSp').removeClass('active').fadeOut(500);
            // $('.globalMenuSp').fadeOut(1000);
            $('.logo').show();
        }
    });

    $('.link').click(function(){
        $('.hamburger').toggleClass('active');
        $('.globalMenuSp').removeClass('active').fadeOut(500);
        $('.logo').show();
    });
});
</script>

<style scoped>

a{
    text-decoration:none;
    color:white!important;
    font-size:20px;

}

a+a{
    margin-left: 20px;
}
.header{
  background-color:rgba(0,0,0,0);
}

.logo{
    opacity:1;
    color:white;
    font-size:30px;
    font-weight:bold;
    font-family: 'Noto Serif JP';
}





/*ハンバーガーボタン*/
.hamburger {
  /* display : block;
  position: fixed;
  z-index : 3;
  right : 13px;
  top   : 12px;
  width : 42px;
  height: 42px;
  cursor: pointer;
  text-align: center; */
  z-index : 3;
  position: relative;
  width: 36px;
  height: 32px;
  cursor: pointer;
  /* top   : 12px; */
  right : 13px;
  display: none;
  
  /* padding:2px 0; */
}

.hamburger span {
  /* display : block;
  position: absolute;
  width   : 30px;
  height  : 2px ;
  left    : 6px;
  background : #555;
  -webkit-transition: 0.3s ease-in-out;
  -moz-transition   : 0.3s ease-in-out;
  transition        : 0.3s ease-in-out; */
  position: absolute;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: white;
  border-radius: 4px;
}

.hamburger , .hamburger span{
    
    transition: all .5s;
    box-sizing: border-box;
}

.hamburger span:nth-child(1) {
  /* top: 10px; */
  top: 0;
}
.hamburger span:nth-child(2) {
  /* top: 20px; */
  top: 15px;
}
.hamburger span:nth-child(3) {
  /* top: 30px; */
  bottom: 0;
}

/* ナビ開いてる時のボタン */

.hamburger.active {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}
.hamburger.active span:nth-child(1) {
  -webkit-transform: translateY(15px) rotate(-45deg);
  transform: translateY(15px) rotate(-45deg);
}
.hamburger.active span:nth-child(2) {
  -webkit-transform: translateY(0) rotate(45deg);
  transform: translateY(0) rotate(45deg);
}
.hamburger.active span:nth-child(3) {
  opacity: 0;
}

nav.globalMenuSp {
  position: fixed;
  z-index : 2;
  top  : 0;
  left : 0;
  color: #fff;
  background:black;
  text-align: center;
  width: 100%;
  /* opacity: 0; */
  display: none;
  min-height:100vh;
  /* transition: opacity .6s ease, visibility .6s ease; */
}

nav.globalMenuSp ul {
  margin: 0 auto;
  padding: 0;
  width: 100%;
}

nav.globalMenuSp ul li {
  list-style-type: none;
  padding: 0;
  width: 100%;
  /* transition: .4s all; */
}

nav.globalMenuSp ul li:last-child {
  padding-bottom: 0;
}
nav.globalMenuSp ul li.link:hover{
  background :#ddd;
}

nav.globalMenuSp ul li a {
  display: block;
  color: #fff;
  padding: 1em 0;
  text-decoration :none;
}

/* nav.globalMenuSp.active {
  opacity: 100;
  display: inline-block;

} */

@media (max-width: 670px)
{
.nav_link{
    display: none;
}
.hamburger{
    z-index : 3;
    display: block;
}

nav.globalMenuSp.active{
    display: flex;
    align-items: center;
}

}

</style>