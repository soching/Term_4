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
    <section class="">
      <!-- Footer -->
      <footer class="text-center text-white" style="background-color: #0a4275">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: CTA -->
          <section class="">
            <p class="d-flex justify-content-center align-items-center">
              <span class="me-3">Register for free</span>
              <button
                data-mdb-ripple-init
                type="button"
                class="btn btn-outline-light btn-rounded"
              >
                Sign up!
              </button>
            </p>
          </section>
          <!-- Section: CTA -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div
          class="text-center p-3"
          style="background-color: rgba(0, 0, 0, 0.2)"
        >
          © 2020 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/"
            >MDBootstrap.com</a
          >
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </section>
  </div>
</template>

<script>
import NavbarVue from './components/Navbar.vue';

export default {
  components: {
    NavbarVue
  },
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
