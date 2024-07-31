<template>
  <div class="card mb-3">
    <img :src="fruit.imageUrl" :alt="fruit.name" class="card-img-top" />
    <div class="card-body">
      <h5 class="card-title">{{ fruit.name }}</h5>
      <p class="card-text">Price: {{ fruit.price }}</p>
      <p class="card-text">{{ fruit.description }}</p>
    </div>
  </div>
  <!-- {{ fruit }} -->
</template>

<script>
export default {
    props: ['fruit'],
};
</script>

<style>
</style>