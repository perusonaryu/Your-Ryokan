<template>

  <v-row no-gutters>
      
        <v-col cols="6">
            <div class="ryokan_card">
                <router-link :to="`/RyokanDetail`">
                    <p class="ryokan_text">鳥取<br><span>養生館</span></p>
                    <img src="../../../.././public/img/yojokan1.jpg" alt="" class="ryokan_img">
                </router-link> 
            </div> 
        </v-col>    
        <v-col cols="3" >
            <div class="ryokan_card">
                <p class="ryokan_text">鳥取<br><span>養生館</span></p>
                <router-link :to="`/RyokanDetail`">
                    <img src="../../../.././public/img/yojokan2.jpg" alt="" class="ryokan_img">
                </router-link>
            </div>
        </v-col>    
        <v-col cols="3" >
            <div class="ryokan_card">
                <p class="ryokan_text">鳥取<br><span>養生館</span></p>
                <router-link :to="`/RyokanDetail`">
                <img src="../../../.././public/img/yojokan3.jpg" alt="" class="ryokan_img">
                </router-link>
        </div>
        </v-col>    

        <v-col cols="3">
            <div class="ryokan_card">
                <p class="ryokan_text">鳥取<br><span>養生館</span></p>
                <router-link :to="`/RyokanDetail`">
                    <img src="../../../.././public/img/yojokan6.jpg" alt="" class="ryokan_img">
                </router-link>
            </div>   
        </v-col>    
        <v-col cols="3" >
            <div class="ryokan_card">
                <p class="ryokan_text">鳥取<br><span>養生館</span></p>
                <router-link :to="`/RyokanDetail`">
                    <img src="../../../.././public/img/yojokan5.jpg" alt="" class="ryokan_img">
                </router-link>
            </div>
        </v-col>    
        <v-col cols="6" >
            <div class="ryokan_card">
                <p class="ryokan_text">鳥取<br><span>養生館</span></p>
                <router-link :to="`/RyokanDetail`">
                    <img src="../../../.././public/img/yojokan4.jpg" alt="" class="ryokan_img">
                </router-link>
            </div>
        </v-col>
    
    <!-- <p class="p1">あ</p>
    <p class="p2">あ</p>
    <p class="p3">あ</p> -->

  </v-row>
    

</template>

<style >
    div.ryokan_card{
        position: relative;
        height:500px;
        text-align: center;
    }
    img.ryokan_img{
        width:100%;
        height:100%;
        object-fit:cover;
    }

    .ryokan_text{
        position: absolute;
        color: white;
        font-size: 21px;
        font-family: serif;
        font-weight: 500;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
        margin:0;
        padding:0;
    }
    .ryokan_text span{
        font-size:30px;
    }
    /* .p1{
        font-family: sans-serif;
    }
    .p2{
        font-family: serif;
    }
    .p3{
        font-family: cursive;
    } */
</style>