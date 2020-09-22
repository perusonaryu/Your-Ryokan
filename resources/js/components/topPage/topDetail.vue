<template>
  <div class="top-detail">
    <!-- <v-parallax 
    src="https://cdn.vuetifyjs.com/images/parallax/material.jpg"
    class="top-image"      
    >
    </v-parallax> -->
    <div class="top-image">
        
    </div>
    <v-row
    justify="center"
    >
        <v-col>
            <p class="text">
                旅館を通じて <br>
                人々のクリエイティビティを最大化する <br>
                木曾路はすべて山の中である。 <br>
                あるところは岨づたいに行く崖の道であり、<br>
                あるところは数十間の深さに臨む木曾川の岸であり、 <br>
                あるところは山の尾をめぐる谷の入り口である。
            </p>
        </v-col>
    </v-row>
    <v-row
    justify="center"
    >
        <v-col md="4" cols="12" class="sub-image">
            <img src="https://images.unsplash.com/photo-1504474298956-b1812fe43d92?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjYzNDZ9" alt="">
        </v-col>
    </v-row>


  </div>
</template>

<script>
export default {

}
</script>

<style scoped>

.top-image{
    background:url('https://cdn.vuetifyjs.com/images/parallax/material.jpg') center / cover;
    min-height:100vh;
    width:100%;

}

.sub-image img{
    width:100%;
    height:350px;
    border-radius:10px;
}

.text{
    text-align: center;
    line-height:3;
    margin-top: 60px;
    font-family: 'Noto Serif JP';
    font-weight:200;
}

@media (max-width: 670px)
{
.sub-image img{
    border-radius:0;
}

}
</style>

<style>
.v-parallax__image{
    min-height:100vw;
    background-size: cover;
}
</style>