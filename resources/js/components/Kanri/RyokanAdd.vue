<template>
  <form class="container" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="exampleInputText">旅館名</label>
    <input type="text" class="form-control" id="exampleInputText"  placeholder="養生館" v-model="ryokan_name">
    <!-- aria-describedby="emailHelp" -->
  </div>
  <div class="form-group">
    <label for="exampleInputText">地域</label>
    <input type="text" class="form-control" id="exampleInputText" placeholder="鳥取" v-model="ryokan_region">
  </div>
  <div class="form-group">
    <label for="exampleInputText">旅館住所</label>
    <input type="text" class="form-control" id="exampleInputText" placeholder="鳥取県〜" v-model="ryokan_place">
  </div>
  <div class="form-group">
    <label for="exampleInputText">旅館画像</label>
    <input type="file" class="form-control" id="exampleInputText" placeholder="養生館" @change="selectImage" v-if="view">
    <p v-if="displayImage" class="display">
            <img class="img" :src="displayImage" />
        </p>
        <p>{{message}}</p>
  </div>  
  <div class="form-group">
    <label for="exampleInputText">旅館説明</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" v-model="ryokan_discription"></textarea>
    
  </div>
  <div class="form-group">
    <label for="exampleInputText">旅館url</label>
    <input type="text" class="form-control" id="exampleInputText" placeholder="旅館url" v-model="ryokan_url">
  </div>
  
<button type="button" class="btn btn-primary " @click="addRyokan">登録</button>
</form>


</template>

<script>
export default {
    data(){
        return{
            ryokan:{},
            ryokan_name:"",
            ryokan_place:"",
            file:"",
            ryokan_discription:"",
            ryokan_url:"",
            ryokan_region:"",
            displayImage:"",
            message:"",
            view: true,
        }
    },
    methods:{
        addRyokan() {
          let data = new FormData();
          data.append("ryokan_name",this.ryokan_name)
          data.append("ryokan_region",this.ryokan_region)
          data.append("ryokan_place",this.ryokan_place)
          data.append("file",this.file)
          data.append("ryokan_discription",this.ryokan_discription)
          data.append("ryokan_url",this.ryokan_url)
            axios
                .post("/api/ryokan",data)
                .then(response => {
                    this.ryokan_name = "";
                    this.ryokan_place = "";
                    this.ryokan_img = "";
                    this.ryokan_discription = "";
                    this.ryokan_url = "";
                    this.ryokan_region = "";
                    this.displayImage = "";

                    //ファイルを選択のクリア
                    this.view = false;
                    this.$nextTick(function() {
                        this.view = true;
                    });
                    alert('登録しました！');
                })
                .catch(err => {
                    this.message = err;
                });
     
     },
        selectImage(e){
          this.message = "";
          this.file = e.target.files[0];//画像はアップロードは一枚のみ、リサイズ機能なし(2mbまで)
          if (!this.file.type.match("image.*")) {
                    this.message = "画像ファイルを選択して下さい";
                    this.displayImage = "";
                    return;
                }
           this.createImage(this.file);
      },
      createImage(file) {//画像の読み込み
            let reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = e => {
                this.displayImage = e.target.result;
            };
      }
    }
}
</script>

<style>
.container{
    margin-top:80px ;
}
.display{
  width: 300px;
  height: 200px;
  margin: 15px auto;

}
img.img{
  width: 100%;
  object-fit: cover;
  /* display: flex;
  justify-content: center; */
}
</style>
