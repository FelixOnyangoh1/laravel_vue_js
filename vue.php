<template>
  <div>
    <!-- Display the data retrieved from the API -->
    <div v-for="item in items" :key="item.id">
      <p>{{ item.name }}</p>
      <p>{{ item.email }}</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      items: [], // data retrieved from the API will be stored here
    };
  },
  created() {
    this.fetchData(); // Fetch data from the API when the component is created
  },
  methods: {
    fetchData() {
      // Make an API request using Vue.js' built-in Axios HTTP library
      axios
        .get('https://api.example.com/users') // replace with your API endpoint
        .then(response => {
          this.items = response.data; // store the retrieved data in the component's data
        })
        .catch(error => {
          console.error(error);
        });
    },
  },
};
</script>

