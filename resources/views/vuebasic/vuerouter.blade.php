<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
<div class="flex-center position-ref full-height">
    <div id="routersample" class="content">
        <button v-on:click="changeLocale()">Change Language</button>
        <header>
            <router-link to="/home">Home</router-link>
            <router-link to="/about">About</router-link>
        </header>
        <router-view></router-view>
    </div>
</div>
</body>
@include('vuebasic.css.vuebasic_css')
<script src="../js/vue-i18n-locales.generated.js"></script>
<script src="../js/vuebasic/vuerouter.js"></script>
</html>
