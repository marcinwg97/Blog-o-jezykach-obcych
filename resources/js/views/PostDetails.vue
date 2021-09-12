<template>

    <div class="container">
 <div class="post-box">
                    <h1 class="text-center">{{ post.title }}</h1>
                    <p v-html="post.description"></p>
                  </div>
              </div>

</template>




   <script>
    export default {
        data() {
            return {
                post: {},
                comments: [],
                commentator: '',
                contents: '',
            }
        },
         mounted(){
            this.loadPosts();
        },
        methods:{
     loadPosts:function(){
  axios.get('/api/post/' + this.$route.params.id).then(res=>{
       if(res.status==200){
         this.post=res.data;
       }
     }).catch(err=>{
         console.log(err)
     });
     },
    
     
  }



    }
    </script>
