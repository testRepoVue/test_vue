<template>
    <div class="row">
        <div class="col-md-12">
            <h2 class="car_name">
                Name: {{name}}
            </h2>
            <p>{{description}}</p>
            <p> <span  class="o-price">{{price}}</span> <span class="n-price">{{newPrice}}</span></p>
        </div>
    </div>
</template>

<script>
    /**
     * Передача параметров через props в дочерние узлы
     * */
    export default {

        props:{
            price: {
                type: Number,
                required: true,
            },
            sale: Number
        },

        computed:{
            newPrice(){
                return this.price - ( this.price * (this.sale/100) );
            }
        },

        data(){
            return {
                name: 'Toyota',
                description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
            }
        }
    }
</script>

<style>
    .car_name{
        border-bottom: 1px solid green;
    }
    .o-price{
        text-decoration: line-through;
    }
    .n-price{
        font-weight: 600;
        color:red;
    }
</style>