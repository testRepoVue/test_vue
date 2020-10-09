<template>
    <div class="row">
        <div class="col-md-12">
            <h3 class="paint">{{cnt}}</h3>
        </div>
    </div>
</template>

<script>
    import {eventEmitter} from "./index.js";

    export default {

        data(){
            return {
                cnt:0
            }
        },
        created(){
            /**
            * Регистрация события в шине (передаем название и функцию)
            * т.к функция объявлена в нутри компонента Counter он будет являтся ее контекстом this == Counter
            * **/
            eventEmitter.$on('counterUpdate',(n)=>{
                this.cnt+=n;
            })
        },
        methods:{

        }
    }
</script>

<style scoped >
    .paint{
        color:blue;
    }
</style>