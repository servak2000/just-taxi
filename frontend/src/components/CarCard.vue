<template>
    <div class="card">
        <img class="card-img-top" v-bind:src="car_props.image" alt="Card image cap">
        <div class="card-body">
            <h5>
              <router-link v-bind:to="{name: 'Car', params: {url: car_props.url}}"> {{car_props.model}} </router-link>
            </h5>
            <p class="card-text">
                <hr>
                Год выпуска: {{car_props.release_year}}
                <hr>
                Пробег: {{car_props.mileage}}
            </p>
        </div>
    </div>
</template>

<script>
    export default {
    name: "CarCard",
    props: ['car_props']
}
</script>
