<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ﻣﺪﻳﻮﻧﺔ  - @yield('title')</title>
    <link rel="icon"  href="images/med.jpg">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    @yield('styles')
    @yield('scripts')

</head>

<body>
    @yield("progress")

    <div id='core-container' style='display:none'>
        <a style='background-color:#e82e96' id="top-link" class="btn-floating btn-large waves-effect waves-light pulse tooltipped" data-position="top" data-tooltip="ﻋﻮﺩﺓ ﺇﻟﻰ اﻟﻔﻮﻕ">
            <i class="material-icons">arrow_upward</i>
        </a>
        <div class="container" id='shit' style="width:80%;">

                @include("includes.header")

                @include("includes.latest-news")
                
                @yield('content')

                @include('includes.footer')  
        </div>
    </div>

    {{ Html::script('js/navbar.js') }}
    @yield('custom-script')
      
    </body>
</html>