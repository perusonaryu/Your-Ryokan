<template>
  <div class="ryokan">
    <h1 class="tit">旅館</h1>
    <v-container>
      <v-row justify="center">
        <v-col
          md="4"
          col="12"
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
                  <h5>{{ ryokan.ryokan_place }}</h5>
                  <h4>{{ ryokan.ryokan_name }}</h4>
                </div>
              </div>
            </v-img>
          </router-link>
        </v-col>
        <!-- <v-col md="3" class="ryokan-image">
        <router-link to="/">
          <v-img
            src="https://images.unsplash.com/photo-1557409518-691ebcd96038?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjYzNDZ9"
            class="image"
          >
            <div class="d-flex justify-center align-center ryokan-name">
              <div>
                <h5>地名</h5>
                <h4>旅館名</h4>
              </div>
            </div>
          </v-img>
        </router-link>
      </v-col>
      <v-col md="3" cols="12" class="ryokan-image">
        <router-link to="/">
          <v-img
            src="https://images.unsplash.com/photo-1522547902298-51566e4fb383?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjYzNDZ9"
            class="image"
          >
            <div class="d-flex justify-center align-center ryokan-name">
              <div>
                <h5>地名</h5>
                <h4>旅館名</h4>
              </div>
            </div>
          </v-img>
        </router-link>
      </v-col>
    </v-row>

    <v-row justify="center">
      <v-col md="3" cols="12" class="ryokan-image">
        <router-link to="/">
          <v-img
            src="https://images.unsplash.com/photo-1505069446780-4ef442b5207f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjYzNDZ9"
            class="image"
          >
            <div class="d-flex justify-center align-center ryokan-name">
              <div>
                <h5>地名</h5>
                <h4>旅館名</h4>
              </div>
            </div>
          </v-img>
        </router-link>
      </v-col>
      <v-col md="3" cols="12" class="ryokan-image">
        <router-link to="/">
          <v-img
            src="https://images.unsplash.com/photo-1444807294837-6c4a5293b555?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjYzNDZ9"
            class="image"
          >
            <div class="d-flex justify-center align-center ryokan-name">
              <div>
                <h5>地名</h5>
                <h4>旅館名</h4>
              </div>
            </div>
          </v-img>
        </router-link>
      </v-col>
      <v-col md="3" cols="12" class="ryokan-image">
        <router-link to="/">
          <v-img
            src="https://images.unsplash.com/photo-1490806843957-31f4c9a91c65?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjYzNDZ9"
            class="image"
          >
            <div class="d-flex justify-center align-center ryokan-name">
              <div>
                <h5>地名</h5>
                <h4>旅館名</h4>
              </div>
            </div>
          </v-img>
        </router-link>
      </v-col> -->
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