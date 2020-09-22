<template>

    <v-row no-gutters>

        <v-col cols="5" no-gutters class="aa">
            <div class="ryokan_detail_card">
                <img src="../../../.././public/img/yojokan1.jpg" alt="" class="ryokan_detail_img" width="100%">
            </div>
        </v-col>

        <v-col cols="7">
            <!-- <div class="ryokan_detail_text"> -->
                <p class="ryokan_detail_description">
                    <span class="place_ryokan_name">鳥取  養生館</span><br>
                    心と体を整え、本来の自分に還る宿、古より豊かな水を湛える「東郷湖」<br>    
                    その静かな湖畔に私たちが小さな別荘を構えたのは、明治五年のことでした。<br>
                    心を癒す天然温泉、体に染み入る「じげの味」―地元の皆様が集う別荘は、<br>
                    いつしか宿となり、心と体の「養生の館」として親しまれてまいりました。<br>
                    ここには華やかなものはありません。その代わり、いつまでも見飽きること<br>    
                    のない「水辺の風景」と「自然の音」があります。日々ひたむきなあなたへ贈る<br>
                    、大人の休息時間。湖畔のリトリート「養生館」へようこそ。
                    
                </p>
            <!-- </div> -->
        </v-col>

        <!-- <v-col cols="7">
            <div class="ryokan_detail_text">
                <p class="ryokan_detail_description">
                    <span class="place_ryokan_name">鳥取  イベント</span><br>
                    標高900mの三徳山のふもとにある三徳山三佛寺（みとくさんさんぶつじ）では<br>    
                    秋には周囲の山々が紅葉し、高台からの景色が楽しめます。<br>
                    標高440m付近に位置する重文の文殊堂と地蔵堂は、崖の上の岩角に建てられ、<br>
                    周囲は回廊になっているほか、標高520mの断崖絶壁に造られた<br>
                    奥院、国宝投入堂は見るものを圧倒します。<br>    
                    
                </p>
            </div>
        </v-col> -->
          
        <!-- <v-col cols="5" no-gutters class="aa">
            <div class="ryokan_detail_card">
                <img src="../../../.././public/img/tottori_eve1.jpg" alt="" class="ryokan_detail_img">
            </div>
        </v-col>

        
            <v-col cols="6" > -->
               <!-- <v-container class="mt-12"> -->
                
                    <!-- <v-date-picker v-model="selectDate" color="black" locale="en" width="500"></v-date-picker>
                <v-col cols=12>
                    <div>{{ selectDate }}</div>
                </v-col> -->
            
            <!-- </v-container> -->
            <!-- </v-col>
            <v-col cols="6" class="aa">
                <RyokanForm/>
            </v-col> -->
                 
   </v-row>
</template>

<style scoped>


    .row{
        margin: 0 auto;
        width: 1100px;
    }
    .col{
        max-height: 440px;
        height: 100%;
        /* margin: 0 auto; */
    }
    .aa{
        width: 440px;
    }
    .ryokan_detail_card{
        position: relative;
        height: 100%;
        width: 100%;  
    }
    
    .ryokan_detail_img{
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform : translate(-50%,-50%);
        transform : translate(-50%,-50%);
        width: 100%;
        height: 320px;
        border-radius: 10px;
        /* vertical-align: bottom; */
        /* display: block; */
        /* object-fit: cover; */
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
        margin:0;
        padding:0;
    }

    .ryokan_detail_text{
       position: relative;
       height: 100%;
       /* text-align: right; */
    }

    .place_ryokan_name{
        font-size: 28px;
        line-height: 2;
        font-family: serif;
    }
    .ryokan_detail_description{
        width: 100%;
        padding-left:40px;
        position: absolute;
        top: 50%;
        top: 50%;
        -webkit-transform : translateY(-50%);
        transform : translateY(-50%);;
        font-size: 16px;
    }
    /* .form{
        height: 440px;
    } */
    /* .calender{
        height: 100%;
    } */

    /* .v-picker{
        width: 290px;
        margin: 0 auto;
    } */

    /* .col6{
        text-align: center;
    } */
</style>

