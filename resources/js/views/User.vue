<template>
    <div class="container">
        <h1 class="text-center">{{ user.name }}</h1>
    </div>
</template>




<script>
    export default {
        data() {
            return {
                user: {},
            }
        },
         mounted(){
            this.loadUser();
        },
        methods:{
            loadUser:function(){
                axios.get('/api/user/' + this.$route.params.id).then(res=>{
                if(res.status==200){
                    this.user=res.data;
                }
            }).catch(err=>{
                console.log(err)
            });
        },
    }
}
</script>
