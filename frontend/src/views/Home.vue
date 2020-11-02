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
export default {
  name: 'Home',
    components: {TripTypeCard},
    data() {
      return {
          trip_types: [
              {
                  id: 1,
                  name: 'Эконом',
                  max_price: 200,
                  description: ['Выгодная цена', 'Ожидание не более 5 минут', 'Нет детского кресла']
              },
              {
                  id: 2,
                  name: 'Стандарт',
                  max_price: 500,
                  description: ['Гибкие цены', 'В наличии детское кресло', 'Ожидание до 15 мин.']
              },
              {
                  id: 3,
                  name: 'VIP',
                  max_price: 1000,
                  description: ['В наличии детское кресло', 'Ожидание до 30 мин.', 'Возможность выбрать водителя']
              }
          ]
      }
    }
}
</script>
