<!-- src/components/Card.vue -->
<template>
    <div class="card">
      <div class="card-header">
        <slot name="header">Default Header</slot>
      </div>
      <div class="card-body">
        <slot>Default Body Content</slot>
      </div>
      <div class="card-footer">
        <slot name="footer">Default Footer</slot>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'CardComponent'
  }
  </script>
  
  <style scoped>

  </style>
  