<template>
  <v-row justify="center" align="center" class="login-form">
    <v-col md="5">
      <div class="text-center mb-5">
        <h1>管理者ログイン</h1>
      </div>

      <div>
        <v-text-field
          color="black"
          label="メールアドレス"
          required
          v-model="form.email"
          outlined
        ></v-text-field>
        <v-text-field
          v-model="form.password"
          type="password"
          color="black"
          label="パスワード"
          required
          outlined
        ></v-text-field>
        <div class="d-flex justify-end">
          <v-btn text @click.prevent="login" color="black">ログイン</v-btn>
        </div>
      </div>
    </v-col>
  </v-row>
  <!-- <div
    class="d-flex align-items-center justify-content-center"
    style="height: 500px !important"
  >
    <div
      class="align-items-center"
      style="width: 500px !important; height: 300px !important"
    >
      <div class="p-2 w-full">
        <input
          type="email"
          class="w-full bg-gray-100 rounded border border-gray-400 focus:out-line-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="メールアドレス"
          v-model="form.email"
        />
      </div>
      <div class="p-2 w-full">
        <input
          type="password"
          class="w-full bg-gray-100 rounded border border-gray-400 focus:out-line-none focus:border-indigo-500 text-base px-4 py-2"
          placeholder="パスワード"
          v-model="form.password"
          name="password"
        />
      </div>
      <div class="p-2 w-full mt-4">
        
      </div>
    </div>
  </div> -->
</template>

<script>
export default {
  data() {
    return {
      form: {
        email: "",
        password: "",
      },
      errors: [],
    };
  },
  methods: {
    login() {
      axios
        .post("/login", this.form)
        .then(() => {
          this.$router.push({ name: "Dashboard" });
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
};
</script>

<style scoped>
.login-form {
  height: 60vh;
}
</style>