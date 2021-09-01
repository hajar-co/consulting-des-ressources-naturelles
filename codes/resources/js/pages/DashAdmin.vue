<template>
  <div class="containDash">
    <div class="head">
        <div class="headContent">
            <img :src="membre" class="card-img-top img" /> 
            <p>Bienvenu Admin</p>
            <div class="search">
            <input type="search" name="search" id="" placeholder="Recherche...">
            <i class="fas fa-search"></i>
            </div>
        </div>
    </div>
        <div class="buttons">
        <a class="linkA" href="" id="insertBtn"><button type="submit" class="btn btn-info" >Ajouter un membre</button></a>
        <router-link to='/'><button type="submit" class="btn btn-info">Log out</button></router-link>
        </div>
    <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom du membre</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Actions</th> 
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>huhuhh</td>
                <td>jnj</td>
                <td>knknk</td>
                <td>lkterrrdiuu</td>
                <td>
                    <a href="#" class="linkA"><button type="submit" name="update" value="" class="btn btn-warning">Edit</button></a>
                    <a href="#" class="linkA"><button type="submit" name="delete" value="" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            </tbody>
    </table>
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
    justify-content: space-between;
    align-items: center;
    justify-items: center; 
    align-content: center; 
    color: #F2F2F2;
}
.img{
    width: 80px;
    height: 60px;
}
input[type=search]{
    border-radius:50px;
    border:1px solid #04AA6D;
    width: 85%;
}

::placeholder{
    font-size: .8em;
    padding: 5px;
}
p{
    margin: 0;
}
 .btn-info {
    background-color: #04AA6D;
    border-color: #04AA6D;
 }
.buttons{
    width: 80%;
    margin:0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 25%;
}
.table{
    width:80%;
    margin:0 auto;
}
</style>