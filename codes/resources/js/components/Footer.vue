<template>
   <footer id="footer">
    <section class="footer-one">
        <div class="container1">
            <img :src="logo"  />
            <form class="fu" action="/newsletter" method="POST">
                <i class="fa fa-envelope-open-text"></i>
                <input type="email" name="email" id="email" required placeholder="Email...">
                <button type="submit" class="btn-primary">Subscribe</button>
            </form>
        </div>
    </section>
    <section class="footer2">
      <p>Suivez-nous sur les résaux sosiaux</p>
      <div class="icons">
      <i class="fab fa-github"></i>
      <i class="fab fa-linkedin-in"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-facebook-f"></i>
      </div>
    </section>
    <section class="footer3">
            <p class="copyright">Copyright © 2021 Ressoource.ma</p>
    </section>
    </footer> 
</template>

<script>
import MyLogo from '../../images/logo2.svg';
export default {
data: function () {
            return {
      logo: MyLogo
  }}
}
</script>

<style>
#footer{
  font-family: 'Poppins', sans-serif;
    } 
.container1 {
  width: 80%;
  margin: 0 auto;
  /* padding: 0px 16px;  */
  }
.footer-one {
  padding: 12px 0px;
  background-color: #F4F4F4; 
  font-family: 'Poppins', sans-serif;
  }
  .footer-one > div {
    display: flex;
    flex-direction: row;
    justify-content: space-between; }
    @media (max-width: 599px) {
      .footer-one > div {
        flex-direction: column;
        justify-content: center;
        align-items: space-between;
        text-align: center; } }
    .footer-one > div img {
      width: 135px; }
      @media (max-width: 599px) {
        .footer-one > div img {
          margin: auto;
          margin-bottom: 8px; } }
    .footer-one > div form {
      min-width: 50%;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center; }
      .footer-one > div form i {
        font-size: 1.5rem;
        color: #0F044C; }
        @media (max-width: 599px) {
          .footer-one > div form i {
            margin-bottom: 8px; } }
      .footer-one > div form input {
        border: none;
        border-radius: 5px;
        margin: 0px 8px;
        padding-left: 8px;
        height: 30px;
        min-width: 70%; }
        @media (max-width: 599px) {
          .footer-one > div form input {
            margin-bottom: 8px; } }
      .footer-one > div form button {
        border: none;
        border-radius: 5px;
        background-color: #0F044C;
        color: #f9f7f6;
        height: 30px; }
        @media (max-width: 599px) {
          .footer-one > div form button {
            margin-bottom: 8px; } }
      @media (max-width: 599px) {
        .footer-one > div form {
          flex-direction: column; } }
    .footer2 {
    width: 80%;
    margin: 0 auto;
    /* padding: 0px 16px; */
    display: flex;
    flex-direction: column;
    justify-items: center;
    align-items: center;
    height: 20vh;
    justify-content: center; 
    font-family: 'Poppins', sans-serif; 
  }
  .icons {
    width: 10%;
    margin: 0 auto;
    justify-items: center;
    align-items: center;
    justify-content: space-between;
    display: flex;
    flex-direction: row; 
    color: #04AA6D;
  }
   @media (max-width: 599px) {
     .icons {
    width: 20%;
    margin: 0 auto;}}
    .footer3{
    background-color: #0F044C;
    height:8vh;
    color: #fff;
    DISPLAY: flex;
    flex-direction: row;
    text-align: center;
    justify-content: center;
    justify-items: center;
    align-items: center;
    align-content: center;
    font-family: 'Poppins', sans-serif;
    }
    .copyright{
      font-size: .9em;
      margin: 0 0;
    }
    @font-face {
      font-family: 'Poppins', sans-serif;
      src: local('Poppins'), url('../../fonts/Poppins-Regular.ttf')  format('truetype'),  
    } 

</style>