<template>
<div class="ryokan">
  <!-- <v-row> -->
      <v-row no-gutters  >
          <!-- <div >  ,-->
            <v-col md="6" cols="12"   v-for="(ryokan,index) in ryokaninfo" :key="ryokan.id" v-if="index===0 || index===3">
            <router-link  class="detail_link "  
            v-bind:to="{name: 'RyokanDetail', params: {ryokanId: ryokan.id}}">
            <v-img
            class="white--text image align-center"
            align="center"
            height="100%"
            width="100%"
            :src="ryokan.ryokan_img">
            <p class="ryokan_text " >{{ryokan.ryokan_place}}</p>
            <p class="ryokan_name">{{ryokan.ryokan_name}}</p>
            </v-img>
            </router-link>
            </v-col> 
           <v-col md="3" cols="12" v-else>
            <router-link v-bind:to="{name: 'RyokanDetail', params: {id: ryokan.id}}" class="detail_link ">
            <v-img
            class="white--text image align-center"
            align="center"
            height="100%"
            width="100%"
            :src="ryokan.ryokan_img"
            >
            <p class="ryokan_text">{{ryokan.ryokan_place}}<br><span>{{ryokan.ryokan_name}}</span></p>
            </v-img>
            </router-link>
        </v-col> 
        
  <!-- </div> -->
    
           
        <!-- <v-col md="3" cols="12" >
            <router-link :to="`/RyokanDetail`" class="detail_link" v-else>
            <v-img
            class="white--text image align-center"
            align="center"
            height="100%"
            width="100%"
            :src="ryokan.ryokan_img"
            >
            <p class="ryokan_text">{{ryokan.ryokan_place}}<br><span>{{ryokan.ryokan_name}}</span></p>
            </v-img>
            </router-link>
        </v-col>  -->
                <!-- <v-col md="3" cols="12" >
            <router-link :to="`/RyokanDetail`" class="detail_link">
            <v-img
            class="white--text image align-center"
            align="center"
            height="100%"
            width="100%"
            :src="ryokan.ryokan_img"
            >
            <p class="ryokan_text">{{ryokan.ryokan_place}}<br><span>{{ryokan.ryokan_name}}</span></p>
            </v-img>
            </router-link>
        </v-col>  -->
        
        <!-- <v-col md="3" cols="12" >
            <router-link :to="`/RyokanDetail`" class="detail_link">
            <v-img
            class="white--text image"
            height="100%"
            width="100%"
            :src="ryokan">
            <p class="ryokan_text">{{place}}<br><span>{{name}}</span></p>
            </v-img>
            </router-link>
        </v-col>     -->
        <!-- <v-col md="3" cols="12" >
            <div class="ryokan_card">
                <p class="ryokan_text">鳥取<br><span>養生館</span></p>
                <router-link :to="`/RyokanDetail`">
                <img src="../../../.././public/img/yojokan3.jpg" alt="" class="ryokan_img">
                </router-link>
        </div>
        </v-col>     -->
<!-- 
        <v-col md="3" cols="12">
            <div class="ryokan_card">
                <p class="ryokan_text">鳥取<br><span>養生館</span></p>
                <router-link :to="`/RyokanDetail`">
                    <img src="../../../.././public/img/yojokan6.jpg" alt="" class="ryokan_img">
                </router-link>
            </div>   
        </v-col>    
        <v-col md="3" cols="12" >
            <div class="ryokan_card">
                <p class="ryokan_text">鳥取<br><span>養生館</span></p>
                <router-link :to="`/RyokanDetail`">
                    <img src="../../../.././public/img/yojokan5.jpg" alt="" class="ryokan_img">
                </router-link>
            </div>
        </v-col>    
        <v-col md="6" cols="12" >
            <div class="ryokan_card">
                <p class="ryokan_text">鳥取<br><span>養生館</span></p>
                <router-link :to="`/RyokanDetail`">
                    <img src="../../../.././public/img/yojokan4.jpg" alt="" class="ryokan_img">
                </router-link>
            </div>
        </v-col>
     -->
    <!-- <p class="p1">あ</p>
    <p class="p2">あ</p>
    <p class="p3">あ</p> -->
    </v-row>
  <!-- </v-row> -->
</div>    

</template>
<script>
export default {
    data(){
        return{
            ryokaninfo:{},
            // ryokan:"storage/ryokan_images/養生館.jpg",
            // place:"鳥取",
            // name:"養生館",
            
        };
    },
    mounted(){
        this.getRyokanInfo()
    },
    methods:{
        getRyokanInfo(){
            axios.get('api/ryokan')
            .then(response=>{
                console.log(response.data);
                this.ryokaninfo=response.data;
                console.log(this.ryokaninfo);
                console.log(this.ryokaninfo[0]);
            })
            .catch(err => {
                    console.log(err);
                });
        }
    }
}
</script>
<style >
    .ryokan{
        margin-top: 56px;
    }
.detail_link{
    text-decoration: none !important;
}
.ryokan_text{
    font-family: Noto Serif JP ;
    /* display: flex;
    justify-content: center;
    align-items: center; */
}


    /* div.ryokan_card{
        position: relative;
        height:500px;
        text-align: center;
    }
    img.ryokan_img{
        width:100%;
        height:100%;
        object-fit:cover;
    } */

    /* .ryokan_text{
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
    } */
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