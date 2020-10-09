<template>
    <div class="container">
        <app-counter></app-counter>
        <app-car v-bind:price="priceToyota" ></app-car>
    </div>
</template>

<script>
    /**
     * регистрация через шину событий см index.js
     * eventEmitter шина событий
     * */

    import Car from './Car.vue';
    import Counter from './Counter.vue';

    export default {
        data(){
            return {
                priceToyota: 1800000,

            }
        },

        components:{
            appCar: Car,
            appCounter: Counter,
        }
    }
</script>

<style>

</style>