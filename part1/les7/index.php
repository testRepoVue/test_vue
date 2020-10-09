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
<div class="container">
    <div class="row">
      <div class="col-md-6" id="app">

            <h2 ref="heading">{{title}}</h2>
          <hr ref="line">

          <button @click="update">update</button>
      </div>
      <div class="col-md-6" id="app2"></div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script>

    /** Ref и инициализация компонента через $mount
    * ref дает нам ссылку на нативный DOM
    * коллекция объектов
    * */
    new Vue({

        el: '#app',

        data: {
            title:'App 1'
        },

        methods: {
            update(){
                console.log(this.$refs)
                this.$refs.heading.style.color = 'orange'
                this.$refs.line.style.borderColor = 'blue'
            }
        }
    });

    /**
     * Второй способ инициализации Vue компонента
     * template - шаблон
     * */

    const app2 = new Vue({
        data: {
            title:'App 2'
        },
        template: "<div><h2>{{ title }}</h2> " +
                    "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. " +
                    "Accusantium at, autem, consequuntur corporis dignissimos eligendi enim exercitationem " +
                    "officia officiis praesentium quas, ratione recusandae repellat saepe sed temporibus velit voluptate voluptatum!</p>" +
                   "</div>",
    });

    app2.$mount('#app2')
</script>

</html>