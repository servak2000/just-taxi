<template>
    <div class="container cars">
        <h1> Автомобили нашего таксопарка </h1>
        <CarsList></CarsList>
    </div>
</template>

<script>
import CarsList from "@/components/CarsList";
export default {
    name: "Cars",
    components: {CarsList}
}
</script>

<style scoped>

</style>