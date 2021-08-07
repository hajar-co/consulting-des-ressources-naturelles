
<template>
  <div class="contain">
     <NavBar/>  
     <Header/>   
     <div>
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
     </div>
     <Footer/>
    </div>
</template>

<script>
import NavBar from '../components/NavBar';
import 'bootstrap/dist/css/bootstrap.min.css';
import Header from '../components/Header';
import Footer from '../components/Footer.vue';

export default {
    name:"home",
    components: {
        NavBar,
        Header,
        Footer
    }
    }
</script>

<style scoped>
.contain{
    width: 100%;
    margin: 0 auto;
    font-family: 'Poppins';
}
@font-face {
      font-family: 'Poppins';
      src: local('Poppins'), url('../../fonts/Poppins-Bold.ttf')  format('truetype'),  
    } 
</style>