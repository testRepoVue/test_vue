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
<div class="container" id="app">
    <div class="row">
        <div class="col-md-6" style="margin-top: 50px">

            <h2>{{ header }}</h2>
            <h2>{{ cnt }}</h2>
            <button @click = "add(5, 'Header Counter update', $event)" >Add + 5 </button>

        </div>

        <div class="col-md-6" style="margin-top: 50px">

            <h2><a href="http://google.com" target="_blank"  v-on:click.prevent="alert('google')" >Google.com</a></h2>
            <input type="text" v-on:keyup.enter.space="show">
        </div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script>
/**
 * Передача параметров строк и чисел
 * $event зарезервированная переменная под объект события
 * модификаторы prevent ( отс стандартное поведение )
 * */

    new Vue({

        el: '#app',

        data: {
            header:'Counter',
            cnt:0,
        },

        methods: {
            add(n, str, e){

                this.cnt+= n;
                this.header = str;

                if(this.cnt > 10){
                    e.target.style.background = 'blue';
                    e.target.style.color = 'white';
                }
            },

            show (e){ //модификаторы
                alert(e.target.value)
            }
        }
    })
</script>

</html>