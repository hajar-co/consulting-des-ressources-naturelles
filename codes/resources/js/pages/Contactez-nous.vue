
<template>
  <div class="contain">
     <NavBar/>  
     <Header/>   
     <div class="containContact">
                <h1>Contact</h1>
                <form action="" method="post">
                            <div class="form-group full-name">
                                <input type="text" name="fullname" placeholder="Nom Complet..." class="form-control">
                            </div>
                            <div class="form-group email">
                                <input type="email" name="email" placeholder="Email..." class="form-control">
                            </div>
                            <div class="form-group message">
                                <textarea name="message" placeholder="Write Your Message Here..." class="form-control"></textarea>
                            </div>
                            <div class="form-group type">
                                <div>
                                    <input type="radio" class="form-control" name="type" value="entreprise" id="entreprise">
                                    <label for="entreprise">Entreprise</label>
                                </div>
                                <div>
                                    <input type="radio" class="form-control" name="type" value="particulier" id="particulier">
                                    <label for="particulier">Particulier</label>
                                </div>
                            </div>
                            <div class="form-group send">
                                <button type="submit" class="btn btn-info">Envoyer</button>
                            </div>
                </form>
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
}
.containContact{
    width: 80%;
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
form {
  max-width: 700px;
  margin: auto;
  display: flex;
  flex-wrap: wrap; 
  }
form .form-group {
    padding: 8px; 
    }
   form .form-group .form-control {
      width: 100%;
      border: 1px solid #04AA6D;
      border-radius: 5px;
      margin: 0px 8px;
      padding-left: 8px;
      height: 40px;
      color: #04AA6D; 
      }
   form .form-group.full-name {
      width: 50%; 
      }
    form .form-group.email {
      width: 50%; 
      }
    form .form-group.message {
      width: 100%; 
      }
    form .form-group.message .form-control {
        padding-top: 8px;
        min-height: 150px; 
        }
    form .form-group.type {
      width: 100%;
      display: flex;
      justify-content: center; 
      }
    form .form-group.type > div {
        display: flex;
        align-items: center; 
        }
      form .form-group.type .form-control {
        width: auto; 
        }
    form .form-group.send {
      width: 100%; 
      padding-bottom: 40px;
      text-align: center;
      }
    .btn-info {
    background-color: #04AA6D;
    border-color: #04AA6D;
    padding: 7px 20px;
}
@font-face {
      font-family: 'Poppins';
      src: local('Poppins'), url('../../fonts/Poppins-Bold.ttf')  format('truetype'),  
    } 
</style>