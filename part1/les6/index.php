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
        <div class="col-md-4" style="margin-top: 50px">
            <h3>{{ cond }}</h3>
            <h5>Counter: {{ cnt }}</h5>
            <button @click="add">Add</button>
            <button @click="sub">Sub</button>
        </div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script>
/**
 * computed
 * watch
 * */
    new Vue({

        el: '#app',

        data: {
            cnt:0
        },

        computed:{
            cond(){
                return (this.cnt < 3) ? 'Counter less 3' : 'Counter more 3';
            }
        },

        watch:{
            // Название методов долж совпадать с перменными
            cnt(val){
                console.log(val) // Вызывается каждый раз при изменении переменной cnt
            }
        },

        methods: {

            sub(){ this.cnt-- },
            add(){ this.cnt++ },
        }
    })
</script>

</html>