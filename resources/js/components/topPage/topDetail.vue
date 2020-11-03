<template>
  <div class="top-detail">
    <!-- <v-parallax 
    src="https://cdn.vuetifyjs.com/images/parallax/material.jpg"
    class="top-image"      
    >
    </v-parallax> -->
    <div class="top-image d-flex justify-center align-center text-center">
      <div class="text-white top-title">
        <h1 class="mb-15">クリエイティビティを必要とする遠大ビジネスマンに最適な環境を</h1>
        <h1>
          創造性が必要なプロ人材のアウトプットを最大化する
          <br />
          短期集中宿泊型サービス
        </h1>
        <h1>Your Ryokan</h1>
        <div class="d-flex justify-center align-center">
          <div id="serch-form" method="get">
            <input id="sbox2" v-model="placeSerch" type="text" placeholder="地名で探す" />
            <router-link :to="{
                name:'placeSerchList',
                params:{place:`${placeSerch}`}
            }">
                <input id="sbtn" type="submit" value="検索" />
            </router-link>
          </div>
        </div>
      </div>
    </div>
    <v-row justify="center">
      <v-col>
        <p class="text">
          旅館を通じて <br />
          人々のクリエイティビティを最大化する <br />
          木曾路はすべて山の中である。 <br />
          あるところは岨づたいに行く崖の道であり、<br />
          あるところは数十間の深さに臨む木曾川の岸であり、 <br />
          あるところは山の尾をめぐる谷の入り口である。
        </p>
      </v-col>
    </v-row>
    <v-row justify="center">
      <v-col md="4" cols="12" class="sub-image">
        <img
          src="https://images.unsplash.com/photo-1504474298956-b1812fe43d92?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjYzNDZ9"
          alt=""
        />
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {
    data: () => ({
        placeSerch:'',
    })
};
</script>

<style scoped>
/* .top-detail{
    padding-top: 50px;
} */

.top-title h1 {
  /* font-weight: bold; */
  font-size: 40px;
}

.top-image {
  background-image: url('http://perusonaryu.sakura.ne.jp/your-ryokan/img/youjokan_top.jpg');
  /* background-image:url('https://your-ryokan.slack.com/files/U019LJJ9J5N/F01BAD9CZ5Z/________________.jpg'); */
  background-size: cover;
  background-position: center;
  min-height: 100vh;
  width: 100%;
}

.sub-image img {
  width: 100%;
  height: 350px;
  border-radius: 10px;
}

.text {
  text-align: center;
  line-height: 3;
  margin-top: 60px;
  font-family: 'Noto Serif JP';
  font-weight: 200;
}

#serch-form {
  height: 60px;
  width: 100%;
  margin-top: 100px;
}

#sbox2 {
  width: 60%;
  height: 100%;
  padding: 0 10px;
  border-radius: 2px 0 0 2px;
  outline: 0;
  background: #eee;
}
/*検索ボタン*/
#sbtn {
  width: 70px; /*検索ボタンの横幅*/
  height: 100%; /*検索ボタンの縦幅*/
  border-radius: 0 2px 2px 0; /*検索ボタンの角を丸める*/
  background:black; /*検索ボタンの背景カラー*/
  border: none; /*検索ボタンの枠線を消す*/
  color: #fff; /*検索ボタンのテキストカラー*/
  font-weight: bold; /*検索ボタンのテキスト太字*/
  font-size: 16px; /*検索ボタンのフォントサイズ*/
  margin-left: -4px;
}
/*検索ボタンマウスオーバー時*/
#sbtn:hover {
    opacity: 0.7; /*検索ボタンマウスオーバー時のフォントカラー*/
}

@media (max-width: 670px) {
  .sub-image img {
    border-radius: 0;
  }
}
</style>

<style>
.v-parallax__image {
  min-height: 100vw;
  background-size: cover;
}
</style>
