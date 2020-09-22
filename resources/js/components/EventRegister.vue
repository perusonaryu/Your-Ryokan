<template>
    <div class="eventRegister">
        <v-text-field
        v-model="address"
        :error-messages="addressErrors"
        label="旅館名"
        required
        @input="$v.address.$touch()"
        @blur="$v.address.$touch()"
        ></v-text-field>
        <v-text-field
        v-model="introduction"
        :error-messages="introductionErrors"
        label="イベントタイトル"
        required
        @input="$v.introduction.$touch()"
        @blur="$v.introduction.$touch()"
        ></v-text-field>
        <v-text-field
        v-model="category"
        :error-messages="categoryErrors"
        label="イベント詳細"
        required
        @input="$v.category.$touch()"
        @blur="$v.category.$touch()"
        ></v-text-field>
        <v-text-field
        v-model="category"
        :error-messages="categoryErrors"
        label="イベント期間"
        required
        @input="$v.category.$touch()"
        @blur="$v.category.$touch()"
        ></v-text-field>
    </div>
</template>

<script>
import { validationMixin } from 'vuelidate'
import { required, maxLength, email } from 'vuelidate/lib/validators'


export default {
    mixins: [validationMixin],

    validations: {
      // storeName: { required },
      address: { required },
      introduction:{required},
      category: {required},
    },

    data: () => ({
      // storeName: '',
      address: '',
      introduction: '',
      category: '',
      user:'',
      store_id:''
    }),

    computed: {
      // storeNameErrors () {
      //   const errors = []
      //   if (!this.$v.storeName.$dirty) return errors
      //   // !this.$v.name.maxLength && errors.push('Name must be at most 10 characters long')
      //   !this.$v.storeName.required && errors.push('storeName is required.')
      //   return errors
      // },
      addressErrors () {
        const errors = []
        if (!this.$v.address.$dirty) return errors
        !this.$v.address.required && errors.push('address is required')
        return errors
      },
      introductionErrors () {
        const errors = []
        if (!this.$v.introduction.$dirty) return errors
        !this.$v.introduction.required && errors.push('introduction is required')
        return errors
      },
      categoryErrors () {
        const errors = []
        if (!this.$v.category.$dirty) return errors
        !this.$v.category.required && errors.push('category is required')
        return errors
      },
      
    },


    
}
</script>

<style scoped>
    .eventRegister{
        margin-top: 64px;
        padding:100px ;
    }
</style>
