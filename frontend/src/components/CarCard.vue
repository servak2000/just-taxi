<template>
    <div class="card">
        <img class="card-img-top" src="https://cdn1.ozone.ru/multimedia/c500/1017455009.jpg" alt="Card image cap">
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

<style scoped>

</style>