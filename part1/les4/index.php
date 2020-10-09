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

            <h2 v-if="cnt < 2"> Счетчик меньше 2 </h2>
            <h2 v-else-if="(cnt >= 2 && cnt < 5)" >Счетчик от 2 до 5</h2>
            <h2 v-else > Счетчик 5 и более </h2>

        </div>
        <div class="col-md-2" style="margin-top: 50px">

            <button @click="add">Add</button>
            <button @click="show">Show</button>

        </div>
        <div class="col-md-4" style="margin-top: 50px">
            <h2 v-show="vis">Header show</h2>
            <h2 v-show="!vis">New Header show</h2>
        </div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script>
    /**
     * v-if v-else
     * v-show
     * */

    new Vue({

        el: '#app',

        data: {
            cnt: 0,
            vis: true,
        },


        methods: {
            add: function(){
                this.cnt++;
                console.log(this.cnt)
            },
            show(){
               this.vis = !this.vis;
            }
        }
    })
</script>

</html>