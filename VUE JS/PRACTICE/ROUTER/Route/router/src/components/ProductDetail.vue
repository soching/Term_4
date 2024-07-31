<template>
  <div class="card mb-3">
    <div class="card-header">{{ product_details }}</div>
    <div class="card-body">
      <p class="card-text"><strong>Product Name:</strong> {{ product.name }}</p>
      <p class="card-text"><strong>Price:</strong> ${{ product.price }}</p>
      <p class="card-text">
        <strong>Description:</strong> {{ product.description }}
      </p>
    </div>
    <div class="card-footer text-center">
      <button class="btn btn-success">Add to Cart</button>
    </div>
  </div>
</template>

<script>
export default {
  props: ["product_details", "product"],
};
</script>

<style>
</style>