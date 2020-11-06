<template>
  <div class="placeSerchList">
      <h2 class="text-center result"> {{ serchPlace }} での検索結果</h2>
    <v-container>
      <v-row >
        <v-col md="4" cols="12" class="ryokan-image" v-for="ryokan in ryokanSerchResult" :key="ryokan.id">
          <router-link
            :to="{
              name: 'RyokanDetail',
              params: { ryokanId: ryokan.id },
            }"
          >
            <v-img :src="ryokan.ryokan_img" class="image">
              <div class="d-flex justify-center align-center ryokan-name">
                <div>
                  <h5 class="ryokan_region">{{ ryokan.ryokan_region }}</h5>
                  <h4 class="ryokan_name">{{ ryokan.ryokan_name }}</h4>
                </div>
              </div>
            </v-img>
          </router-link>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
export default {
  data: () => ({
    ryokanSerchResult: '',
    serchPlace: '',
  }),
  mounted() {
    this.placeSerchResult();
  },
  methods: {
    placeSerchResult() {
      axios
        .get('/placeSerch/' + this.$route.params.place)
        .then(response => {
          this.ryokanSerchResult = response.data;
          this.serchPlace = this.$route.params.place;
        })
        .catch(error => console.log(error));
    },
  },
};
</script>

<style scoped>
* {
  box-sizing: border-box;
}

a {
  text-decoration: none;
  color: white !important;
}

.result{
    margin-top: 50px;
}

.tit {
  text-align: center;
  font-size: 48px !important;
  font-weight: initial;
  margin-bottom: 20px;
}

.image {
  width: 100%;
  border-radius: 10px;
  height: 280px;
  box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.2);
}

.ryokan-name {
  height: 100%;
  text-align: center;
  color: white;
}

.ryokan_region{
    font-size:30px;
    font-weight:bold;
}

.ryokan-image {
  padding: 5px;
  border-radius: 10px;
}
</style>
