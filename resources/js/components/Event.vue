<template>
  <div class="event">
    <h1 class="tit">イベント</h1>
    <v-row justify="center" align="center" >
        
        <v-col md="5" cols="11" class="event-card"  v-for="event in eventsData" :key="event.id">
            <div class="card-wrap">
                <v-card class="card">
                    <v-row justify="center">
                        <v-col md=6 cols="11" class="img-wrap">
                            <v-img
                            class="white--text image"
                            height="300"
                            width="100%"
                            :src="` ${event.event_img_main} `"
                            >
                            </v-img>

                        </v-col>

                        <v-col md="6" cols="11" class="text">
                            <v-card-subtitle class="pb-0 mb-1" >From {{event.event_duration}} </v-card-subtitle>

                            <v-card-text class="text--primary">
                            <h4 class="mb-2"> {{event.ryokan_name}} </h4>
                            <h4> {{event.event_title}}</h4>
                            <!-- <p>
                                {{event.event_description}}
                            </p> -->
                            </v-card-text>

                            <v-card-actions >
                                <router-link v-bind:to="{name: 'RyokanDetail', params: {ryokanId: event.ryokan_id}}"
                                class="d-flex align-center justify-center mb-5">
                                    <div class="detail_btn">
                                        詳細
                                    </div>
                                </router-link>
                            </v-card-actions>

                        </v-col>

                    </v-row>
                </v-card>

            </div>
        </v-col>


        <!-- <v-col md="5" cols="11" class="event-card">
            <div class="card-wrap">
                <v-card class="card">
                    <v-row justify="center">
                        <v-col md=6 cols="11" class="img-wrap">
                            <v-img
                            class="white--text image"
                            height="100%"
                            width="100%"
                            src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
                            >
                            </v-img>

                        </v-col>

                        <v-col md="6" cols="11" class="text">
                            <v-card-subtitle class="pb-0 mb-1" >From 2020/6/3 to 2020/9/3</v-card-subtitle>

                            <v-card-text class="text--primary">
                            <h4 class="mb-2">地名　　旅館名</h4>
                            <h4>イベント名</h4>
                            <p>
                                あるところは岨づたいに行く崖の道であり、あるところは数十間の深さに臨む木曾川の岸であり、
                                あるところは山の尾をめぐる谷の入り口である。一筋の街道はこの深い森林地帯を貫いていた。
                            </p>
                            </v-card-text>

                            <v-card-actions >
                                <router-link to="/" class="d-flex align-center justify-center mb-5">
                                    <div class="detail_btn">
                                        詳細
                                    </div>
                                </router-link>
                            </v-card-actions>

                        </v-col>

                    </v-row>
                </v-card>

            </div>
        </v-col> -->

    

        

       
        
        
    </v-row>

    <router-link to="/" class="button d-flex align-center justify-center">
      <div>
        イベント一覧
      </div>
    </router-link>
</div>
</template>

<script>
export default {
    data: () => ({
        eventsData: '',
    }),

    mounted(){
        axios.get('/eventget')
        .then(response => {
            this.eventsData = response.data;
            console.log(response.data);
        })
        .catch(error => console.log(error));
    },

    methods:{

    },
}
</script>

<style scoped>
*{
    box-sizing: border-box;
}

a{
    text-decoration: none;
    color:white!important;
}
.event{
    margin: 100px 0 20px;
}

.tit{
    text-align: center;
    margin-bottom: 40px;
}

/* .event-card{
    padding:0;
    box-shadow: 0px 2px 16px 0px rgba(0, 0, 0, 0.14);
    border-radius: 3px;
} */

/* .event-card + .event-card{
    margin-left: 10px;
} */

/* .card-wrap{
    padding:5px;
} */

.card-wrap p{
    color:#666666;
    margin: 0;
}

.img-wrap{
    padding:0;
}

.image{
    border-radius:5px 0 0 5px;
}

/* .text{
    padding:0;
} */

.v-card__actions a{
    width:100%;
    text-decoration: none;
    color:black;
    background-color: #eeeeee;
}

.v-card__text{
    padding:0 16px ;
}

.detail_btn{
    color:black;
}

.button{
  width:200px;
  height: 50px;
  border-radius:50px;
  background-color:black;
  margin:18px auto 0;
}

@media (max-width: 670px)
{
.card{
    width:100%;
}
.event-card{
    padding:0;
    margin-bottom: 10px;
}

.text{
    padding:0;
}

.image{
    border-radius:5px;
}

.img-wrap{
    width:100%;
}

.card-wrap{
    width:100%;
}


}
</style>