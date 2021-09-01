<template>
  <div>
    <notifications group="app" position="top center" />
    <router-view></router-view>
  </div>
</template>

<script>
import "bootstrap/dist/css/bootstrap.min.css";
export default {
  components: {},

  created() {
    const user = localStorage.user;
    const token = localStorage.token;
    if (user && token) {
      const userObj = {};
      userObj.token = token;
      userObj.utilisateur = JSON.parse(user);
      this.$store.commit("SET_USER_DATA", userObj);
    }
  },
};
</script>

<style scoped>
</style>