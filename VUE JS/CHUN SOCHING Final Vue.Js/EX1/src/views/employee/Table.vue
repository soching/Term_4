<template>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="employee in employees" :key="employee.id">
          <td>{{employee.name}}</td>
          <td>{{employee.email}}</td>
          <td>{{employee.phone}}</td>
          <td>
            <button @click="showEmployee(employee)" class="btn btn-info btn-sm">Details</button>
          </td>
        </tr>
      </tbody>
    </table>
  </template>
  
  <script>
  export default {
    props:['employees'],
    name: 'EmployeeTable',
    methods: {
      showEmployee(employee) {
        this.$emit('show-employee', employee);
      }
    }
  };

  </script>
  
  <style>
  .table {
    width: 100%;
    margin-top: 20px;
  }
  </style>
  