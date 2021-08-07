
<template>
  <div class="contain">
     <NavBar/>  
     <Header/>    
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