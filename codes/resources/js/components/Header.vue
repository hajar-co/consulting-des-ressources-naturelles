<template>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('../../images/pom.jpg')">
            <div class="col-md-12 flex2">
              
                <p class="text-CSS">
                     Valoriser vos ressources en un seul clic </p>
                <button type="submit" class="btn btn-info">Démarrer ici</button>

            </div>
        </div>
        <div class="carousel-item flex1" style="background-image: url('../../images/sola.jpg') ">
             <div class="col-md-12 flex2">
              
                <p class="text-CSS">
                     Valoriser vos ressources en un seul clic </p>
                <button type="submit" class="btn btn-info">Démarrer ici</button>

            </div>
        </div>
        <div class="carousel-item" style="background-image: url('../../images/olives.jpeg')">
            <div class="col-md-12 flex2">
             
                <p class="text-CSS">
                      Valoriser vos ressources en un seul clic </p>
                <button type="submit" class="btn btn-info">Démarrer ici</button>
            </div>
        </div> 
     </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> 
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    
</template> 

<script>

export default {
name:'header',
}
</script>

<style scoped>
.carousel-item {
    height: 90vh;
    min-height: 350px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
.text-CSS {
    font-size: 3em;
    color: #fff !important;
    text-align: center;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    /* font-family: 'Poppins', sans-serif; */
}
.btn-info {
    background-color: #04AA6D;
    border-color: #04AA6D;
}
.flex2{
    display: flex; 
    flex-direction: column; 
    text-align: center; 
    justify-content: center;
    align-items: center; 
    padding: 200px;
    }
    @media (max-width: 599px) {
      .flex2{
    display: flex; 
    flex-direction: column; 
    text-align: center; 
    justify-content: center;
    align-items: center; 
    padding: 100px;
    }}
</style>