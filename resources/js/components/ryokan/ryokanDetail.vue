<template>

    <v-row no-gutters class="wrapper">

        <!-- 旅館詳細部分 -->

        <v-col md="5" cols="12">
            <v-img
            class="white--text image "
            height="100%"
            width="100%"
            :src="ryokanitem.ryokan_img">
            </v-img>
        </v-col>
       
        <v-col md="7" cols="12" align-self="center" class="text_content" >
            <h1>{{ryokanitem.ryokan_name}}</h1>
            <p>{{ryokanitem.ryokan_discription}}</p>
        </v-col>

        <!-- 部屋詳細リンク -->
         <v-col cols="12">
            <p style="text-align:center;font-size:30px;font-family:Noto Serif JP;margin:55px auto;">
                <a :href="ryokanitem.ryokan_url" style="text-decoration:none;color:black;">
                    お部屋の詳細はこちらから
                </a>
            </p>
        </v-col>
        

        <!-- イベント詳細部分 -->
        <v-col md="7" cols="12" align-self="center" class="text_content" >
                <h1>{{eventitem.event_title}}</h1>
                <p>{{eventitem.event_description}}</p>
        </v-col>

         <v-col md="5" cols="12">
            <v-img
            class="white--text image "
            height="100%"
            width="100%"
            :src="eventitem.event_img_main">
            </v-img>
        </v-col>
         
       
        <!-- カレンダー&フォーム部分 -->

      
        <v-col md="6" cols="10" class="calender" >
            <div class="dapi">
                <v-date-picker v-model="picker" locale="ja" class="ca_content">
                    </v-date-picker></div>
            
        </v-col>

        <v-col md="6" cols="10" class="form">   
            <RyokanForm/>
        </v-col>
    </v-row>
    
</template>

<script>
export default {
    props:{
        ryokanId:String
    },
    data(){
        return{
            ryokanitem:"",
            eventitem:"",
            picker: new Date().toISOString().substr(0, 10),
        }
    },
    mounted(){
        this.getRyokanItem();
        this.getEventItem();
    },
    methods: {
        getRyokanItem() {
            axios.get('/api/ryokan/' + this.ryokanId)//$route.params.id/
            .then( ( res ) => {
                this.ryokanitem = res.data;
                console.log(res.data);
            })
            .catch(err => {
                    console.log(err);
                });
        },
        getEventItem() {
            axios.get('/eventdetail/'+this.ryokanId)
            .then( ( res ) => {
                this.eventitem = res.data[0];
                // this.ryokanitem_name = res.data.ryokan_name;
                // this.ryokanitem_place = res.data.ryokan_place;
                console.log(res.data[0]);
                console.log(this.eventitem);
            })
            .catch(err => {
                    console.log(err);
                });
        },


    }
}
</script>

<style>


.wrapper{
    margin:100px 100px
}
@media screen and (max-width:960px){
.wrapper {
   margin:55px 0px;
}
}
.text_content{
    padding:50px !important;
    font-family: Noto Serif JP;
}
.text_content p{
    font-size: 25px;
}
.calender,.form{
    margin: 55px auto ;
    
}
.dapi{
    width: 300px;
    margin:0 auto;
}

</style>