<template>
  <div class="container">
    <ProfileVue :user="user" @see-more="showMore"></ProfileVue>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Age</th>
          <th scope="col">Gender</th>
          <th scope="col">Profile</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{ data.id }}</th>
          <td>{{ data.name }}</td>
          <td>{{ data.age }}</td>
          <td>{{ data.gender }}</td>
          <th>
            <img
              :src="data.profile"
              :alt="data.name"
              class="rounded-circle"
              style="width: 50px; height: 50px"
            />
          </th>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import ProfileVue from "@/components/Profile.vue";

export default {
  components: {
    ProfileVue,
  },
  data() {
    return {
      user: {
        id: 1,
        name: "Yen Yon",
        age: 18,
        gender: "Male",
        profile:
          "https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-mediumSquareAt3X-v2.jpg",
      },
      data: "",
    };
  },
  methods: {
    showMore(data) {
      this.data = data;
    },
  },
};
</script>

<style>
</style>