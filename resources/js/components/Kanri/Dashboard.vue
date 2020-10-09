<template>
  <div class="aaaa">
    Dashboard <br>
    Name: {{user.name}}<br>
    <button @click.prevent="logout">ログアウト</button>
  </div>
</template>

<script>
export default {
    data(){
        return{
            user:'',
            
        }
    },
     mounted(){
        axios.get('/user').then((res)=>{
            this.user = res.data
            
            console.log(res.data);
        }).catch((err)=>{
            console.log(err);
        });
    },
     methods:{
        logout(){
            axios.post('/logout').then(()=>{
            this.$router.push({name:'top-page'});
        })

        }
    }
   
   
}
</script>

<style>
.aaaa{
    margin-top: 100px;
}
</style>