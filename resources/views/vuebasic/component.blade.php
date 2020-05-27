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
    <div id="componentsample" class="content">
        <alert-component classtype="alert alert-info" bold="Greetings. " msg="This is some information."></alert-component>
        <alert-component classtype="alert alert-warning" bold="Slow down. " msg="You might crash."></alert-component>
        <alert-component classtype="alert alert-danger" bold="Oh no! " msg="The program just crashed!"></alert-component>
        <alert-component classtype="alert alert-success" bold="Rock Out " msg="with your Props out!"></alert-component>
    </div>
</div>
</body>
@include('vuebasic.css.vuebasic_css')
<script src="../js/vuebasic/component.js"></script>
</html>
