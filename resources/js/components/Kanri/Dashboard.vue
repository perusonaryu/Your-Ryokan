<template>
  <div>
       <!-- <v-navigation-drawer
      v-model="drawer"
      :mini-variant="miniVariant"
      :clipped="clipped"
      fixed
      app
    >
      <v-list>
        <v-list-item
          v-for="(item, i) in items"
          :key="i"
          :to="item.to"
          router
          exact
        >
          <v-list-item-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title v-text="item.title" />
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer> -->
    <div class="button-link aaaa">
     {{ user.name }}<br />
    </div>
      <button  class="button-link aaaa" @click.prevent="logout">ログアウト</button>
   <router-link to="/EventList" class="button d-flex align-center justify-center">
      <div class="button-link">
        イベント一覧
      </div>
    </router-link>
    <router-link to="/RyokanList" class="button d-flex align-center justify-center">
      <div class="button-link">
       旅館一覧
      </div>
    </router-link>
    <router-link to="/RyokanAdd" class="button d-flex align-center justify-center">
      <div class="button-link">
        旅館追加
      </div>
    </router-link>
    <router-link to="/ReservationList" class="button d-flex align-center justify-center">
      <div class="button-link">
        予約確認
      </div>
    </router-link>
    
    <!-- <component :is="currentView"></component> -->
  </div>
</template>

<script>
export default {
  data: () => ({
    user: '',
    message: '',
    // currentView:'RyokanList',
    //  clipped: false,
    //   drawer: true,
    //   fixed: false,
    //   items: [
    //     {
    //       icon: 'mdi-account',
    //       title: '管理者一覧',
    //       to: '/admin'
    //     },
    //   ],
    //   miniVariant: false,
    //   title: 'Laravel Nuxt Admin'
  }),
  mounted() {
    axios.get('/user').then((res)=>{
        this.user = res.data
        // console.log(res.data);
    }).catch((err)=>{
        console.log(err);
    });
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
  width: 170px !important;
}
.button-link{
  color: white;
  font-weight: bold;
  font-size: 25px;
  background: black;
  width: 100%;
  box-shadow: 0 2px 2px 0 rgba(0,0,0,.12), 0 2px 2px 0 rgba(0,0,0,.24);/*影*/
  margin: 15px;
  border-radius: 5px;
  text-align: center;
 
}
.button-link:hover {/*ホバー時*/
  box-shadow: 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.12), 0 2px 4px -1px rgba(0,0,0,.2);
}
.button{
  text-decoration: none !important;
  width: 200px;
}
</style>
