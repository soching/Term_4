<template>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4 mb-4" v-for="teacher in teachers" :key="teacher.id">
        <div class="card">
          <img :src="teacher.image" class="card-img-top" alt="teacher Image" />
          <div class="card-body">
            <h5 class="card-title">{{teacher.name}}</h5>
            <p class="card-text">ID:{{teacher.id}} </p>
            <p class="card-text">Subject: {{teacher.subject}}</p>
            <p class="card-text">Score: {{teacher.score}}</p>
            <p class="text-danger" v-if="teacher.score<50" >Fail</p>
            <p class="text-primary" v-else >Pass</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
    //I have array object teachers
      teachers: [
        {
          id: 1,
          name: "Alice Johnson",
          image: "https://img.freepik.com/free-photo/portrait-female-teacher-holding-notepad-green_140725-149619.jpg",
          subject: "Math",
          score: 45,
        },
        {
          id: 2,
          name: "Bob Smith",
          image: "https://c8.alamy.com/comp/D2ENPC/happy-male-teacher-with-textbooks-in-classroom-D2ENPC.jpg",
          subject: "Science",
          score: 75,
        },
        {
          id: 3,
          name: "Charlie Brown",
          image: "https://st4.depositphotos.com/13194036/22902/i/450/depositphotos_229023724-stock-photo-female-teacher-pointing-finger-mathematical.jpg",
          subject: "History",
          score: 30,
        },
      ],
    };
  },
};
</script>

<style>

</style>
