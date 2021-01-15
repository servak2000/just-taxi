<template>
    <div class="feedback">
          <div v-for="review in reviews">
            <Review v-bind:review="review"></Review>
          </div>
    </div>
</template>

<script>
import Review from "@/components/Review";
import Axios from "axios";
export default {
    name: "Feedback",
    components: {Review},
    data() {
      return {
        reviews: []
      }
    },


      created() {
        const instance = Axios.create({
          baseURL: 'http://localhost:1199/v1'
        });

        instance.get( '/review/feedback')
            .then((response) => this.reviews = response.data)
      }
}
</script>

