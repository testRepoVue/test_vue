<template>
    <div class="container">
        <app-car>
            <h2 slot="head">{{carname}}</h2>
            <p slot="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi aperiam autem blanditiis corporis enim et laborum, molestias nostrum nulla odio,
                officia pariatur quia quod reprehenderit sapiente sunt ullam unde.
            </p>
        </app-car>
    </div>
</template>

<script>
/**
 * Шаблоны через именованные slot
 * */
    import Car from './Car.vue';

    export default {

        data(){
            return {
                carname:"Mazda 6"
            }
        },

        components:{
            appCar: Car,
        }
    }
</script>

<style>

</style>