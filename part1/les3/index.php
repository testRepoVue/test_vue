<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<style>
    .cricle{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 10px;
        border: 1px solid black;
        display: inline-block;
    }
    .red{
        background-color: red;
    }
    .blue{
        background-color: blue;
    }
</style>

<body>
<div class="container" id="app">
    <div class="row">
        <div class="col-md-6" style="margin-top: 50px">
            <input type="text" v-model="text">
            <h3>{{ text }}</h3>
        </div>
        <div class="col-md-6" style="margin-top: 50px">

            <div class="cricle"
                 :class="{ red: isActive, blue: !isActive}"
                 @click = "paint"
            ></div>
<!--
            <div class="cricle"
                 :class="setClass"
                 @click = "paint"
            ></div>
-->
            <div class="cricle"
                 :class="color"
            ></div>

            <div>
                <input type="text" v-model="color"></input>
            </div>
        </div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script>

    /**
     * v-model двустроннее связывание
     * байндинг атрибута class - class(ключ), значение true/false (show/hide)
     * computed getters
     *
     * мы также можем забайндить атрибут style и менять inline стили
     * */

    new Vue({

        el: '#app',

        data: {
            text: 'write something',
            isActive: true,
            color:''
        },

        computed:{
             setClass(){
                 return {
                     red: !this.isActive,
                     blue: this.isActive
                 }
             }
        },

        methods: {

            paint() {
                this.isActive = !this.isActive;
            },

        }
    })
</script>

</html>