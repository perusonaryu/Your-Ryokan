<template>
<div>
    <v-app-bar
    color="#aaacaf"
    fixed
    flat
    class="header"
    >
        <v-app-bar-nav-icon></v-app-bar-nav-icon>

        <router-link to="/">
            <v-toolbar-title class="logo">
                YOUR RYOKAN
            </v-toolbar-title>

        </router-link>

      <v-spacer></v-spacer>

      <router-link to="/dashboard">旅館</router-link>
      <router-link to="/event">イベント</router-link>
      <router-link to="/contact">お問い合わせ</router-link>
    </v-app-bar>
</div>
  
  
</template>

<script>
export default {

}
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
    opacity:0.4;
}

.logo{
    opacity:1;
    color:white;
    font-size:30px;
    font-weight:bold;
    font-family: 'Noto Serif JP';
}
</style>