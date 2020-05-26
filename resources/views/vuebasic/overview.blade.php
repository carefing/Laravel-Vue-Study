<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            /*font-family: 'Raleway', sans-serif;*/
            /*font-weight: 100;*/
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            /*align-items: center;*/
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            /*text-align: center;*/
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .line-small {
            width: 100%;
            height: 1px;
            margin-top: 20px;
            margin-bottom: 20px;
            border-top: solid #ACC0D8 1px;
        }
    </style>
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
<script src="js/vuebasic/overview.js"></script>
</html>
