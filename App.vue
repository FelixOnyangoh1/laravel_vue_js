<template>
  <div>
    <h1>API Data</h1>
    <api-consumer></api-consumer> <!-- use the ApiConsumer component here -->
  </div>
</template>

<script>
import ApiConsumer from './ApiConsumer.vue'; // import the ApiConsumer component

export default {
  components: {
    ApiConsumer, // register the ApiConsumer component
  },
};
</script>

