<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Demo</title>
        <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">

    </head>
    <body>
        <div id="app">
             <router-view></router-view>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>