import VueRouter from 'vue-router'
window.Vue = require('vue');
Vue.use(require('vue-resource'));
Vue.component('pagination', require('laravel-vue-pagination'));
import App from './views/App'
import Dashboard from './views/Board'
import Login from './views/Login'
import Register from './views/Register'
import Home from './views/Welcome'
import Post from './views/admin/Post'
import PostDetails from './views/PostDetails'
import PostCreate from './views/admin/PostCreate'
import PostEdit from './views/admin/PostEdit'
import Category from './views/admin/Category'
import CategoryCreate from './views/admin/CategoryCreate'
import CategoryEdit from './views/admin/CategoryEdit'
import User from './views/admin/User'
import UserCreate from './views/admin/UserCreate'
import UserEdit from './views/admin/UserEdit'
import StaticSite from './views/admin/StaticSite'
import StaticSiteCreate from './views/admin/StaticSiteCreate'
import StaticSiteEdit from './views/admin/StaticSiteEdit'
import ContactForm from './views/ContactForm'
import Message from './views/admin/Message'
import StaticSiteDetails from './views/StaticSite'
import CategoryDetails from './views/Category'
import UserProfile from './views/User'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/post/:id',
            name: 'post-details',
            component: PostDetails
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
        },
        {
            path: '/admin/board',
            name: 'board',
            component: Dashboard,
        },
        {
            path: '/admin/posts',
            name: 'admin-posts',
            component: Post,
        },
        {
            path: '/admin/posts/create',
            name: 'admin-posts-create',
            component: PostCreate,
        },
        {
            path: '/admin/posts/:id/edit',
            name: 'admin-posts-edit',
            component: PostEdit,
        },
        {
            path: '/admin/categories',
            name: 'admin-categories',
            component: Category,
        },
        {
            path: '/admin/categories/create',
            name: 'admin-categories-create',
            component: CategoryCreate,
        },
        {
            path: '/admin/categories/:id/edit',
            name: 'admin-categories-edit',
            component: CategoryEdit,
        },
        {
            path: '/admin/users',
            name: 'admin-users',
            component: User,
        },
        {
            path: '/admin/users/create',
            name: 'admin-users-create',
            component: UserCreate,
        },
        {
            path: '/admin/users/:id/edit',
            name: 'admin-users-edit',
            component: UserEdit,
        },
        {
            path: '/admin/static-sites',
            name: 'admin-static-sites',
            component: StaticSite,
        },
        {
            path: '/admin/static-sites/create',
            name: 'admin-static-sites-create',
            component: StaticSiteCreate,
        },
        {
            path: '/admin/static-sites/:id/edit',
            name: 'admin-static-sites-edit',
            component: StaticSiteEdit,
        },
        {
            path: '/contact',
            name: 'form-contact',
            component: ContactForm,
        },
        {
            path: '/admin/messages',
            name: 'admin-messages',
            component: Message,
        },
        {
            path: '/static/:id/:name',
            name: 'static-details',
            component: StaticSiteDetails,
        },
        {
            path: '/category/:id/:name',
            name: 'category-details',
            component: CategoryDetails,
        },
        {
            path: '/user/:id',
            name: 'user-profile',
            component: UserProfile,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});