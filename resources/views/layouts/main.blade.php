<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>مديونة  - @yield('title')</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        {{ Html::style('css/style.css')}}
        {{ Html::style('css/materialize.min.css')}}
        {{ Html::script('js/app.js')}}
        {{ Html::script('js/materialize.min.js')}}   
        {{ Html::script('js/jquery.webticker.min.js')}}     
    </head>
    <body>
        <div class="container">
            @section('container')
                <header id="header">
                    <div class="row">
                        <div class="col s6 m6 l6"><img src="images/med.jpg" alt=""></div>
                        <div class="col s6 m6 l6" style='padding-top: 10%; padding-left: 13%;'>
                            <img src="images/addbanner_728x90_V1.jpg" alt=""></div>
                        </div>
                </header>

                @foreach($dropdowns as $id => $dropdown)
                    <ul id={{$id}} class="dropdown-content black">
                    @foreach ($dropdown as $name)
                        <li><a class="navbar-elt" href="#!">{{$name}}</a></li>
                    @endforeach
                </ul>
                @endforeach

                <nav style='padding-left: 15px' class='black'>
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo" style="padding-left: 10px; background-color: #ea534f">
                            <i class="fas fa-home fa-lg"></i>
                        </a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down" style="display: flex; flex-direction: row-reverse;">
                            @php ($class_tag = "navbar-elt")
                            @if ($active === 'الرئيسية ')
                                @php ($class_tag .= " active-elt")
                            @endif
                            <li class="{{$class_tag}}"><a href="#">الرئيسية </a></li>
                             @php ($class_tag = "navbar-elt dropdown-trigger")
                             @foreach ($navs as $id => $name)
                                @if ($active === $name)
                                    @php ($class_tag .= " active-elt")
                                @endif
                                <li>
                                    <a class="{{$class_tag}}" href="#!" data-target={{$id}}>{{$name}}</a>
                                </li>
                             @endforeach
                        </ul>
                    </div>
                </nav>
                 <div style='margin-top: 2%; margin-left: inherit;' class='row z-depth-1'>
                    <div class='col s2' style= "padding:0; ">
                        <a class="waves-effect waves-light btn" style='width: 100%; height: 43px;
                            font-size: 20px; background-color:#0a5d45; font-weight: 500; padding-top: 4px;'>
                            <i class="fas fa-newspaper"></i>
                            آخر الأخبار
                        </a>
                        <!--a href="#" class="white-text" style="background-color: #185a10; font-size: 21px;
                         padding: 10px;">
                            <i class="fas fa-newspaper"></i>
                            آخر الأخبار
                        </a-->
                    </div>
                    <div class='col s10' style= "padding-top: 10px;">
                        <ul id="webTicker" >
                            <li class='ticker-elt'>
                                <a  href="#">
                                    <span class='red-text' style='font-size:18px; padding-left: 10px'>12-12-2019</span>
                                    <span class='black-text' style='font-size:18px; padding-left: 10px'>اﻟﻤﺸﺎﺭﻳﻊ اﻟﺘﻨﻤﻮﻳﺔ'</span>
                                </a>
                            </li>
                            <li class='ticker-elt'>
                                <a class='white-text' href="#">
                                    <span class='red-text' style='font-size:18px; padding-left: 10px'>12-12-2019</span>
                                    <span class='black-text' style='font-size:18px; padding-left: 10px'>اﻟﻤﺸﺎﺭﻳﻊ اﻟﺘﻨﻤﻮﻳﺔ'</span>
                                </a>
                            </li>
                            <li class='ticker-elt'>
                                <a class='white-text' href="#">
                                   <span class='red-text' style='font-size:18px; padding-left: 10px'>12-12-2019</span>
                                    <span class='black-text' style='font-size:18px; padding-left: 10px'>اﻟﻤﺸﺎﺭﻳﻊ اﻟﺘﻨﻤﻮﻳﺔ'</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            @show
        </div>
        {{ Html::script('js/script.js')}}     
    </body>
        
</html>