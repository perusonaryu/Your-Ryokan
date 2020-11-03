<template>
  <div class="ryokan">
    <h1 class="tit">旅館</h1>
    <v-container>
      <v-row justify="center">
        <v-col
          md="4"
          cols="12"
          class="ryokan-image"
          v-for="ryokan in ryokaninfo"
          :key="ryokan.id"
        >
          <router-link 
          :to="{
            name: 'RyokanDetail',
            params: { ryokanId: ryokan.id }
          }"
          >
            <v-img
              :src="ryokan.ryokan_img"
              class="image"
            >
              <div class="d-flex justify-center align-center ryokan-name">
                <div>
                  <h5>{{ ryokan.ryokan_region}}</h5>
                  <h4>{{ ryokan.ryokan_name }}</h4>
                </div>
              </div>
            </v-img>
          </router-link>
        </v-col>
      </v-row>
    </v-container>

    <router-link
      to="/RyokanPage"
      class="button d-flex align-center justify-center"
    >
      <div>旅館一覧</div>
    </router-link>
  </div>
</template>

<script>
export default {
  data: () => ({
    ryokaninfo: "",
  }),

  mounted() {
    this.getRyokanInfo();
  },
  methods: {
    getRyokanInfo() {
      axios
        .get("/topryokan")
        .then((response) => {
          //   console.log(response.data);
          this.ryokaninfo = response.data;
          // console.log(this.ryokaninfo);
          //   console.log(this.ryokaninfo[0]);
        })
        .catch((err) => {
          console.log(err);
        });
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

/* .ryokan{
  margin: 60px 150px 0px;
} */

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

.ryokan-image {
  padding: 5px;
  border-radius: 10px;
}

.button {
  width: 200px;
  height: 50px;
  border-radius: 50px;
  background-color: black;
  margin: 18px auto 0;
}
</style>