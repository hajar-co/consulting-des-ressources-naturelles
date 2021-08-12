<template>
<div class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <nav class="container">
  <!-- <div class="container-fluid"> -->
    <a href="#" class="navbar-brand"> <img :src="logo" height="28" /> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active"><router-link to='/' class="nav-link">Accueil</router-link></li>
                <li class="nav-item active"><router-link to='/services' class="nav-link">Nos services</router-link></li>
                <li class="nav-item active"><router-link to='/Apropos' class="nav-link">A propos</router-link></li>
                <li class="nav-item active"><router-link to='/contactez-nous' class="nav-link">Contactez-nous</router-link></li>
                <li class="nav-item active dropdown">
                   <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="login">Log in
                    <span class="caret"></span></a>
            
                   <ul class="dropdown-menu">
                      <li class="nav-item active"><router-link to='/login-admin' class="nav-link">- Admin</router-link></li>
                      <li class="nav-item active"><router-link to='/login-equipe' class="nav-link">- Equipe </router-link></li>
                      <li class="nav-item active"><router-link to='/login-client' class="nav-link">- Client</router-link></li>
                    </ul>
                </li>
                <li class="nav-item active"><router-link to='/Sign-up' class="nav-link">Sign up</router-link></li>
           </ul>
    </div>
</nav>
  </div>
</template>

<script>
import 'bootstrap/dist/css/bootstrap.min.css';
import MyLogo from '../../images/logo2.svg';
export default {
name: 'navbar',
data: function () {
            return {
      logo: MyLogo
  }}
}

</script>

<style scoped>
.navbar {
    padding: .5rem 0rem;
    font-family: 'Poppins', sans-serif;
}
.container{
    width: 80%;
    margin: 0 auto;
    font-family: 'Poppins', sans-serif;
    padding: 0 0;
    height: 8vh;
}
a{
  text-decoration: none;
  color: #0F044C !important;
  /* font-family: 'Poppins'; */
  font-size: 15px;
}
.nav-link:hover {
  background-color: #04AA6D;
}
.navbar-collapse {
  flex-basis: auto;
  flex-grow: 0;
  align-items: center;}
#navbarNav{
  background-color: #f8f9fa;
    }
@font-face {
      font-family: 'Poppins';
      src: local('Poppins'), url('../../fonts/Poppins-Bold.ttf')  format('truetype'),  
    } 
</style>
