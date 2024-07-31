<template>
  <div class="container">
    <div class="row">
      <div class="col-md-4" v-for="product in products" :key="product.id">
        <ProductDetailVue
          product_details="Product Deatils"
          :product="product"
        />
      </div>
    </div>
    <div class="row">
      <div class="col-md-4" v-for="user in users" :key="user.id">
        <UserProfile user_profile="User Profile" :user="user" />
      </div>
    </div>
  </div>
</template>
  
  <script>
import ProductDetailVue from "@/components/ProductDetail.vue";
import UserProfile from "@/components/UserProfile.vue";

export default {
  components: {
    ProductDetailVue,
    UserProfile,
  },
  data() {
    return {
      products: [
        {
          id: 1,
          name: "Coco",
          price: 20,
          description: "This is a description",
        },
        {
          id: 2,
          name: "Pepsi",
          price: 20,
          description: "This is a description",
        },
        {
          id: 3,
          name: "Red bur",
          price: 20,
          description: "This is a description",
        },
      ],
      users: [
        { id: 1, name: "Yen Yon", age: 20, location: "New York" },
        { id: 2, name: "Yen Yon", age: 20, location: "New York" },
        { id: 3, name: "Yen Yon", age: 20, location: "New York" },
      ],
    };
  },
};
</script>
  
  <style>
</style>