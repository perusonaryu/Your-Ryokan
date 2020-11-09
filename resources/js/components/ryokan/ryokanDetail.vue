<template>
  <v-row no-gutters class="wrapper"
  align="center"
  >
    <!-- 旅館詳細部分 -->

    <v-col md="5" cols="12">
      <v-img class="white--text image " height="100%" width="100%" :src="ryokanitem.ryokan_img">
      </v-img>
    </v-col>

    <v-col md="7" cols="12" align-self="center" class="text_content">
      <h1>{{ ryokanitem.ryokan_name }}</h1>
      <h4>{{ ryokanitem.ryokan_discription }}</h4>
    </v-col>

    <!-- 部屋詳細リンク -->
    <!-- <v-col cols="12">
            <p style="text-align:center;font-size:30px;font-family:Noto Serif JP;margin:55px auto;">
                <a :href="ryokanitem.ryokan_url" style="text-decoration:none;color:black;">
                    お部屋の詳細はこちらから
                </a>
            </p>
        </v-col> -->

    <!-- イベント詳細部分 -->
    <v-col md="7" cols="12" align-self="center" class="event_content mt-9">
      <h3>{{ eventitem.event_title }}</h3>
      <p class="event-description">{{ eventitem.event_description }}</p>
    </v-col>

    <v-col md="5" cols="12">
      <v-img class="white--text image " height="100%" width="100%" :src="eventitem.event_img_main">
      </v-img>
    </v-col>

    <!-- カレンダー&フォーム部分 -->

    <v-col md="6" cols="10" class="calender">
      <div class="dapi">
        <v-date-picker v-model="picker" locale="ja" class="ca_content"> </v-date-picker>
      </div>
    </v-col>

    <v-col md="6" cols="10" class="form">
      <RyokanForm :RyokanId="this.$route.params.ryokanId" />
    </v-col>
  </v-row>
</template>

<script>
export default {
  // props:{
  //     ryokanId:Number
  // },
  data() {
    return {
      ryokanitem: '',
      eventitem: '',
      picker: new Date().toISOString().substr(0, 10),
    };
  },
  mounted() {
    this.getRyokanItem();
    this.getEventItem();
    let id = this.$route.params.ryokanId;
    console.log(this.$route.params.ryokanId);
    console.log(id);
  },
  methods: {
    getRyokanItem() {
      axios
        .get('/api/ryokan/' + this.$route.params.ryokanId) //$route.params.id/
        .then(res => {
          this.ryokanitem = res.data;
          console.log(res.data);
        })
        .catch(err => {
          console.log(err);
        });
    },
    getEventItem() {
      axios
        .get('/eventdetail/' + this.$route.params.ryokanId)
        .then(res => {
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
  },
};
</script>

<style scoped>
.event-description{
  white-space: pre-wrap !important;
}

.wrapper {
  margin: 100px 100px;
}
@media screen and (max-width: 960px) {
  .wrapper {
    margin: 0px 0px 200px;
  }
}
.text_content {
  padding: 50px !important;
  font-family: Noto Serif JP;
}

.event_content{
    padding:10px;
    font-family: Noto Serif JP;
}

.calender,
.form {
  margin: 55px auto;
}
.dapi {
  width: 300px;
  margin: 0 auto;
}
</style>
