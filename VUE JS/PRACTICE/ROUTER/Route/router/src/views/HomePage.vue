<template>
  <div class="home">
    <!-- Welcome section -->
    <WelcomePageVue />

    <!-- Fruits list -->
    <div class="row justify-content-center fruits-list">
        <FruitComponentVue class="col-md-4" v-for="fruit in fruits" :key="fruit.id" :fruit="fruit" />
    </div>

    <!-- Sponsor cards -->
    <div class="row justify-content-center sponsor-cards">
      <div class="col-md-4" v-for="sponsor in sponsors" :key="sponsor.id">
        <div class="card mb-3">
          <img
            :src="sponsor.logoUrl"
            :alt="sponsor.name"
            class="card-img-top"
          />
          <div class="card-body">
            <h5 class="card-title">{{ sponsor.name }}</h5>
            <p class="card-text">{{ sponsor.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import WelcomePageVue from '@/components/WelcomePage.vue';
import FruitComponentVue from '@/components/FruitComponent.vue';

export default {
  components:{
    WelcomePageVue,
    FruitComponentVue
  },
  data() {
    return {
      fruits: [
        {
          id: 1,
          name: "Apple",
          price: "$1.00",
          description: "Fresh and crunchy apple",
          imageUrl:
            "https://cdn.britannica.com/22/187222-050-07B17FB6/apples-on-a-tree-branch.jpg",
        },
        {
          id: 2,
          name: "Banana",
          price: "$0.50",
          description: "Sweet and ripe banana",
          imageUrl:
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0nJ-ybSi5I_8ymqlVYga97exwBXQS3BRhTWWYcG6-cA&s",
        },
        // Add more fruits as needed
      ],
      sponsors: [
        {
          id: 1,
          name: "Example Company 1",
          logoUrl:
            "https://d1io3yog0oux5.cloudfront.net/_52096c859436e4d491100c9a4db35112/cocacolacompany/db/784/6375/image.png",
          description:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        },
        {
          id: 2,
          name: "Example Company 2",
          logoUrl:
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc6-ACnL_8BW17bHSPfN71kS6KFc7VxYszHkVbq42WGDS3BfA7ZuOrwlckPjq_vHlEyXg&usqp=CAU",
          description:
            "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        },
        // Add more sponsors as needed
      ],
    };
  },
};
</script>

<style scoped>
/* Styles for the Home component */
.home {
  padding: 20px;
}

.fruits-list .fruit {
  margin-bottom: 20px;
}

.sponsor-cards .sponsor-card {
  margin-bottom: 20px;
}
</style>