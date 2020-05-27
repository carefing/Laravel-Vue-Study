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
    <div id="vuebasic" class="content">
        <h1>Vue in Laravel Examples</h1>
        <div class="line-small"></div>
        <h2>Two-way binding (v-model directive)</h2>
        <div class="row">UI Element: </div>
        {{-- using two-way binding directive: v-model --}}
        <input type="text" class="form-control" v-model="textinput">
        <p>&nbsp;</p>
        <div class="row">Vue Instance Data Element: </div>
        <div class="row">@{{ textinput }}</div>
        <p>&nbsp;</p>

        <div class="line-small"></div>
        <h2>Array and events</h2>
        <div class="row">UI List Element: </div>
        <ul>
            {{--<li v-for="library in libraries" v-text="library"></li>--}}
            <li v-for="library in libraries">@{{ library }}</li>
        </ul>
        <p>&nbsp;</p>
        <input type="text" class="form-control" placeholder="Type the library name here" v-model="newlibrary">
        <div>
        <button class="btn" v-on:click="addLibrary">Click to add library</button>
        <button class="btn" v-on:click="deleteLibrary">Click to delete all libraries</button>
        </div>
        <p>&nbsp;</p>

        <div class="line-small"></div>
        <h2>Filter and order</h2>
        <div class="row">UI List Element: </div>
        <input type="text" class="form-control" v-model="filterkey">
        <table class="table">
            <thead>
            <tr>
                <th><a href="#" v-on:click="sortvia('id')">id</a></th>
                <th><a href="#" v-on:click="sortvia('framework')">framework</a></th>
            </tr>
            </thead>
            <tbody>
             {{--vue 2.0 弃用 filterBy & orderBy --}}
            {{--<tr v-for="framework in frameworks | filterBy filterkey | orderBy sortparam order">--}}
            {{--<tr v-for="framework in searchFrameworks">--}}
            <tr v-for="framework in orderFrameworks">
                <td>@{{ framework.id }}</td>
                <td>@{{ framework.framework }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
@include('vuebasic.css.vuebasic_css')
<script src="js/vuebasic/overview.js"></script>
</html>
