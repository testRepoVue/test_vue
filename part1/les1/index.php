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

                <input type="text" v-on:input="changeMyName">
              <!--  <input type="text" @input="changeMyName"> -->

                <h2>My Name: {{ myName }}</h2>
                <h2>Sum: {{ num + 20 }}</h2>
                <h2>Function say: {{ (flag) ? sayHellow() : sayBay() }}</h2>

            </div>
            <div class="col-md-6" style="margin-top: 50px">

                <h2><a v-bind:href="url" >Google.com</a></h2>
                <h2><a :href="url" >Google.com</a></h2>
                <h2 v-html="myHtml"></h2>

            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script>

    /**
     * Общая шаблонизация, событие, дерективы
     * */
/*
* el селектор элемента
* data - объект с данными (контентом)
* v-on:input="changeMyName" - прослушка события input на поле ввода, вызывает метод changeMyName
* фигурные скобки компилируют простые js выражения
*
*
* v-bind:атрибут - атрибуты добавляются через дерекивы ( без {{ }} )
* :атрибут == v-bind:атрибут дерективы
*
* v-html добавляет html работает как InnderHTML
* */
    new Vue({

        el: '#app',

        data: {

            myName:'Vue!',

            num: 10,

            flag: 1,

            url: 'https://google.com',

            myHtml: "<a href='https://yandex.ru'>Yandex.ru</a>",


        },

        methods: {
            changeMyName: function(e){
                   this.myName = e.target.value
            },

            sayHellow(){
                return 'Hellow Everybody'
            },

            sayBay(){
                return 'See you later'
            }
        }
    })
</script>

</html>