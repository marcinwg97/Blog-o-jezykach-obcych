<template>

    <div class="container">
        <div id="success" style="display: none" class="alert alert-success" role="alert">
        </div>
        <form class="col-12 col-lg-12" @submit.prevent="addNewPost">
            <div class="form-group row">
                <div class="form-group col-12">
                    <label for="title" class="col-form-label">Tytuł:</label>
                    <div>
                        <input class="form-control" type="text" name="title" v-model="title" required>  
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="description" class="col-form-label">Opis:</label>
                    <div>
                        <quill-editor v-model="description"
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
                    <label for="title" class="col-form-label">Kategoria:</label>
                    <div>
                        <select class="form-control" name="category_id" v-model="category_id"> 
                        <option v-for="category in categories" :value="category.id">{{category.name}}</option>
                    </select>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="title" class="col-form-label">Użytkownik:</label>
                    <div>
                        <select class="form-control" name="user_id" v-model="user_id"> 
                        <option v-for="user in users" :value="user.id">{{user.email}}</option>
                    </select>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-check px-0">
                        <label for="is_active">
                            <input type="checkbox" v-model="is_active" checked> Pokazuj na stronie
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
                title: '',
                description: '',
                is_active: '',
                user_id: '',
                category_id: '',
                images: [],
                categories: [],
                users: [],
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
          this.loadCategories();
          this.loadUsers();
        },
        methods:{
            imageUpload(e) {
    if (e.target.files.length !== 0) {

        let quill = this.editor;
        let reader = new FileReader();
        reader.readAsDataURL(e.target.files[0]);
        let self = this;
        reader.onloadend = function() {
            let base64data = reader.result;
            self.form.images.push(base64data);

            // Get cursor location
            let length = quill.getSelection().index;

            // Insert image at cursor location
            quill.insertEmbed(length, 'image', base64data);

            // Set cursor to the end
            quill.setSelection(length + 1);
        }
    }
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
     
     addNewPost(){

                axios.post('/api/posts',{title: this.title, description: this.description, category_id: this.category_id, user_id: this.user_id, is_active: this.is_active})
                .then((response)=>{
                    console.log(this.is_active);
                    $('#success').css("display", "block");
                $('#success').html(response.data.message);
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
        },
        toolbar: {
    container: toolbarOptions,
    handlers: {
        'image': function (value) {
            if (value) {
                document.querySelector('#imageUpload').click();
            } else {
                this.quill.format('image', false);
            }
        }
    },
},




    }
    </script>
