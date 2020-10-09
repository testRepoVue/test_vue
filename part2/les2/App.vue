<template>
    <div class="container">
        <app-car v-bind:price="priceToyota" v-on:setPrice="updatePrice"></app-car>
    </div>
</template>

<script>
/** Подписчики
 * v-on:setPrice регистрация события и передача ему ф -ции
 * регистрация события происходит в момент инициализации vue компонента
 * */
    import Car from './Car.vue';

    export default {
        data(){
            return {
                priceToyota: 1800000,

            }
        },

        methods:{
            /**
             * Ф-ция кот повесили на кастомное событие
             * */
            updatePrice(n_price){
                this.priceToyota = n_price;
            }
        },

        components:{
            appCar: Car,
        }
    }
</script>

<style>

</style>