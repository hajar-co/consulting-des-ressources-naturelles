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
                <li class="nav-item active"><a class="nav-link" href="#">Accueil</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Nos services</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">A propos</a></li>
                <li class="nav-item active"><a class="nav-link" href="/contact">Contactez-nous</a></li>
                <li class="nav-item active dropdown">
                   <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#">Log in
                    <span class="caret"></span></a>
            
                   <ul class="dropdown-menu">
                      <li class="nav-item active"><a class="nav-link" href="#">- Admin</a></li>
                      <li class="nav-item active"><a class="nav-link" href="#">- Membre de l'équipe </a></li>
                      <li class="nav-item active"><a class="nav-link" href="#">- Client</a></li>
                    </ul>
                </li>
                <li class="nav-item active"><a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span>Sign up</a></li>
           </ul>
    </div>
</nav>
  </div>
</template>

<script>
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
    flex-basis: 100%;
    flex-grow: 0;
    align-items: center;}
    #navbarNav{
      background-color: #f8f9fa;
    }
</style>
