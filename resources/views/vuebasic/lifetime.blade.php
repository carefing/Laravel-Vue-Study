<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vue Lifetime</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
<div class="flex-center position-ref full-height">
    <div id="lifetime" class="content">
        <h2>See Vue lifetime in console log</h2>
        <div class="line-small"></div>
        <div class="row">UI Element: </div>
        {{-- using two-way binding directive: v-model --}}
        <input type="text" class="form-control" v-model="info">
        <p>&nbsp;</p>
        <div class="row">Vue Instance Data Element: </div>
        <div class="row">@{{ info }}</div>
        <p>&nbsp;</p>
        <div class="row">Computed (Reversed Data): </div>
        <div class="row">@{{ reversedInfo }}</div>
        <p>&nbsp;</p>
        <div class="row">Computed (Split Data): </div>
        <div class="row">@{{ splitInfo }}</div>
        <p>&nbsp;</p>
        <div class="row">Watch: </div>
        <div>
            Ask a yes/no question:
            <input v-model="question">
        </div>
        <div>@{{ answer }}</div>
        <p>&nbsp;</p>
    </div>
</div>
</body>
@include('vuebasic.css.vuebasic_css')
<script src="https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
<script src="../js/vuebasic/lifetime.js"></script>
</html>
