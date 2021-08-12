<template>
  <div class="containDash">
    <div class="head">
        <div class="headContent">
            <img :src="membre" class="card-img-top img" /> 
            <p>Welcome Membre</p>
            <div class="search">
            <input type="search" name="search" id="" placeholder="Recherche...">
            <i class="fas fa-search"></i>
            </div>
        </div>
    </div>
        <div class="buttons">
        <a class="linkA" href="" id="insertBtn"><button type="submit" class="btn btn-info" >Insert an article +</button></a>
        <router-link to='/'><button type="submit" class="btn btn-info">Log out</button></router-link>
        </div>
    <table class="table">
            <thead>
            <tr>
                <th >ID</th>
                <th >Title</th>
                <th >Image</th>
                <th >Date</th>
                <th >Actions</th> 
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>huhuhh</td>
                <td>jnj</td>
                <td>knknk</td>
                <td>lkterrrdiuu</td>
                <td>
                    <a class="linkA" href=""><button type="submit" name="read" value="" class="btn btn-info sm">Read</button></a>
                    <a class="linkA" href=""><button type="submit" name="update" value="" class="btn btn-warning">Edit</button></a>
                    <a class="linkA" href=""><button type="submit" name="delete" value="" class="btn btn-danger">Delete</button></a>
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