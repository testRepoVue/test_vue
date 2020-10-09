<template>
    <div class="container">

        <button class="btn btn-primary" @click="getGar" style="margin: 20px 0px">Server</button>

        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li v-for="car in cars">{{car}}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
/**
 * работа с сервером через VueResourse
 * см index.js
 * */
    export default {

        data(){
            return {
                cars:[],
            }
        },
        methods:{
            getGar(){

                let formData = new FormData();
                formData.append('id', 2);

                this.$http.post('http://localhost',formData)
                    .then(response => {
                        console.log(response)
                        return response.json()
                    })
                    .then((result)=>{
                        this.cars = result;
                    })
            }
        }

    }
</script>

<style>

</style>