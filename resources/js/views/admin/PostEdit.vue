<template>

    <div class="container">
    <div id="success" style="display: none" class="alert alert-success" role="alert">
        </div>
        <form class="col-12 col-lg-12" v-on:submit.prevent="editPost(post.id)">
            <div class="form-group row">
                <div class="form-group col-12">
                    <label for="title" class="col-form-label">Tytuł:</label>
                    <div>
                        <input class="form-control" type="text" name="title" v-model="post.title" required> 
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="description" class="col-form-label">Opis:</label>
                    <div>
                        <quill-editor v-model="post.description"
                            class="mb-3"
                            id="rich-text"
                            rows="20"
                            :options="editorOption"
                            ref="myQuillEditor"
                            @blur="onEditorBlur($event)"
                            @focus="onEditorFocus($event)"
                            @ready="onEditorReady($event)">
                        </quill-editor>   
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="category" class="col-form-label">Kategoria:</label>
                    <div>
                        <select class="form-control" name="category_id" v-model="post.category_id"> 
                        <option v-for="category in categories" :value="category.id">{{category.name}}</option>
                    </select>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="user" class="col-form-label">Użytkownik:</label>
                    <div>
                        <select class="form-control" name="user_id" v-model="post.user_id"> 
                        <option v-for="user in users" :value="user.id">{{user.email}}</option>
                    </select>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-check px-0">
                        <label for="is_active">
                            <input type="checkbox" v-model="post.is_active" checked> Pokazuj na stronie
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Zapisz</button>
            </div> 
        </form>
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
    </style>

    <script>
import 'quill/dist/quill.core.css'
    import 'quill/dist/quill.snow.css'
    import 'quill/dist/quill.bubble.css'
    import { quillEditor, Quill } from 'vue-quill-editor'
    import ImageResize from 'quill-image-resize';

    // Register ImageResize module
    Quill.register('modules/imageResize', ImageResize);

    // Set toolbar options
    const toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],

        [{'header': 1}, {'header': 2}],
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],
        [{'indent': '-1'}, {'indent': '+1'}],
        [{'direction': 'rtl'}],

        [{'size': ['small', false, 'large', 'huge']}],
        [{'header': [1, 2, 3, 4, 5, 6, false]}],

        [{'color': []}, {'background': []}],
        [{'font': []}],
        [{'align': []}],
        ['link', 'image', 'video'],
        ['clean'],
    ];

    export default {
        components: {
            quillEditor
        },
        data() {
            return {
                categories: [],
                users: [],
                post: {
                    title: '',
                    description: '',
                    is_active: '',
                    category_id: '',
                    user_id: '',
                },

                editorOption: {
                    modules: {
                        toolbar: {
                            container: toolbarOptions,
                        },
                        history: {
                            delay: 1000,
                            maxStack: 50,
                            userOnly: false
                        },
                        imageResize: {
                            displayStyles: {
                                backgroundColor: 'black',
                                border: 'none',
                                color: 'white'
                            },
                            modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
                        }
                    }
                },
            }
        },
         mounted(){
            this.loadPost();
            this.loadCategories();
            this.loadUsers();
        },
        methods:{
     loadPost:function(){
  axios.get('/api/post/' + this.$route.params.id).then(res=>{
       if(res.status==200){
         this.post=res.data;
       }
     }).catch(err=>{
         console.log(err)
     });
     },
     loadCategories:function(){
  axios.get('/api/ctgrs').then(res=>{
       if(res.status==200){
         this.categories=res.data;
       }
     }).catch(err=>{
         console.log(err)
     });
},
loadUsers:function(){
  axios.get('/api/usrs').then(res=>{
       if(res.status==200){
         this.users=res.data;
       }
     }).catch(err=>{
         console.log(err)
     });
},
 
            editPost(id){
                axios.post('/api/post/' + id, {title: this.post.title, description: this.post.description, is_active: this.post.is_active, category_id: this.post.category_id, user_id: this.post.user_id})
                .then((response)=>{

                $('#success').css("display", "block");
                $('#success').html(response.data.message);
                this.loadPost();
                })
            },
            onEditorBlur(editor) {
                // console.log('editor blur!', editor)
            },
            onEditorFocus(editor) {
                // console.log('editor focus!', editor)
            },
            onEditorReady(editor) {
                // console.log('editor ready!', editor)
            },
  },
  computed: {
            editor(){
                return this.$refs.myQuillEditor.quill
            }
        }



    }
    </script>
