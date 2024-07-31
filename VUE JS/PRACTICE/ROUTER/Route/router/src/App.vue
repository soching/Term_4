<template>
  <div class="container">
    <!-- <nav>
      <router-link to="/">Home</router-link>
      <router-link to="/about">About</router-link>
    </nav> -->
    <NavbarVue />
    <div class="mb-5">
      <router-view></router-view>
    </div>
    <!-- foter -->
    <FoterComponentVue />
  </div>
</template>

<script>
import FoterComponentVue from './components/FoterComponent.vue';
import NavbarVue from './components/Navbar.vue';
export default {
  name: "App",
  components: {
      NavbarVue,
      FoterComponentVue
  }
};
</script>

<style>
nav {
  padding: 15px;
}
nav a {
  margin: 0 10px;
  text-decoration: none;
}
</style>