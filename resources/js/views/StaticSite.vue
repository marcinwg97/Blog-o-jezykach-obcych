<template>

    <div class="container">
 <div class="post-box">
                    <h1 class="text-center">{{ static_site.name}}</h1>
                    <p v-html="static_site.contents"></p>
                  </div>
              </div>

</template>




   <script>
    export default {
        data() {
            return {
                static_site: {},
            }
        },
         mounted(){
            this.loadStaticSites();
        },
        methods:{
     loadStaticSites:function(){
  axios.get('/api/static-site/' + this.$route.params.id).then(res=>{
       if(res.status==200){
         this.static_site=res.data;
       }
     }).catch(err=>{
         console.log(err)
     });
     },
    
     
  }



    }
    </script>