
<template>
  <div class="contain">
       <NavBar/>  
     <Header/> 
     <div class="home">
         <h1>Nos réalisations</h1>
       <div class="row">
                <div class="col-md-4">
                        <img :src="projet1" class="card-img-top imgHover">
                        <div class="card-body">
                            <h6 class="heading">Installation des serres</h6>
                        </div>
                </div>
                <div class="col-md-4">
                        <img :src="projet2" class="card-img-top imgHover">
                        <div class="card-body">
                            <h6 class="heading">Installation des panneaux solaires</h6>
                        </div>
                </div>
               
                <div class="col-md-4">
                        <img :src="projet3" class="card-img-top imgHover">
                        <div class="card-body">
                            <h6 class="heading">Valorisation des ressources en eau</h6>
                        </div>
                </div>
                <div class="col-md-4">
                        <img :src="projet4" class="card-img-top imgHover">
                        <div class="card-body">
                            <h6 class="heading">Valorisation des ressources en eau</h6>
                        </div>
                </div>
                <div class="col-md-4">
                        <img :src="projet5" class="card-img-top imgHover">
                        <div class="card-body">
                            <h6 class="heading">Culture des oliviers dans la région al houez</h6>
                        </div>
                </div>
                <div class="col-md-4">
                        <img :src="projet6" class="card-img-top imgHover">
                        <div class="card-body">
                            <h6 class="heading">L'accompagnement au pilotage de projet</h6>
                        </div>
                </div>
                   
            </div>
            <h2>Actualités & Agenda</h2>

      <div class="test">
            <div class="container my-3">
                <div class="row mx-auto my-auto">
                    <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item py-5 active">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                        <img :src="actuali1" class="img-responsive">
                                        <div class="card-body">
                                            <p class="date">29 juillet 2020</p>
                                            <a href="#">Le Conseil d'État renforce les règles d'épandage</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <img :src="actuali2" class="img-responsive">
                                        <div class="card-body">
                                            <p class="date">29 juillet 2020</p>
                                            <a href="#">Le Conseil d'État renforce les règles d'épandage</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <img :src="actuali3" class="img-responsive">
                                        <div class="card-body">
                                            <p class="date">29 juillet 2020</p>
                                            <a href="#">Le Conseil d'État renforce les règles d'épandage</a>
                                        </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <img :src="actuali1" class="img-responsive">
                                        <div class="card-body">
                                            <p class="date">29 juillet 2020</p>
                                            <a href="#">Le Conseil d'État renforce les règles d'épandage</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <img :src="actuali2" class="img-responsive">
                                        <div class="card-body">
                                            <p class="date">29 juillet 2020</p>
                                            <a href="#">Le Conseil d'État renforce les règles d'épandage</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <img :src="actuali3" class="img-responsive">
                                        <div class="card-body">
                                            <p class="date">29 juillet 2020</p>
                                            <a href="#">Le Conseil d'État renforce les règles d'épandage</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a class="carousel-control-prev text-dark" href="#myCarousel" role="button" data-slide="prev">
                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-dark" href="#myCarousel" role="button" data-slide="next">
                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                </div>
      </div>

            <h1>Experiences</h1>
            <div class="expcontent">
                <div class="expe">
                    <img :src="avatar" class="sizimg">
                    <p class="text-center">"Merci bien l'équipe Ressource.ma vraiment le service est top et même après sevice toujours ils répondent 
                        à temps, vraiment merci."</p>
                </div>
                <div class="expe">
                    <img :src="avatar" class="sizimg">
                    <p class="text-center">"Merci bien l'équipe Ressource.ma vraiment le service est top et même après sevice toujours ils répondent 
                        à temps, vraiment merci."</p>
                </div>
                <div class="expe">
                    <img :src="avatar" class="sizimg">
                    <p class="text-center">"Merci bien l'équipe Ressource.ma vraiment le service est top et même après sevice toujours ils répondent 
                        à temps, vraiment merci."</p>
                </div>
                </div>
            <h1>Partenaires</h1>
                <div class="row content">
                <div class="col-md-3">
                        <img :src="logo1" class="sizimg">
                </div>
                <div class="col-md-3">
                        <img :src="logo2" class="sizimg">
                </div>
                <div class="col-md-3">
                        <img :src="logo3" class="sizimg">
                </div>
                <div class="col-md-3">
                        <img :src="logo4" class="sizimg">
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
import P1 from '../../images/effet de serre.jpg';
import P2 from '../../images/paneauxso.jpg';
import P3 from '../../images/gouta.jpg';
import P4 from '../../images/pompage.jpg';
import P5 from '../../images/olives.jpeg';
import P6 from '../../images/consul.jpg';
import act1 from '../../images/agri.jpg';
import act2 from '../../images/pest.jpg';
import act3 from '../../images/pom.jpg';
import avat from '../../images/mane.png';
import log1 from '../../images/ocp.png';
import log2 from '../../images/lem.jpg';
import log3 from '../../images/ocp.png';
import log4 from '../../images/pmv.jpg';


export default {
    name:"home",
    components: {
        NavBar,
        Header,
        Footer
    },
     data: function () {
            return {
            projet1:P1,
            projet2:P2,
            projet3:P3,
            projet4:P4,
            projet5:P5,
            projet6:P6,
            actuali1:act1,
            actuali2:act2,
            actuali3:act3,
            avatar:avat,
            logo1:log1,
            logo2:log2,
            logo3:log3,
            logo4:log4,

    }}
    }
</script>

<style scoped>
.contain{
    width: 100%;
    height: 100%;
    margin: 0 auto;
    font-family: 'Poppins', sans-serif;
}
.home{
    width:80%;
    height: 100%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: 'Poppins', sans-serif;
}
.card-img-top{
    height:80%;
}
h1{
    padding-top: 60px;
    padding-bottom: 40px;
    color: #0F044C;
}
.col-md-4{
    position: relative;

}
.imgHover:hover{
    opacity:  0.5;
     animation: slide 0.4s;
}
@keyframes slide{
  0%   {transform:translateX(-10%);}
  100% {transform:translateX(-50%);}
}
.heading{
    position:absolute;
    top:60%;
    color: #fff;
}
h2{
    padding-top: 20px;
    padding-bottom: 40px;
    color: #0F044C;
}
img{
     width:100%;
     height:100%;}

.card{
    border: none;
    }
.card-text{
    text-align: left;
    }
a{
    color:black;
}
.date{
    color: #707070;
}
.pb-5, .py-5 {
    padding-bottom: 0rem!important;
}
.pt-5, .py-5 {
    padding-top: 0rem!important;
}
.expcontent{
    width:70%;
    margin: 0 auto;
    }
.expe{
    margin-bottom: 15px;
    display: flex;
    align-content: center;
    align-items: center;
    justify-items: center;
}
.sizimg{
    width:100px;
    height: 90px;
    }
p{
    margin: 0;
    }
.content{
    height:60%;
    margin-bottom: 40px;
    }
    @font-face {
      font-family: 'Poppins', sans-serif;
      src: local('Poppins'), url('../../fonts/Poppins-Bold.ttf')  format('truetype'),  
    } 
</style>




