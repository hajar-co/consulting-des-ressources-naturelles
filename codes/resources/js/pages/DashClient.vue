<template>
  <div class="containDash">
    <div class="head">
        <div class="headContent">
            <img :src="membre" class="card-img-top img" /> 
            <p class="welcome">Bienvenu Client</p>
        </div>
    </div>

    <form action="" method="post">
        <p class="text-center">Veuillez remplir ce formulaire afin de vous contacter plus tard  </p>
        <div class="typeRess">
        <p>Le type de ressource:</p>
        <div>
            <div>
                <input type="radio" class=" " name="type" value="terre" id="terre">
                <label for="terre">Terre</label>
            </div>
            <div>
                <input type="radio" class="" name="type" value="Eau" id="eau">
                <label for="Eau">Eau</label>
            </div>
            <div>
                <input type="radio" class="" name="type" value="autre" id="autre">
                <label for="autre">Autre</label>
            </div>
        </div>
        </div>
        <div>
                <label for="descri" class="form-label">Description du ressource à valoriser :</label>
                <textarea name="description" placeholder="Veuillez décrire votre ressource..." class="form-control"></textarea>
        </div>
        <div>
                <label for="localisation" class="form-label">Localisation :</label>
                <input type="text" name="localisation" placeholder="le lieu ex: région Safi..." class="form-control">
        </div>
        <div class="form-group text-center">
                <button type="submit" class="btn btn-info ">Envoyer</button>
        </div>
                            
       <div class="link"><router-link to='/'><u>Retour à l'accueil -></u></router-link></div> 
    </form>
    </div>
   
</template>

<script>
import avatar from '../../images/mane.png';
import 'bootstrap/dist/css/bootstrap.min.css';
export default {
    name:"dashEquipe",
 data: function () {
            return {
      membre: avatar
  }}
}
</script>

<style scoped>
.containDash{
    width: 100vw;
    font-family: 'Poppins', sans-serif;
    height: 100vh;
}
.head{
    width: 100%;
    background-color: #04AA6D;
    height: 13%;
}
.headContent{
    height: 100%;
    width: 80%;
    margin: 0 auto;
    display: flex;
    align-items: center;
     justify-items: center; 
    align-content: center; 
    color: #F2F2F2;
}
.img{
    width: 80px;
    height: 60px;
}

.welcome{
    margin: 0;
    text-align: center;
    padding-left: 30%;
}
form{
    padding-top: 30px;
    width: 80%;
    height: 80vh;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.typeRess{
    display: flex;
    flex-wrap: wrap;
    width: 30%;
    justify-content: space-between;
}
 .btn-info {
    background-color: #04AA6D;
    border-color: #04AA6D;
 }
 .link{
    text-align: right;
 }
 a{
    color: black;
 }

</style>