<template>
  <div class="card">
    <div class="card-header">{{ user_profile }}</div>
    <div class="card-body">
      <p class="card-text"><strong>Name:</strong> {{ user.name }}</p>
      <p class="card-text"><strong>Age:</strong> {{ user.age }}</p>
      <p class="card-text"><strong>Location:</strong> {{ user.location }}</p>
    </div>
    <div class="card-footer text-center">
      <button class="btn btn-primary">Contact</button>
    </div>
  </div>
</template>

<script>
export default {
  props:['user_profile','user']
};
</script>

<style>
</style>