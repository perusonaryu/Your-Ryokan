<template>
  <div class="footer">
      <v-row
      justify="center"
      >
      <v-col md="3" cols="12" class="d-flex justify-center align-center">
          <div class="text">
            <p>Your Ryokan</p>
            <p class="icons">
                <i class="fab fa-twitter fa-2x"></i>
                <i class="fab fa-facebook-f fa-2x"></i>
                <i class="fab fa-instagram fa-2x"></i>
            </p>

          </div>
      </v-col>
      <v-col md="3" cols="12" class="d-flex justify-center align-center">
          <div class="text">
            <p>
                <span>
                    <router-link to="/RyokanPage">
                        旅館
                    </router-link>
                </span>
                ・
                <span>
                    <router-link to="/event">
                        イベント
                    </router-link>
                </span>
                ・
                <span>
                    <router-link to="/contact">
                        お問い合わせ
                    </router-link>
                </span>
                
            </p>
          </div>
      </v-col>
      <v-col md="3" cols="12" class="d-flex justify-center align-center">
          <div class="text">
            <p>
                <i class="far fa-envelope"></i>
                yourryokan@gmail.com
            </p>
            <p>
                <i class="fas fa-phone-volume"></i>
                914-220-6530
            </p>
            <p>
                <i class="fas fa-map-pin"></i>
                Japan Tokyo Omotesando
            </p>
          </div>
      </v-col>
      </v-row>
      <p class="text">
          ©︎ 2020 Your Ryokan
      </p>
  </div>
</template>

<script>
export default {

}
</script>

<style scoped>
a{
    color:white!important;
    text-decoration: none;
}

.footer{
    background-color: black;
    color:white;
    padding:30px 0;
    position: absolute;
    width:100%;
    bottom:0;

    
}

.icons i+i{
    margin-left: 10px;
}

.text{
    text-align: center;
}

.text p{
    text-align: center;
}

.text p+p{
    margin-top: 10px;
}
</style>