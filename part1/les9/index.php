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

<body>
<div class="container" >
    <div class="row" id="app">
        <global-counter></global-counter>
        <global-counter></global-counter>
        <global-counter></global-counter>
    </div>
    <hr>
    <div class="row"  id="app2">
        <local-counter></local-counter>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script>

    /** Локальная и Глобальная рег компонента
     *
     * Инициализация компонента
     * 1 название
     * 2 config
     * Глобальная регистрация компонента  <my-counter></my-counter> можно исп в любых Vue инстансах
     * */
    Vue.component('global-counter',{

        /** data долж быть ф - цией return object*/
        data: function(){
            return {
                cnt:0,
            };
        },

        methods:{
            add(){ this.cnt++ }
        },

        template:`<div class="col-md-4">
                    <h3>Counter global: {{ cnt }}</h3>
                    <button @click="add">Add </button>
                </div>`,

    });

    new Vue({
        el: '#app',
    });


    const localCounter = {

        /** data долж быть ф - цией return object*/
        data: function(){
            return {
                cnt:0,
            };
        },

        methods:{
            add(){ this.cnt++ }
        },

        template:`<div class="col-md-4">
                    <h3>Counter local: {{ cnt }}</h3>
                    <button @click="add">Add</button>
                </div>`,

    };

    new Vue({
        el: '#app2',
        components:{ // Регистрация дочерних компонентов
            'local-counter':localCounter
        }
    })
</script>

</html>