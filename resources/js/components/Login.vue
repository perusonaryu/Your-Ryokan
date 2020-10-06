<template>
<div class="flex flex-wrap w-full justify-center items-center pt-56">
    <div class="flex flex-wrap max-w-xl">
        <div class="p-2 text-2xl "><h1>アカウントにログイン</h1></div>
         <div class="p-2 w-full ">
            <label for="email" class="w-full">メールアドレス</label>
            <input type="email" class="w-full bg-gray-100 rounded border border-gray-400 
            focus:out-line-none focus:border-indigo-500 text-base px-4 py-2" placeholder="メールアドレス"
            v-model="form.email">
        </div>
        <div class="p-2 w-full ">
            <label for="password" class="w-full">パスワード</label>
            <input type="password" class="w-full bg-gray-100 rounded border border-gray-400 
            focus:out-line-none focus:border-indigo-500 text-base px-4 py-2" placeholder="パスワード"
            v-model="form.password" name="password">
        </div>
        <div class="p-2 w-full mt-4">
            <button type="submit" @click.prevent="login" class="flex bg-indigo-500
            border-0 py-2 px-8 focus:out-line-none hover:bg-indigo-600 rounded text-lg">ログイン</button>
        </div>
    </div>  
</div>
</template>

<script>
export default {
    data(){
        return{
            form:{
                email: '',
                password: ''
            },
            errors: []
        }
    },
    methods:{
        login(){
            axios.post('api/login',this.form).then(()=>{
                this.$router.push({ name:'Dashboard'})
            }).catch((error)=>{
                this.errors = error.response.data.errors;
            })
        }
    }
}
</script>

<style>

</style>