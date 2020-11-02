<template>
    <div class="product">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">{{trip_props.name}}</h4>
        </div>
        <div class="card-body">
            <h1 class="card-title pricing-card-title"> до {{trip_props.max_price}}р. <small class="text-muted">/ поездка</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>{{trip_props.description[0]}}</li>
                <li>{{trip_props.description[1]}}</li>
                <li>{{trip_props.description[2]}}</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Выбрать</button>
        </div>
    </div>
</template>

<script>
    export default {
    name: "TripTypeCard",
    props: ['trip_props']

}
</script>
