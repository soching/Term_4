<template>
  <table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Profile</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{ data.id }}</th>
        <th>
          <img
            :src="data.profile"
            :alt="data.name"
            class="rounded-circle"
            style="width: 50px; height: 50px"
          />
        </th>
        <td>{{ data.name }}</td>
        <td>{{ data.age }}</td>
        <td>{{ data.gender }}</td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
    props:['data']
};
</script>

<style>
</style>