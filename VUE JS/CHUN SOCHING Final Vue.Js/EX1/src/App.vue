<template>
  <div class="container">
    <!-- Add User Form -->
    <div class="row">
      <div class="col-md-6 mx-auto">
        <form @submit.prevent="addUser" class="mb-3">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Name" v-model="newUser.name">
            <input type="email" class="form-control" placeholder="Email" v-model="newUser.email">
            <button type="submit" class="btn btn-primary">Add User</button>
          </div>
        </form>
      </div>
    </div>

    <!-- User List -->
    <div class="row">
      <div class="col-md-6 mx-auto">
        <ul class="list-group">
          <li class="list-group-item" v-for="(user, index) in users" :key="index">
            <div v-if="!user.editMode">
              <span>{{ user.name }}</span> - <span>{{ user.email }}</span>
              <button @click="removeUser(index)" class="btn btn-danger btn-sm float-end">Remove</button>
              <button @click="toggleEditMode(user)" class="btn btn-primary btn-sm float-end me-2">Edit</button>
            </div>
            <div v-else>
              <div class="input-group">
                <input type="text" class="form-control" v-model="user.name">
                <input type="email" class="form-control" v-model="user.email">
                <button @click="saveUserEdit(user)" class="btn btn-success btn-sm">Save</button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      users: [
        { name: 'Alice', email: 'alice@example.com', editMode: false },
        { name: 'Bob', email: 'bob@example.com', editMode: false },
        { name: 'Charlie', email: 'charlie@example.com', editMode: false }
      ],
      newUser: { name: '', email: '' }
    };
  },
  methods: {
    addUser() {
      if (this.newUser.name && this.newUser.email) {
        this.users.push({ ...this.newUser, editMode: false });
        this.newUser = { name: '', email: '' };
      }
    },
    removeUser(index) {
      this.users.splice(index, 1);
    },
    toggleEditMode(user) {
      user.editMode = !user.editMode;
    },
    saveUserEdit(user) {
      user.editMode = false;
    }
  }
};
</script>

<style>

</style>
