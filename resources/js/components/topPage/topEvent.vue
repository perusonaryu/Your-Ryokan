<template>
  <div class="event">
    <h1 class="tit">イベント</h1>
    <v-row justify="center">
      <v-col md="3" cols="11" class="event-card" v-for="event in eventsData" :key="event.id">
        <div class="card-wrap">
          <v-card class="mx-auto card-detail">
            <v-img class="white--text align-end" height="200px" :src="` ${event.event_img_main} `">
              <v-card-title></v-card-title>
            </v-img>

            <v-card-subtitle class="pb-0 mb-1">From {{ event.event_duration }}</v-card-subtitle>

            <v-card-text class="text--primary">
              <h4 class="mb-2">@{{ event.ryokan_name }}</h4>
              <h5>{{ event.event_title }}</h5>
              <!-- <p>
                {{ event.event_description }}
              </p> -->
            </v-card-text>

            <v-card-actions>
              <router-link
                :to="{
                  name: 'RyokanDetail',
                  params: { ryokanId: event.ryokan_id },
                }"
                class="d-flex align-center justify-center mb-5"
              >
                <div class="detail_btn">
                  詳細
                </div>
              </router-link>
            </v-card-actions>
          </v-card>
        </div>
      </v-col>
    </v-row>

    <router-link to="/event" class="button d-flex align-center justify-center">
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

  mounted() {
    this.eventGet();
  },
  methods: {
    eventGet() {
      axios
        .get('/eventgettop')
        .then(response => {
          this.eventsData = response.data;
          // console.log(response.data);
        })
        .catch(error => console.log(error));
    },
  },
};
</script>

<style scoped>
a {
  text-decoration: none;
  color: white !important;
}
.event {
  margin: 60px 0 60px;
}

.tit {
  text-align: center;
  margin-bottom: 40px;
}

.event-card {
  padding: 0;
  box-shadow: 0px 2px 16px 0px rgba(0, 0, 0, 0.14);
  border-radius: 3px;
}

.event-card {
  margin-left: 10px;
}

.text--primary h6{
  font-weight:bold;
}

.card-wrap {
  padding: 5px;
  height:100%;
}

.card-wrap .card-detail{
  height:100%;
}

.card-wrap p {
  color: #666666;
  margin: 0;
}

.v-card__actions a {
  width: 100%;
  text-decoration: none;
  color: black;
  background-color: #eeeeee;
}

.v-card__text {
  padding: 0 16px;
}

.detail_btn {
  color: black;
}

.button {
  width: 200px;
  height: 50px;
  border-radius: 50px;
  background-color: black;
  margin: 18px auto 0;
}

@media (max-width: 670px) {
  .event-card {
    margin-left: 0;
    margin-bottom: 10px;
  }
}
</style>
