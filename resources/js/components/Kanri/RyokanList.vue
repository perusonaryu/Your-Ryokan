<template>
  <div class="list-section">
    <h1 style="text-align:center;margin:40px 0px;">旅館一覧</h1>
    <v-row justify="center">
      <v-col md="3" cols="11" class="" v-for="ryokan in RyokanData" :key="ryokan.id">
        <v-card class="mx-auto" data-toggle="modal" :data-target="`#itemModal${ryokan.id}`">
          <v-img class="" height="200px" :src="` ${ryokan.ryokan_img} `"> </v-img>
          <v-card-title>{{ ryokan.ryokan_name }}</v-card-title>
          <v-card-subtitle class="pb-0 mb-1">{{ ryokan.ryokan_region }}</v-card-subtitle>
          <v-card-actions>
            <router-link
              v-bind:to="{ name: 'eventRegister', params: { ryokanId: ryokan.id } }"
              class="d-flex align-center justify-center mb-5"
            >
              <div class="detail_btn">
                イベントを追加
              </div>
            </router-link>
          </v-card-actions>
        </v-card>
        <div
          class="modal fade"
          :id="`itemModal${ryokan.id}`"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <img :src="`${ryokan.ryokan_img}`" />
                <button
                  type="button"
                  class="close d-flex align-center justify-center"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h5 class="modal-title" id="exampleModalLabel">{{ ryokan.ryokan_name }}</h5>
                <p>
                  {{ ryokan.ryokan_region }}
                </p>
                <p>
                  {{ ryokan.ryokan_place }}
                </p>
                <p>
                  <a :href="ryokan.ryokan_url">リンク</a>
                </p>
                <p>
                  {{ ryokan.ryokan_discription }}
                </p>
              </div>
              <div class="">
                <router-link
                  v-bind:to="{ name: 'eventRegister', params: { ryokanId: ryokan.id } }"
                  class="d-flex align-center justify-center mb-5"
                >
                  <div class="detail_btn">
                    イベントを追加
                  </div>
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  data: () => ({
    RyokanData: '',
  }),
  mounted() {
    this.getRyokanInfo();
  },
  created() {
    this.getRyokanInfo();
  },
  methods: {
    getRyokanInfo() {
      axios
        .get('/api/ryokan')
        .then(res => {
          this.RyokanData = res.data;
          console.log(res.data);
        })
        .catch(err => {
          this.message = err;
        });
    },
  },
};
</script>

<style>
.modal-header img {
  width: 100%;
  height: 300px;
}
</style>
