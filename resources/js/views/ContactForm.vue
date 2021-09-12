<template>
<div class="row justify-content-center">
<div class="col-12 col-lg-10 justify-content-center">
<h1 class="text-center">Formularz kontaktowy</h1>
<div id="success" style="display: none" class="alert alert-success" role="alert"></div>
</div>
            <div class="col-12 col-lg-6 justify-content-center">
                                <form @submit.prevent="addNewMessage">
                    <div class="form-group">
                        <label for="email">Adres e-mail:</label>
                        <input type="email" class="form-control" name="email" id="email" v-model="email" required>
                                            </div>
                    <div class="form-group">
                        <label for="title">Temat:</label>
                        <input type="text" class="form-control" name="title" id="title" v-model="title" required>
                                            </div>
                    <div class="form-group">
                        <label for="contents">Treść:</label>
                        <textarea class="form-control" name="contents" id="contents" rows="5" v-model="contents" required></textarea>
                          
                    </div>
                    <button type="submit" class="btn btn-primary">Wyślij</button>
                </form>
            </div>
        </div>
</template>

<script>

    export default {

        data() {
            return {
                email: '',
                title: '',
                contents: '',
            }
        },
        methods:{


     addNewMessage(){
                axios.post('/api/messages', {email: this.email, title: this.title, contents: this.contents })
                .then((response)=>{
                    $('#success').css("display", "block");
                $('#success').html(response.data.message)
                })
            },

  },

    }
    </script>
