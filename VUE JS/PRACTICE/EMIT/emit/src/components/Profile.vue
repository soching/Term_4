<template>
  <div class="card" style="width: 18rem">
    <img :src="user.profile" class="card-img-top" alt="..." />
    <div class="card-body">
      <h5 class="card-title">{{ user.name }}</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ user.age }}</li>
    </ul>
    <div class="card-body">
      <a href="#" class="btn btn-primary" @click="showMore">show more...</a>
    </div>
  </div>
  <!-- {{ user }} -->
</template>

<script>
export default {
  name: "ProfileUser",
  props:['user'],
  methods:{
    showMore(){
      this.$emit("see-more",this.user);
    }
  }
};
</script>

<style>
</style>