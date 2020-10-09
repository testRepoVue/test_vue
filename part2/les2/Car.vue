<template>
    <div class="row">
        <div class="col-md-12">
            <h2 class="car_name">
                Name: {{name}}
            </h2>
            <p>{{description}}</p>
            <p> <span  class="price">{{price}}</span></p>

            <button @click="setPrice">New Price</button>
        </div>
    </div>
</template>

<script>
    /** Подписчики
     * v-on:setPrice регистрация события и передача ему ф -ции
     * регистрация события происходит в момент инициализации vue компонента
     * */
    export default {

        props:['price'],

        data(){
            return {
                name: 'Toyota',
                description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                newPrice: 1500000,
            }
        },
        methods:{
            setPrice(){
                this.$emit('setPrice',this.newPrice) // вызов события setPrice
            },
        }
    }
</script>

<style>
    .car_name{
        border-bottom: 1px solid green;
    }

    .price{
        font-weight: 600;
        color:red;
    }
</style>