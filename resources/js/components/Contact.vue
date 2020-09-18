<template>
  <div class="contact">
      <v-container>
        <v-row justify="center" align="center" class="form-wrap">
            <v-col md="7" cols="11">
                <v-text-field
                outlined
                v-model="name"
                label="お名前"
                required
                ></v-text-field>

                <v-text-field
                outlined
                v-model="email"
                label="メールアドレス"
                required
                ></v-text-field>

                <v-textarea
                outlined
                name="input-7-4"
                label="メッセージ"
                ></v-textarea>


                <a class="button d-flex justify-center align-center">
                    <div>
                        送信
                    </div>
                </a>
            </v-col>

        </v-row>
      </v-container>
  </div>
</template>

<script>
export default {

}
</script>

<style scoped>

.form-wrap{
    padding:130px 0;
}

a.button{
    text-decoration:none;
    background-color: #1e88e5;
    color:white;
    height:50px;
    border-radius:50px;
    font-weight:bold;
}

</style>