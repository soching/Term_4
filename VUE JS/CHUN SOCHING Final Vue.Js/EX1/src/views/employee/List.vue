<template>
  <div class="container mt-4">
    <h1 class="mb-4">Employee List</h1>
    <EmployeeTable :employees="employees" @show-employee="show"/>
    <EmployeeCard  :selectedEmployee="selectedEmployee"/>
  </div>
</template>

<script>
import EmployeeTable from "./Table.vue";
import EmployeeCard from "./Card.vue";

export default {
  name: "EmployeeList",
  components: {
    EmployeeTable,
    EmployeeCard,
  },
  data() {
    return {
      employees: [
        { id: 1, name: "Alice", email: "alice@example.com", phone: "123-456-7890", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToWCo77N-gls7On3nWMLzcOa1QsdP7hmHHKQ&s" },
        { id: 2, name: "Bob", email: "bob@example.com", phone: "234-567-8901", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrW5Xeg8iDOH7iFx1zjdFsb0BkUZZcRzj1tw&s" },
        { id: 3, name: "Charlie", email: "charlie@example.com", phone: "345-678-9012", image: "https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Charlie_Chaplin.jpg/819px-Charlie_Chaplin.jpg" },
      ],
      selectedEmployee: '',
    };
  },
  methods: {
    show(employee) {
      this.selectedEmployee = employee;
    },
  },
};
</script>

<style>
.container {
  max-width: 600px;
  margin: auto;
}
</style>
