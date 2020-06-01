<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vuetify Example</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.3.45/css/materialdesignicons.min.css">

</head>
<body>
<div class="flex-center position-ref full-height">
    <div id="vuetifysample" class="content">
        <v-app>
            <v-navigation-drawer app>
                <v-list>
                    <v-list-item
                            v-for="item in items"
                            :key="item.title"
                            link
                    >
                        <v-list-item-icon>
                            <v-icon>@{{ item.icon }}</v-icon>
                        </v-list-item-icon>

                        <v-list-item-content>
                            <v-list-item-title>@{{ item.title }}</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-list>
            </v-navigation-drawer>

            <v-app-bar app>
                <v-avatar color="indigo">
                    <span class="white--text headline">ZY</span>
                </v-avatar>
            </v-app-bar>

            <!-- Sizes your content based upon application components -->
            <v-content>

                <!-- Provides the application the proper gutter -->
                <v-container fluid>

                    <!-- If using vue-router -->
                    {{--<router-view></router-view>--}}
                    <div>Vuetify Content</div>
                </v-container>
            </v-content>

            <v-footer app>
                <!-- -->
            </v-footer>
        </v-app>


        {{--<v-app>--}}
            {{--<v-navigation-drawer fixed app v-model="drawer">--}}
                {{--<v-list dense>--}}
                    {{--<v-list-tile @click="switchPage('phone')">--}}
                    {{--<v-list-tile-action>--}}
                        {{--<v-icon>phone</v-icon>--}}
                    {{--</v-list-tile-action>--}}
                    {{--<v-list-tile-content>--}}
                        {{--<v-list-tile-title>手机大全</v-list-tile-title>--}}
                    {{--</v-list-tile-content>--}}
                    {{--</v-list-tile>--}}
                    {{--<v-list-tile @click="switchPage('watch')">--}}
                    {{--<v-list-tile-action>--}}
                        {{--<v-icon>watch</v-icon>--}}
                    {{--</v-list-tile-action>--}}
                    {{--<v-list-tile-content>--}}
                        {{--<v-list-tile-title>手表大全</v-list-tile-title>--}}
                    {{--</v-list-tile-content>--}}
                    {{--</v-list-tile>--}}
                {{--</v-list>--}}
            {{--</v-navigation-drawer>--}}
            {{--<v-toolbar fixed app color="primary" dark>--}}
                {{--<v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>--}}
                {{--<v-toolbar-title>Vuetify实例</v-toolbar-title>--}}
            {{--</v-toolbar>--}}
            {{--<v-content>--}}
                {{--<v-container fluid>--}}
                    {{--<v-btn primary>@{{ page }}</v-btn>--}}
                {{--</v-container>--}}
            {{--</v-content>--}}
        {{--</v-app>--}}
    </div>
</div>
</body>
@include('vuebasic.css.vuebasic_css')
<script src="../js/vue-i18n-locales.generated.js"></script>
<script src="../js/vuebasic/vuetify.js"></script>
</html>
