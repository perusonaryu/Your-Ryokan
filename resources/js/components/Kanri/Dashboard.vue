<template>
  <div>
    <div class="aaaa">
      Dashboard <br />
      Name: {{ user.name }}<br />
      <button @click.prevent="logout">ログアウト</button>
   <router-link to="/EventList" class="button d-flex align-center justify-center">
      <div>
        イベント一覧
      </div>
    </router-link>
    <router-link to="/RyokanList" class="button d-flex align-center justify-center">
      <div>
       旅館一覧
      </div>
    </router-link>
    <router-link to="/RyokanAdd" class="button d-flex align-center justify-center">
      <div>
        旅館追加
      </div>
    </router-link>
    <router-link to="/RyokanAdd" class="button d-flex align-center justify-center">
      <div>
        予約確認
      </div>
    </router-link>
    </div>
    <!-- <component :is="currentView"></component> -->
  </div>
</template>

<script>
export default {
  data: () => ({
    user: '',
    message: '',
    // currentView:'RyokanList',
  }),
  mounted() {
    // axios.get('/api/user').then((res)=>{
    //     this.user = res.data
    //     console.log(res.data);
    // }).catch((err)=>{
    //     console.log(err);
    // });
  },
  methods: {
    logout() {
      axios.post('/api/logout').then(() => {
        this.$router.push({ name: 'top-page' });
      });
    },
    // change(){
    //     this.currentView = "RyokanAdd"
    // }
  },
};
</script>

<style>
.aaaa {
  margin-top: 50px;
}
</style>
