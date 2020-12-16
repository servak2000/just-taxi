<template>
    <div class="container home">
        <div class="container">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Тип поездки</h1>
                <p class="lead"> Выберите тип поездки для заказа такси.</p>
            </div>
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm" v-for="trip_type in trip_types">
                    <TripTypeCard v-bind:trip_props="trip_type"></TripTypeCard>
                </div>
            </div>
        </div>
    </div>
</template>



<script>

import TripTypeCard from "@/components/TripTypeCard";
import Axios from 'axios';
export default {
  name: 'Home',
    components: {TripTypeCard},
    data() {
      return {
        trip_types: []
      }

    },


    created() {
      const instance = Axios.create({
        baseURL: 'http://localhost:1199/v1'
      });

      instance.get( '/trip-types/home')
          .then((response) => this.trip_types = response.data)
    }
}
</script>
