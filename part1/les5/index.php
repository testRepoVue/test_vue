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
        <div class="col-md-3" style="margin-top: 50px">
            <ul>
                <li v-for="(car, index) in cars">{{index+1}}: {{car}}</li>
            </ul>
        </div>
        <div class="col-md-3" style="margin-top: 50px">
            <ul>
                <li v-for="(person, key) of people">{{key}} - name: {{person.name}} age: {{person.age}}</li>
            </ul>
        </div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script>
/**
 * v-for
 * in == of
 * */

    new Vue({

        el: '#app',

        data: {

          cars:['Mercedes', 'Toyota', 'BMW', 'Mazda', 'Honda'],

          people:{
             user1: {name:'Jim', age:25},
             user2:{name:'John', age:30},
             user3: {name:'Julia', age:20},
          }
        },

        methods: {

        }
    })
</script>

</html>