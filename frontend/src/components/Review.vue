<template>
  <div class="container review">
    <img v-bind:src="review.picture" alt="avatar">
    <p><span > {{review.author}} </span> {{review.author_status}}</p>
    <p> {{review.text}} </p>
  </div>
</template>

<script>
  export default {
  name: "Review",
  props: ['review']
}
</script>

<style scoped>
.container {   width: 75%;
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px; /* скругление углов блока */
  padding: 16px; /* внутренние поля */
  margin: 16px auto; /* внешние отступы */
}

.container img {
  float: left; /* обтекание слева */
  margin-right: 20px; /* пространство между аватаркой и абзацем */
  border-radius: 50%; /* скругляет аватарку */
  width: 90px;
}

.container span {
  font-size: 18px;
  margin-right: 15px;
}

@media (max-width: 450px) {
  .container {
    text-align: center;
  }
  .container img {
    margin: auto;
    float: none;
    display: block;
  }
}
</style>