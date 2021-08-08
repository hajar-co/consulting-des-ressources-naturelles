
<template>
  <div class="contain">
     <NavBar/>  
     <Header/>   
     <div class="containApropos">
         <h1>A propos</h1> 
            <p class="text-center">EnvirEauSan Conseil est un bureau d’Etude disposant d’une solide 
                expérience dans le domaine des études et ingénierie de l’Eau, de l’Environnement 
                et de la Santé publique.
            </p>
            <p class="text-center">Grâce à une équipe pluridisciplinaire, EnvirEauSan Conseil apporte à ses clients publics et privés et sur tout le territoire marocain
                des solutions durables et efficaces.</p>
            <p class="text-center">EnvirEauSan Conseil vous offre une palette de prestations de services 
                et met à votre disposition 
                une synergie de compétences au service de vos enjeux.</p>  
            <img :src="logo" height="200" class="card-img-top logo" /> 
            
            <h5>Nos membres de l'équipe sont ravis de vous contacter</h5>
            <div class="equipe">
             <div class="row">
                <div class="col-md-6">
                        <img :src="membre" class="card-img-top img" /> 
                        <div class="card-body">
                        <h6 class="card-title">Bentaleb Amin</h6>
                        <p class="card-title">Fondateur de Ressource</p>
                        </div>
                </div>
                <div class="col-md-6">
                        <img :src="membre" class="card-img-top img" /> 
                        <div class="card-body">
                        <h6 class="card-title">Rahmen zineb</h6>
                        <p class="card-title">Responsable technique pôle eau</p>
                        </div>
                </div>
                   
            </div>
             <div class="row">
                <div class="col-md-6">
                        <img :src="membre" class="card-img-top img" /> 
                        <div class="card-body">
                        <h6 class="card-title">James Nicolas</h6>
                        <p class="card-title">Responsable administratif</p>
                        </div>
                </div>
                <div class="col-md-6">
                        <img :src="membre" class="card-img-top img" /> 
                        <div class="card-body">
                        <h6 class="card-title">Lezrak mohmed</h6>
                        <p class="card-title">Responsable technique pôle terre</p>
                        </div>
                </div>
                   
            </div>
            </div>
            


     </div>
     <Footer/>
    </div>
</template>

<script>
import NavBar from '../components/NavBar';
import 'bootstrap/dist/css/bootstrap.min.css';
import Header from '../components/Header';
import Footer from '../components/Footer.vue';
import MyLogo from '../../images/logo.svg';
import avatar from '../../images/mane.png';

export default {
    name:"home",
    components: {
        NavBar,
        Header,
        Footer
    },
    data: function () {
            return {
      logo: MyLogo,
      membre: avatar
  }}
    }
</script>

<style scoped>
.contain{
    width: 100%;
    margin: 0 auto;
    font-family: 'Poppins';
}
.containApropos{
    width: 60%;
    margin: 0 auto;
    font-family: 'Poppins', sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
}
h1{
    padding-top: 60px;
    padding-bottom: 40px;
    color: #0F044C;
}
h5{
    padding-bottom: 40px; 
}
.img{
    width: 100px;
    /* height: 100px; */
}
.logo{
    padding-top: 20px;
    padding-bottom: 40px;  
}
.row{
    width: 120%;
}
.equipe{
    width: 70%;
    padding-bottom: 40px; 
}
.card-body {
    padding: 17px 1px;
    
    }
h6{
    font-size: 1.2rem;
    color: #0F044C;
}

@font-face {
      font-family: 'Poppins';
      src: local('Poppins'), url('../../fonts/Poppins-Bold.ttf')  format('truetype'),  
    } 
</style>