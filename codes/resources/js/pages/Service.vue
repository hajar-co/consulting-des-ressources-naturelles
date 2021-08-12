
<template>
    <div>


        <NavBar/>  
        <Header/> 
        <div class="containService">

            <h1>Nos services</h1> 
            <p class="text-center">EnvirEauSan Conseil est un bureau d’Etude disposant d’une solide 
                expérience dans le domaine des études et ingénierie de l’Eau, de l’Environnement 
                et de la Santé publique.
            </p>
            <p class="text-center">Grâce à une équipe pluridisciplinaire, EnvirEauSan Conseil apporte à ses clients publics et privés et sur tout le territoire marocain
                des solutions durables et efficaces.</p>
            <p class="text-center">EnvirEauSan Conseil vous offre une palette de prestations de services 
                et met à votre disposition 
                une synergie de compétences au service de vos enjeux.</p>   
            <div class="row">
                <div class="col-md-4">
                        <img :src="servi1" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Valorisation des ressources en eau</h6>
                        </div>
                </div>
                <div class="col-md-4">
                        <img :src="servi2" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Culture des oliviers dans la région al houez</h6>
                        </div>
                </div>
               
                <div class="col-md-4">
                        <img :src="servi3" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">L'accompagnement au pilotage de projet</h6>
                        </div>
                </div>
                   
            </div>

           <router-link to='/login-client' class="button"><button type="submit" class="btn btn-info">Cliquez ici pour bénificier</button></router-link>


            </div>
           
        <Footer/>


    </div>
</template>

<script>
import NavBar from '../components/NavBar';
import 'bootstrap/dist/css/bootstrap.min.css';
import Header from '../components/Header';
import Footer from '../components/Footer.vue';
// import MyLogo from '../../images/logo2.svg';
import S1 from '../../images/pompage.jpg';
import S2 from '../../images/agri.jpg';
import S3 from '../../images/consul.jpg';


export default {
    name:"service",
    components: {
        NavBar,
        Header,
        Footer
    },
    data: function () {
            return {
      servi1: S1,
      servi2: S2,
      servi3: S3
  }}
    }
</script>

<style scoped>
.containService{
    width: 80%;
    margin: 0 auto;
    font-family: 'Poppins', sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
}
h1{
    padding-top: 60px;
    padding-bottom: 40px;
    color: #0F044C;
}
h6{
    color: #0F044C;
}
.row{
    padding-top: 60px;
    padding-bottom: 40px;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: .5rem 0rem;
    }
.button{ 
    padding-bottom: 40px;
    }
.btn-info {
    background-color: #04AA6D;
    border-color: #04AA6D;
}


/* @import url("https://fonts.googleapis.com/css?family=Poppins:400"); */
@font-face {
      font-family: 'Poppins', sans-serif;
      src: local('Poppins'), url('../../fonts/Poppins-Regular.ttf')  format('truetype'),  
    } 
</style>