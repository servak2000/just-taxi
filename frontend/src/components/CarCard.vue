<template>
    <div class="card">
        <img class="card-img-top" v-bind:src="car_props.image" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"> {{car_props.model}} </h5>
            <p class="card-text">
                <hr>
                Год выпуска: {{car_props.release_year}}
                <hr>
                Пробег: {{car_props.mileage}}
                <hr>
            </p>
            <a href="#" class="btn btn-primary"> Подробнее </a>
        </div>
    </div>
</template>

<script>
    export default {
    name: "CarCard",
    props: ['car_props']
}
</script>
