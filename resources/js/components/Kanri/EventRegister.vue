<template>
  <div class="eventRegister">
    <v-text-field
      v-model="ryokanName"
      :error-messages="ryokanNameErrors"
      label="旅館名"
      required
      @input="$v.ryokanName.$touch()"
      @blur="$v.ryokanName.$touch()"
    ></v-text-field>
    <v-text-field
      v-model="eventTitle"
      :error-messages="eventTitleErrors"
      label="イベントタイトル"
      required
      @input="$v.eventTitle.$touch()"
      @blur="$v.eventTitle.$touch()"
    ></v-text-field>
    <v-text-field
      v-model="eventDescription"
      :error-messages="eventDescriptionErrors"
      label="イベント詳細"
      required
      @input="$v.eventDescription.$touch()"
      @blur="$v.eventDescription.$touch()"
    ></v-text-field>
    <v-text-field
      v-model="eventDuration"
      :error-messages="eventDurationErrors"
      label="イベント期間"
      required
      @input="$v.eventDuration.$touch()"
      @blur="$v.eventDuration.$touch()"
    ></v-text-field>

    <v-file-input
      multiple
      label="店舗画像"
      prepend-inner-icon="mdi-camera"
      prepend-icon
      show-size
      v-on:change="fileSelected"
      v-model="image"
    ></v-file-input>

    <v-btn class="mr-4" @click="eventAdd">登録</v-btn>
  </div>
</template>

<script>
import { validationMixin } from "vuelidate";
import { required, maxLength, email } from "vuelidate/lib/validators";

export default {
  mixins: [validationMixin],

  validations: {
    ryokanName: { required },
    eventTitle: { required },
    eventDescription: { required },
    eventDuration: { required },
    eventImage: { required },
  },

  data: () => ({
    // storeName: '',
    ryokanName: "",
    eventTitle: "",
    eventDescription: "",
    eventDuration: "",
    eventImage: "",
    image:[],
  }),

  computed: {
    // storeNameErrors () {
    //   const errors = []
    //   if (!this.$v.storeName.$dirty) return errors
    //   // !this.$v.name.maxLength && errors.push('Name must be at most 10 characters long')
    //   !this.$v.storeName.required && errors.push('storeName is required.')
    //   return errors
    // },
    ryokanNameErrors() {
      const errors = [];
      if (!this.$v.ryokanName.$dirty) return errors;
      !this.$v.ryokanName.required && errors.push("旅館名を入力してください");
      return errors;
    },
    eventTitleErrors() {
      const errors = [];
      if (!this.$v.eventTitle.$dirty) return errors;
      !this.$v.eventTitle.required &&
        errors.push("イベントのタイトルを入力してください");
      return errors;
    },
    eventDescriptionErrors() {
      const errors = [];
      if (!this.$v.eventDescription.$dirty) return errors;
      !this.$v.eventDescription.required &&
        errors.push("イベント詳細を入力してください");
      return errors;
    },
    eventDurationErrors() {
      const errors = [];
      if (!this.$v.eventDuration.$dirty) return errors;
      !this.$v.eventDuration.required &&
        errors.push("イベント期間を入力してください");
      return errors;
    },
  },

  methods: {
    fileSelected(event) {
      this.eventImage = event[0];
      console.log(event[0]);
    },
    fileRelease(){

    },

    eventAdd() {
      let eventData = new FormData();
      eventData.append("ryokan_name", this.ryokanName);
      eventData.append("event_title", this.eventTitle);
      eventData.append("event_description", this.eventDescription);
      eventData.append("event_duration", this.eventDuration);
      eventData.append("event_img_main", this.eventImage);

      axios
        .post("/eventadd", eventData)
        .then((response) => {
          alert("イベントを追加しました！");
          this.ryokanName = '';
          this.eventTitle = '';
          this.eventDescription = '';
          this.eventDuration = '';
          this.image = [];


        })
        .catch((error) => console.log(error));
    },
  },
};
</script>

<style scoped>
.eventRegister {
  margin-top: 64px;
  padding: 100px;
}
</style>
