<template>

    <div class="container">
        <div class="row">
        <div class="container">
        <div class="jumbotron col-12">
  <h1 class="display-4">Witaj na naszej stronie poświęconej językom obcym!</h1>
  <p class="lead">Znajdziesz tu wszystkie informacje dotyczące języków.</p>
</div>
</div>
<div class="col-12">
<h1 class="text-center lead">Najnowsze posty:</h1>
</div>
<div class="container">
  <div class="row">
            <div v-for="post in posts.data" :key="post.id" class="col-12 col-sm-8 col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ post.title }}</h4>
                        <p v-html="post.description" class="card-text"></p>
                        <router-link :to="{ name: 'post-details', params: { id: post.id }}" class="btn btn-info">Szczegóły</router-link>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                        <div class="views">{{ post.date }}</div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</template>


    <style scoped>
    .full-height {
        height: 100vh;
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .content {
        text-align: center;
    }
    .title {
        font-size: 60px;
    }
    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    .m-b-md {
        margin-bottom: 30px;
        color: #000000;
    }
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
                posts: {},
                title: '',
                description: '',
            }
        },
         mounted(){
            this.loadPosts();
        },
        methods:{
     loadPosts:function(page){
         if (typeof page === 'undefined') {
                    page = 1;
                }
  axios.get('api/posts?page=' + page).then(res=>{
       if(res.status==200){
         this.posts=res.data;
       }
     }).catch(err=>{
         console.log(err)
     });
     },
     addNewPost(){

                axios.post('/api/posts',{title: this.title, description: this.description})
                .then((response)=>{

                $('#success').html(response.data.message)
                this.loadPosts();
                })
            }
  }



    }
    </script>
