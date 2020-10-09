<template>
    <div class="row">
        <div class="col-md-12">
            <slot name="head"></slot>
            <hr>
            <slot name="description"></slot>
        </div>
    </div>
</template>

<script>
    /**
     * slot вывод переданного html
     * */
    export default {


        data(){
            return {

            }
        },
        methods:{

        }
    }
</script>

<style>

</style>