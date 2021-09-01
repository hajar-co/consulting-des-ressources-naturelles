<template>
  <div class="contain">
    <NavBar />
    <div class="login">
      <h1><u>Login</u></h1>
      <form @submit.prevent="login">
        <label for="email">Email:(*)</label>
        <input
          v-model="email"
          type="email"
          required
          placeholder="Entrer votre adress email"
          name="email"
          id="email"
        /><br />
        <label for="password">Password:(*)</label>
        <input
          v-model="password"
          type="password"
          required
          placeholder="Enter your password"
          name="password"
          id="password"
        /><br />
        <input type="checkbox" name="rememberme" id="rememberme" />
        <label for="rememberme">Remember me</label><br />
        <button type="submit" name="submit">Login</button>
        <router-link to="/Sign-up"><u>Créer un nouveau compte</u></router-link>
      </form>
    </div>
    <Footer />
  </div>
</template>

<script>
import NavBar from "../components/NavBar";
import "bootstrap/dist/css/bootstrap.min.css";
import Footer from "../components/Footer.vue";
import api from "../api";

export default {
  name: "loginClient",
  components: {
    NavBar,
    Footer,
  },
  data() {
    return {
      email: "test@gmail.com",
      password: "test123",
    };
  },

  methods: {
    login() {
      this.$store
        .dispatch("login", {
          email: this.email,
          password: this.password,
        })
        .then((res) => {
          if (res.data.utilisateur.role == 3) {
            this.$router.push('/formulaire');
            this.$notify({
              group: "app",
              type: "success",
              title: "Auth",
              text: 'Bienvenu Client',
            });
          }
          if (res.data.utilisateur.role == 1) {
            this.$router.push('/Dashboard-admin');
            this.$notify({
              group: "app",
              type: "success",
              title: "Auth",
              text: 'Bienvenu Admin',
            });
          }
          if (res.data.utilisateur.role == 2) {
           this.$router.push('/Dashboard-equipe');
            this.$notify({
              group: "app",
              type: "success",
              title: "Auth",
              text: 'Bienvenu Member',
            });
          }
          // console.log(route, msg);
          // this.$router.push(route);
          // this.$notify({
          //   group: "app",
          //   type: "success",
          //   title: "Auth",
          //   text: msg,
          // });
        })
        .catch(() => {
          this.$notify({
            group: "app",
            type: "error",
            title: "Auth",
            text: "Accès non autorisé",
          });

          this.email = "";
          this.password = "";
        });

      // if (user.role === "3") {
      //   this.$router.push("/formulaire");
      //   this.$notify({
      //     group: "app",
      //     type: 'success',
      //     title: "Auth",
      //     text: "Bienvenu Client",
      //   });
      // }

      //  if (user.role === "2") {
      //   this.$router.push("/Dashboard-equipe");
      //   this.$notify({
      //     group: "app",
      //     type: 'success',
      //     title: "Auth",
      //     text: "Bienvenu equipe",
      //   });
      // }
      //  if (user.role === "1") {
      //   this.$router.push("/Dashboard-admin");
      //   this.$notify({
      //     group: "app",
      //     type: 'success',
      //     title: "Auth",
      //     text: "Bienvenu Admin",
      //   });
      //  }
      //  this.$notify({
      //     group: "app",
      //     type: 'error',
      //     title: "Auth",
      //     text: "Accès non autorisé",
      //   });

      //   this.email = '';
      //   this.password = '';
    },
  },
};
</script>

<style scoped>
.contain {
  width: 100%;
  height: 100vh;
}
.login {
  text-align: center;
  box-shadow: rgba(4, 170, 109, 0.25) 0px 8px 16px;
  padding: 32px;
  border-radius: 15px;
  background-color: #eee;
  width: 50%;
  margin: 16vh auto 15vh auto;
}
form {
  text-align: left;
}
input[type="email"] {
  padding: 10px 15px;
  border-radius: 5px;
  border: 1px solid grey;
  width: calc(100% - 30px);
  margin-bottom: 20px;
}
input[type="password"] {
  padding: 10px 15px;
  border-radius: 5px;
  border: 1px solid grey;
  width: calc(100% - 30px);
  margin-bottom: 20px;
}
button {
  display: block;
  width: 100%;
  padding: 10px 15px;
  border: none;
  background: #04aa6d;
  color: #fff;
  border-radius: 5px;
  margin-bottom: 20px;
}
</style>