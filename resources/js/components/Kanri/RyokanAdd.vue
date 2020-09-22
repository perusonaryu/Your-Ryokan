<template>
  <form>
  <div class="form-group">
    <label for="exampleInputText">旅館名</label>
    <input type="text" class="form-control" id="exampleInputText"  placeholder="養生館" v-model="ryokan_name">
    <!-- aria-describedby="emailHelp" -->
  </div>
  <div class="form-group">
    <label for="exampleInputText">旅館住所</label>
    <input type="text" class="form-control" id="exampleInputText" placeholder="鳥取県〜" v-model="ryokan_place">
  </div>
  <div class="form-group">
    <label for="exampleInputText">旅館画像</label>
    <input type="text" class="form-control" id="exampleInputText" placeholder="養生館" v-model="ryokan_img">
  </div>
  <div class="form-group">
    <label for="exampleInputText">旅館説明</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" v-model="ryokan_discription"></textarea>
    
  </div>
  <div class="form-group">
    <label for="exampleInputText">旅館url</label>
    <input type="text" class="form-control" id="exampleInputText" placeholder="旅館url" v-model="ryokan_url">
  </div>
  <div class="form-group">
    <label for="exampleInputText">地域</label>
    <input type="text" class="form-control" id="exampleInputText" placeholder="鳥取" v-model="ryokan_region">
  </div>
<button type="submit" class="btn btn-primary button" @click="addRyokan">登録</button>
</form>


</template>

<script>
export default {
    data(){
        return{
            ryokan:{},
            ryokan_name:"",
            ryokan_place:"",
            ryokan_img:"",
            ryokan_discription:"",
            ryokan_url:"",
            ryokan_region:"",
        }
    },
    methods:{addRyokan() {
            axios
                .post("/api/ryokan", {
                    ryokan_name:this.ryokan_name,
                    ryokan_place:this.ryokan_place,
                    ryokan_img:this.ryokan_img,
                    ryokan_discription:this.ryokan_discription,
                    ryokan_url:this.ryokan_url,
                    ryokan_region:this.ryokan_region,
                })
                .then(response => {
                    this.ryokan_name = "";
                    this.ryokan_place = "";
                    this.ryokan_img = "";
                    this.ryokan_discription = "";
                    this.ryokan_url = "";
                    this.ryokan_region = "";
                })
                .catch(err => {
                    this.message = err;
                });
     
     },
    }
}
</script>

<style>

</style>
