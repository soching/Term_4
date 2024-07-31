<template>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="mb-3">
          <label for="number1" class="form-label">Number 1</label>
          <input
            type="number"
            id="number1"
            class="form-control"
            v-model="number1"
          />
        </div>
        <div class="mb-3">
          <label for="number2" class="form-label">Number 2</label>
          <input
            type="number"
            id="number2"
            class="form-control"
            v-model="number2"
          />
        </div>
        <div class="mb-3">
          <button  class="btn btn-primary me-2" @click="addNumbers">+</button>
          <button class="btn btn-secondary me-2"  @click="subtractNumbers">-</button>
          <button  class="btn btn-danger" @click="clearInputs">Clear</button>
        </div>
        <div class="mt-3">
          <h5>Result: {{ result }}</h5>
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
      number1: "",
      number2: "",
      result: "",
    };
  },
  methods: {
    //write method to add number
    addNumbers() {
      return this.result = this.number1 + this.number2
    },
    //write method to subtract number
    subtractNumbers() {
      return this.result = this.number1 - this.number2
    },
    //write method to clear inputs and result
    clearInputs() {
      if(this.number1 && this.number2 && this.result){
          this.number1 = ""
          this.number2 = ""
          this.result = ""
      }
    },
  },
};
</script>

<style>
body {
  margin-top: 50px;
}
</style>
