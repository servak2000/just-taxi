<template>
  <div class="container car">
    <h1> {{car.model}} </h1>
    <img v-bind:src="car.image" alt="Card image cap">
    <p>Год выпуска: {{car.release_year}}</p>
    <p>Пробег: {{car.mileage}}</p>
  </div>
</template>

<script>
  export default {
    name: "Car",
    data() {
      return {
        car: {}
      }
    },
    created() {
      const url = this.$route.params.url

      this.$http.get('/cars-list/info', {params: {url: url}})
      .then((response) => this.car = response.data)

    }
  }
</script>

