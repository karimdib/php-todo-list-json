<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>
<body>

    <div id="app">
        <section>
            <form action="" method="post">
                <input type="text" v-model="inputText"  >
            </form>
            <ul>
                <span>
                    <input type="submit" value="Invia" @click="putData">
                </span>
                <li v-for=" (todo, i) in todos">{{todo.text}}</li>
                
            </ul>
        </section>
    </div>

<script src="./js/app.js"></script>
</body>
</html>