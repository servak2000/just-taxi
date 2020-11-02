<template>
    <div class="cars-list">

        <div class="row">
            <div class="col-md-3">
                <div>
                    <h5> Фирма </h5>
                    <ul class="list-unstyled">
                        <li v-for="manufacturer in filter.manufacturers">
                            <label>
                                <input type="checkbox"> {{ manufacturer }}
                            </label>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5> Год выпуска </h5>
                    <ul class="list-unstyled">
                        <li v-for="release_year in filter.release_year">
                            <label>
                                <input type="checkbox"> {{ release_year }}
                            </label>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5> Пробег </h5>
                    <div class="d-flex">
                        <input type="number" class="form-control" placeholder="от">
                        <input type="number" class="form-control" placeholder="до">
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-4" style="width: 18rem;" v-for="car_properties in cars_properties">
                        <CarCard v-bind:car_props="car_properties"></CarCard>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CarCard from "@/components/CarCard";
    export default {
        name: "CarsList",
        components: {CarCard},
        data() {
            return {
                filter: {
                    manufacturers: ['BMW', 'Lada', 'Mersedes', 'VAZ'],
                    release_year: [2010, 2015, 2016, 2019]
                },
                cars_properties: [
                    {
                        model: "VAZ-2104",
                        release_year: 2010,
                        mileage: 10000
                    },

                    {
                        model: "VAZ-2101",
                        release_year: 2005,
                        mileage: 100000
                    },

                    {
                        model: "Mersedes GLA",
                        release_year: 2015,
                        mileage: 0
                    },

                    {
                        model: "BMW X5",
                        release_year: 2019,
                        mileage: 20000
                    },

                    {
                        model: "Lada Vesta",
                        release_year: 2016,
                        mileage: 15000
                    },
                ]
            }
        }
    }
</script>
