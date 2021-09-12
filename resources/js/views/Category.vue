<template>
<div class="container">
<h1 class="text-center col-12">Kategoria {{this.$route.params.name}}</h1>
        <div class="row">
            <div v-for="category in categories" :key="category.id" class="col-12 col-sm-8 col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ category.title }}</h5>
                        <p v-html="category.description" class="card-text"></p>
                        <p><router-link :to="{ name: 'post-details', params: { id: category.id }}" class="btn btn-info">Szczegóły</router-link></p>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                        <div class="views">{{ category.date }}</div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</template>



<style scoped>
    .card-text {
        overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 3; /* number of lines to show */
   -webkit-box-orient: vertical;
    }
    </style>
   <script>
    export default {
        data() {
            return {
                categories: [],
                name_category: '',
            }
        },
         mounted(){
            this.loadCategories();
        },
        methods:{
     loadCategories:function(){
  axios.get('/api/category/' + this.$route.params.id + '/' + this.$route.params.name).then(res=>{
       if(res.status==200){
         this.categories=res.data;
       }
     }).catch(err=>{
         console.log(err)
     });
     },
    
     
  }



    }
    </script>