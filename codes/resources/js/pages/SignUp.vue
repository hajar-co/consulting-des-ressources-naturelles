<template>
  <div class="contain">
    <NavBar />
    <div class="login">
      <h1><u>Créer un compte</u></h1>
      <form @submit.prevent="signUp">
        <label for="name">Nom complet:</label>
        <input
          v-model="name"
          type="text"
          name="name"
          placeholder="Entrer votre nom"
        />
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
        <button type="submit" name="submit">Créer un compte</button>
        <router-link to="/login-client"
          ><u>Un compte déja existe </u></router-link
        >
      </form>
    </div>
    <Footer />
  </div>
</template>

<script>
import NavBar from "../components/NavBar";
import "bootstrap/dist/css/bootstrap.min.css";
import Footer from "../components/Footer.vue";

export default {
  name: "loginClient",
  components: {
    NavBar,
    Footer,
  },

  data() {
    return {
      name: "",
      email: "",
      password: "",
      role: "3",
    };
  },
  methods: {
    signUp() {
      this.$store
        .dispatch("signup", {
          name: this.name,
          email: this.email,
          password: this.password,
          role: this.role,
        })
        .then(() => {
          this.$router.push("/formulaire");
          this.$notify({
            group: "app",
            type: "success",
            title: "Auth",
            text: "Bienvenu Client",
          });
        })
        .catch(() => {
          this.$notify({
            group: "app",
            type: "error",
            title: "Auth",
            text: "Accès non autorisé",
          });
        });
    },
  },
};
</script>

<style scoped>
.contain {
  width: 100%;
  height: 100vh;
  font-family: "poppins", sans-serif;
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
input[type="text"] {
  padding: 10px 15px;
  border-radius: 5px;
  border: 1px solid grey;
  width: calc(100% - 30px);
  margin-bottom: 20px;
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