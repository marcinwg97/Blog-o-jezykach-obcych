<template>
        <div>
            <nav v-if="!(this.$router.currentRoute.path).includes('admin')" class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #e3f2fd;">
                <div class="container">
                    <router-link :to="{name: 'home'}" class="navbar-brand">JezykiObce.pl</router-link>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto"></ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Języki
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <div v-for="category in categories" :key="category.id">
        <a :href="$router.resolve({name: 'category-details', params: { id: category.id, name: category.name }}).href" class="dropdown-item">{{ category.name}}</a>
        </div>
  
        </div>
      </li>
                          
                            
                            <router-link :to="{ name: 'login' }" class="nav-link" v-if="!isLoggedIn">Logowanie</router-link>
                            <!-- <router-link :to="{ name: 'register' }" class="nav-link" v-if="!isLoggedIn">Rejestracja</router-link> -->
                            <li class="nav-link" v-if="isLoggedIn"> Cześć, {{name}}!</li>
                            <router-link :to="{ name: 'board' }" class="nav-link" v-if="isLoggedIn">Panel</router-link>
                            <a v-on:click="logout" class="nav-link" v-if="isLoggedIn">Wyloguj</a>
                        </ul>
                    </div>
                </div>
            </nav>
            <div v-if="(this.$router.currentRoute.path).includes('admin')" class="sidebar-container">
  <div class="sidebar-logo">
    JezykiObce.pl
  </div>
  <ul class="sidebar-navigation">
    <li>
      <router-link :to="{ name: 'admin-posts' }">Posty</router-link>
    </li>
    <li>
      <router-link :to="{ name: 'admin-messages' }">Wiadomości z formularza kontaktowego</router-link>
    </li>
    <li>
      <router-link :to="{ name: 'admin-categories' }">Kategorie</router-link>
    </li>
    <li>
      <router-link :to="{ name: 'admin-static-sites' }">Strony Statyczne</router-link>
    </li>
    <li>
      <router-link :to="{ name: 'admin-users' }">Użytkownicy</router-link>
    </li>
    <li>
      <router-link :to="{ name: 'home' }">Powrót na stronę</router-link>
    </li>
    <li>
       <a v-on:click="logout" v-if="isLoggedIn">Wyloguj</a>
    </li>
  </ul>
</div>
            <main class="py-4">
                <router-view></router-view>
            </main>
            <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Informacje</h6>
            <ul class="footer-links">
            <li v-for="static_site in static_sites" :key="static_site.id">
             <a :href="$router.resolve({name: 'static-details', params: { id: static_site.id, name: static_site.name }}).href" class="dropdown-item">{{ static_site.name}}</a>
            </li>
            </ul>
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>Formularz kontaktowy</h6>
            <router-link :to="{ name: 'form-contact' }">Formularz kontaktowy</router-link>
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>Kontakt</h6>
            <ul class="footer-links">
              <li><p>ul. Ulicowa 13</p></li>
              <li><p>777-11 Wymyślone Miasto</p></li>
              <li><p>Telefon: 666 111 333</p></li>
              <li><p>Email: generic_mail@mail.com</p></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; Marcin Węgrowski
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
</footer>
        </div>
    </template>
<style scoped>
   footer {
    position: relative;
  right: 0;
  bottom: 0;
  left: 0;
  margin-top: 500px;
  }
.sidebar-container {
  position: fixed;
  width: 220px;
  height: 100%;
  left: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background: #26272b;
  color: #fff;
}

.sidebar-logo {
  padding: 10px 15px 10px 30px;
  font-size: 20px;
  background-color: #2574A9;
}

.sidebar-navigation {
  padding: 0;
  margin: 0;
  list-style-type: none;
  position: relative;
}

.sidebar-navigation li {
  background-color: transparent;
  position: relative;
  display: inline-block;
  width: 100%;
  line-height: 20px;
}

.sidebar-navigation li a {
  padding: 10px 15px 10px 30px;
  display: block;
  color: #fff;
}

.sidebar-navigation li .fa {
  margin-right: 10px;
}

.sidebar-navigation li a:active,
.sidebar-navigation li a:hover,
.sidebar-navigation li a:focus {
  text-decoration: none;
  outline: none;
}

.sidebar-navigation li::before {
  background-color: #2574A9;
  position: absolute;
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 3px;
  z-index: -1;
}

.sidebar-navigation li:hover::before {
  width: 100%;
}

.sidebar-navigation .header {
  font-size: 12px;
  text-transform: uppercase;
  background-color: #151515;
  padding: 10px 15px 10px 30px;
}

.sidebar-navigation .header::before {
  background-color: transparent;
}
.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
</style>
    <script>
    export default {
        data(){
            return {
                categories: [],
                static_sites: [],
                isLoggedIn : null,
                name : null
            }
        },
        methods: {
          logout: function () {
            localStorage.removeItem('jwt')
            localStorage.removeItem('user')
            this.$router.go('/')
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
loadStaticSites:function(){
  axios.get('/api/stc-sts').then(res=>{
       if(res.status==200){
         this.static_sites=res.data;
       }
     }).catch(err=>{
         console.log(err)
     });
}
     
  },
        mounted(){
          this.loadCategories();
          this.loadStaticSites();
            this.isLoggedIn = localStorage.getItem('jwt')
            this.name = localStorage.getItem('user')
        }
    }
    </script>
