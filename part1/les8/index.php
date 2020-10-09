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
            <h3>{{title}}</h3>
            <button @click="update">Update</button>
            <button @click="del">Delete</button>
        </div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script>

    /**
     * Жизненный цикл
     * */
    new Vue({

        el: '#app',
        data:{
            title: 'Vue App!'
        },

        methods:{
            update(){
                this.title = "Update Vue App!";
            },
            del(){
                this.$destroy(); // Удаление через системный метод
            }
        },

        beforeCreate(){
            console.log('1. beforeCreate');
            /** Объект vue готовится к созданию */
        },

        created(){
            console.log('2. Created');
            /** Объект vue создан - html шаблона еще нет */
        },

        beforeMount(){
            console.log('3. BeforeMount');
            /** Подготовка к созданию html шаблона анализ переданного шаблона*/
        },

        mounted(){
            console.log('4. Mounted');
            /** Шаблон скомпелирован и вставлен в DOM*/
        },

        /** --- update --- **/

        beforeUpdate(){
            console.log('1. BeforeUpdate');
            /** Подготовка изменений */
        },

        updated(){
            console.log('2. Updated');
            /** изменения вставлены */
        },

        /** --- delete ---**/

        beforeDestroy(){
            console.log('1. BeforeDestroy');
            /** подготовка к удалению объекта Vue */
        },

        destroyed(){
            console.log('2. Destroy');
            /** объект Vue удален */
        },
    });

</script>

</html>