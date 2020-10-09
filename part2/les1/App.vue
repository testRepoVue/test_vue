<template>
    <div class="container">
        <app-car v-bind:price="priceToyota" :sale="saleToyota"></app-car>
    </div>
</template>

<script>
    /**
     * Передача параметров через props в дочерние узлы
     * передаем через директивы v-bind:параметр(props) = 'значение'
     * */
    import Car from './Car.vue';

    export default {
        data(){
            return {
                priceToyota: 1800000,
                saleToyota: 5,
            }
        },

        components:{
            appCar: Car, //Локальная рег
        }
    }
</script>

<style>

</style>