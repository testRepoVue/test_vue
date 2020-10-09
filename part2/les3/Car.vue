<template>
    <div class="row">
        <div class="col-md-12">
            <h2 class="car_name paint">
                Name: {{name}}
            </h2>
            <p>{{description}}</p>
            <p> <span  class="price">{{price}}</span></p>
            <button @click="bay">Купить</button>
        </div>
    </div>
</template>

<script>

    import {eventEmitter} from "./index.js";

    export default {

        props:['price'],

        data(){
            return {
                name: 'Toyota',
                description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',

            }
        },
        methods:{
            bay(){
                /** Вызов события из шины eventEmitter */
                eventEmitter.$emit('counterUpdate',1)
            }
        }
    }
</script>

<style scoped>
    .car_name{
        border-bottom: 1px solid green;
    }

    .price{
        font-weight: 600;
        color:red;
    }

    .paint{
        color:brown;
    }
</style>