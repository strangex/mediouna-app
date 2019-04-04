<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ﻣﺪﻳﻮﻧﺔ  - @yield('title')</title>
    <link rel="icon"  href="images/med.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    {{ Html::style('css/style.css') }}
    {{ Html::style('css/materialize.min.css') }}
    {{ Html::style('css/jquery.mCustomScrollbar.css') }}
    {{ Html::style('css/rvslider.min.css') }}
    {{ Html::style('css/calendar.css') }}
    {{ Html::style('css/lightslider.css') }}
    <!--scripts-->
    {{ Html::script('js/app.js')}}
    {{ Html::script('js/materialize.min.js') }}   
    {{ Html::script('js/jquery.dotdotdot.min.js') }}
    {{ Html::script('js/jquery.easy-ticker.min.js') }}
    {{ Html::script('js/rvslider.min.js') }}
    {{ Html::script('js/calendar.js') }}
    {{ Html::script('js/lightslider.js') }}
</head>
<body>
    <div id='progress-bar'>
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
        </div>
    </div>
    <div id='core-container' style='display:none'>
        <a style='background-color:#e82e96' id="top-link" class="btn-floating btn-large waves-effect waves-light pulse tooltipped" data-position="top" data-tooltip="ﻋﻮﺩﺓ ﺇﻟﻰ اﻟﻔﻮﻕ">
            <i class="material-icons">arrow_upward</i>
        </a>
        <div class="container" id='shit' style="width:80%;">
            @section('container')
                <header id="header">
                    <div class="row">
                        <div class="col s6 m6 l6"><img src="images/med.jpg" alt=""></div>
                        <div class="col s6 m6 l6" style='padding-top: 10%; padding-left: 13%;'>
                            <img src="images/addbanner_728x90_V1.jpg" alt="">
                            <div style='padding-top: 9%; padding-left: 44%;'>
                                <a style='margin-right: 1%' class="btn-floating btn waves-effect waves-light blue">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a style='background-color:#e82e96;  margin-right: 1%' class="btn-floating btn waves-effect waves-light">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a style='background-color:#e82e2e;  margin-right: 1%' class="btn-floating btn waves-effect waves-light">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a style='background-color:#2e56e8;  margin-right: 1%' class="btn-floating btn waves-effect waves-light">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <!--Navbar-->
                @foreach($dropdowns as $id => $dropdown)
                <ul id={{$id}} class="dropdown-content black">
                    @foreach ($dropdown as $name)
                    <li><a class="navbar-elt" href="#!">{{$name}}</a></li>
                    @endforeach
                </ul>
                @endforeach
                <nav style='padding-left: 15px;' class='black'>
                    <div class="nav-wrapper">
                        <img src="images/d.jpeg" style='height:96%; float:left; padding-right: 1%;
                        padding-top: 3px' class="circle responsive-img"/>
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1" style="background-color: #ea534f; font-weight: 700;">ﻛﻠﻤﺔ اﻟﺮﺋﻴﺲ</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down" style="display: flex; flex-direction: row-reverse;">
                            @php ($class_tag = "navbar-elt")
                            @if ($active === 'اﻟﺮﺋﻴﺴﻴﺔ ')
                            @php ($class_tag .= " active-elt")
                            @endif
                            <li class="{{$class_tag}}"><a href="#">اﻟﺮﺋﻴﺴﻴﺔ </a></li>
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

                <!--President Word-->
                <div id="modal1" class="modal" style='max-height: 90%; width: 80%; height:100%;'>
                    <div style='margin:0; height:100%' class="card horizontal">
                        <div class="card-image">
                            <img style='height: 90%; height:100%' src="images/directeur.jpeg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content" style="direction: rtl;">
                               <h4>   اﻟﺴﻴﺪ ﺃﺑﻮ اﻟﻐﺎﻟﻲ ﺻﻼﺡ اﻟﺪﻳﻦ ﺭﺋﻴﺲ اﻟﻤﺠﻠﺲ اﻟﺠﻤﺎﻋﻲ ﻟﺠﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ </h4>
                                <br/>
                                <p>  ﺕاﻥ ﺗﻄﻮﺭ ﻭاﺗﺴﺎﻉ ﺣﺎﺟﻴﺎﺕ اﻟﻤﻮاﻃﻨﺎﺕ ﻭاﻟﻤﻮاﻃﻨﻴﻦ ﺑﺠﻤﺎﻋﺘﻨﺎ ﻣﺮﺗﺒﻂ ﺑﺘﻄﻮﺭ ﻭﺛﻴﺮﺓ ﺣﻴﺎﺗﻬﻢ، ﻭﻳﺤﺘﻢ ﻋﻠﻴﻨﺎ ﺫﻟﻚ ﻭﺑﺎﻟﻀﺮﻭﺭﺓ، ﺃﻥ ﻧﻜﻮﻥ ﻓﻲ ﻣﺴﺘﻮﻯ ﺗﻠﺒﻴﺔ ﻭاﻻﺳﺘﺠﺎﺑﺔ ﻟﻬﺬﻩ اﻟﺤﺎﺟﻴﺎﺕ، ﺑﻤﺎ ﻳﺘﻮﻓﺮ ﻟﺠﻤﺎﻋﺘﻨﺎ ﻣﻦ ﻣﻮاﺭﺩ ﻭﺇﻣﻜﺎﻧﺎﺕ، ﻭﺑﻤﺎ ﻳﺘﻴﺤﻪ ﻟﻨﺎ اﻟﻘﺎﻧﻮﻥ ﻣﻦ اﺧﺘﺼﺎﺻﺎﺕ.
                                </p><br/>
                                <p>
ﻭاﻥ ﺗﻠﺒﻴﺔ ﻫﺬﻩ اﻟﺤﺎﺟﻴﺎﺕ ﻳﺠﺐ ﺃﻥ ﻳﻜﻮﻥ ﺑﺨﺪﻣﺎﺕ ﻣﻼﺋﻤﺔ ﻟﻠﻌﺼﺮ ﻭﻟﺘﺤﺪﻳﺎﺕ اﻟﻘﺮﻥ اﻟﻮاﺣﺪ ﻭاﻟﻌﺸﺮﻳﻦ، ﻣﻤﺎ اﺳﺘﺪﻋﻰ ﻭاﺳﺘﻠﺰﻡ ﺗﻐﻴﻴﺮ ﻣﻨﻬﺠﻴﺔ ﻋﻤﻞ اﻟﺠﻤﺎﻋﺎﺕ، ﻭﻫﺬا ﻣﺎ ﺃﺳﺲ ﻟﻪ اﻟﻘﺎﻧﻮﻥ اﻟﺘﻨﻈﻴﻤﻲ اﻟﺠﺪﻳﺪ 113/14 اﻟﻤﺘﻌﻠﻖ ﺑﺎﻟﺠﻤﺎﻋﺎﺕ، ﺣﻴﺚ اﻧﺘﻘﻠﻨﺎ ﻟﻤﺮﺣﻠﺔ ﺟﺪﻳﺪﺓ، ﻣﻜﻨﺖ ﻣﻦ ﺗﻐﻴﻴﺮ ﺃﺳﺎﻟﻴﺐ اﻟﺘﻔﻜﻴﺮ ﻭاﻟﻤﻤﺎﺭﺳﺔ ﻣﻌﺎ، ﻓﻲ ﻛﻴﻔﻴﺔ اﻟﺘﺪﺑﻴﺮ، ﻭﻓﻲ ﻣﺴﺘﻮﻯ اﻟﺨﺪﻣﺎﺕ اﻟﻤﻘﺪﻣﺔ، ،ﺣﺘﻰ ﻧﺘﻤﻜﻦ ﻣﻦ ﺭﻓﻊ ﺗﺤﺪﻱ اﻟﺤﻜﺎﻣﺔ ﺑﺠﻤﺎﻋﺘﻨﺎ، ﻭاﻻﻧﺘﻘﺎﻝ ﺇﻟﻰ ﻣﺮﺣﻠﺔ ﻣﺆﺳﺴﺎﺗﻴﺔ اﺣﺘﺮاﻓﻴﺔ، ﺗﺪﻣﺞ ﺑﻴﻦ ﻣﺰاﻳﺎ اﻟﺘﺨﻄﻴﻂ ﻭ ﻓﻌﺎﻟﻴﺔ اﻟﺒﺮﻣﺠﺔ اﻟﻮاﻗﻌﻴﺔ.                                </p><br/>
                                  <p>
ﺇﻥ ﺯﻣﻦ اﻟﻮﻻﻳﺔ اﻻﻧﺘﺪاﺑﻴﺔ ﻟﻠﻤﺠﻠﺲ اﻟﺠﻤﺎﻋﻲ ﻭﻫﻲ ﺳﺖ ﺳﻨﻮاﺕ، ﻳﺠﺐ ﺃﻥ ﻳﻜﻮﻥ ﺯﻣﻨﺎ ﻟﻹﻧﺠﺎﺯ ﻭاﻟﺘﺤﻘﻴﻖ، ﻟﺒﺮاﻣﺞ ﻭﻣﺸﺎﺭﻳﻊ ﻭﺃﻧﺸﻄﺔ، ﺗﺄﺧﺬ ﺑﻌﻴﻦ اﻻﻋﺘﺒﺎﺭ اﻟﺤﺎﺟﻴﺎﺕ ﺫاﺕ اﻷﻭﻟﻮﻳﺔ ﻟﻠﺴﺎﻛﻨﺔ، ﺑﺄﻓﻖ ﻭﺭﺅﻳﺔ ﻋﻠﻤﻴﺔ ﻭاﺿﺤﺔ ﻟﻠﻤﺠﺎﻝ اﻟﺘﺮاﺑﻲ ﻛﺈﻃﺎﺭ ﻟﻠﻌﻴﺶ اﻟﻤﺸﺘﺮﻙ، ﻳﺆﻣﻦ ﺗﻨﻤﻴﺔ ﻣﺴﺘﺪاﻣﺔ ﻋﺎﺩﻟﺔ ﻭﻣﻨﺼﻔﺔ، ﻋﺒﺮ ﺗﺜﻤﻴﻦ اﻹﻣﻜﺎﻥ اﻟﺒﺸﺮﻱ ﻭاﻹﻣﻜﺎﻥ اﻟﺘﺮاﺑﻲ ﻭﺟﻌﻞ ﺟﻤﺎﻋﺘﻨﺎ ﻓﺎﻋﻼ ﺗﻨﻤﻮﻳﺎ.                                </p><br/>
                                  <p>
اﻥ ﻭﺛﻴﻘﺔ ﺑﺮﻧﺎﻣﺞ ﻋﻤﻞ اﻟﺠﻤﺎﻋﺔ، ﺗﺸﻜﻞ ﺗﺘﻮﻳﺠﺎ ﻟﻤﺴﺎﺭ ﻣﻦ اﻷﻧﺸﻄﺔ ﻭاﻟﻌﻤﻠﻴﺎﺕ اﻻﻋﺪاﺩﻳﺔ، ﻭاﻟﺘﻲ ﺷﻜﻠﺖ اﺳﺘﺠﺎﺑﺔ ﻟﻠﻤﻘﺘﻀﻴﺎﺕ اﻟﻘﺎﻧﻮﻧﻴﺔ اﻟﺠﺪﻳﺪﺓ اﻟﺘﻲ ﻳﺆﻃﺮﻫﺎ اﻟﻘﺎﻧﻮﻥ اﻟﺘﻨﻈﻴﻤﻲ 113/14 اﻟﻤﺘﻌﻠﻖ ﺑﺎﻟﺠﻤﺎﻋﺎﺕ ﻭﻛﺪا اﻟﻤﺮﺳﻮﻡ اﻟﺘﻄﺒﻴﻘﻲ اﻟﻤﺤﺪﺩ ﻟﻤﺴﻄﺮﺓ ﺇﻋﺪاﺩ ﺑﺮﻧﺎﻣﺞ ﻋﻤﻞ اﻟﺠﻤﺎﻋﺔ، ﻣﻦ ﺃﺟﻞ ﺭﻓﻊ ﺗﺤﺪﻱ اﻟﺘﻨﻤﻴﺔ اﻟﻤﺠﺎﻟﻴﺔ اﻟﻤﺴﺘﺪاﻣﺔ اﻟﻌﺎﺩﻟﺔ ﻭاﻟﻤﻨﺼﻔﺔ ﺑﺎﻟﺠﻤﺎﻋﺔ.                                </p><br/>
                                 
                                     <p>
ﻟﻘﺪ ﺗﻢ ﺗﺪﺷﻴﻦ ﻫﺬا اﻟﻤﺴﺎﺭ اﻹﻋﺪاﺩﻱ ﻟﺒﺮﻧﺎﻣﺞ ﻋﻤﻞ اﻟﺠﻤﺎﻋﺔ، ﺑﺎﻟﺘﺸﺎﻭﺭ اﻟﺪاﺧﻠﻲ ﻭاﺗﺨﺎﺫ ﻗﺮاﺭ ﺇﻋﺪاﺩ ﺑﺮﻧﺎﻣﺞ ﻋﻤﻞ اﻟﺠﻤﺎﻋﺔ، ﻣﺮﻭﺭا ﺑﺎﻹﻋﺪاﺩ اﻟﺘﻘﻨﻲ ﻟﻬﺪﻩ اﻟﻌﻤﻠﻴﺔ ﻭﺗﺸﻜﻴﻞ ﻓﺮﻳﻖ اﻟﻌﻤﻞ اﻟﺠﻤﺎﻋﻲ.                                    
                                </p><br/>
                                     <p>
ﻭﺑﻌﺪ ﺫﻟﻚ ﺗﻢ اﻻﻧﺘﻘﺎﻝ  اﻟﻰ ﻣﺮﺣﻠﺔ اﻟﺘﺸﺎﻭﺭ اﻟﻮاﺳﻊ ﻣﻊ ﺳﺎﻛﻨﺔ اﻟﺠﻤﺎﻋﺔ ﻭﺟﻤﻌﻴﺎﺕ اﻟﻤﺠﺘﻤﻊ اﻟﻤﺪﻧﻲ ﻭﻫﻴﺄﺓ اﻟﻤﺴﺎﻭاﺓ ﻭﺗﻜﺎﻓﺆ اﻟﻔﺮﺹ ﻭﻣﺨﺘﻠﻒ اﻟﻔﺎﻋﻠﻴﻦ اﻻﻗﺘﺼﺎﺩﻳﻴﻦ ﻭاﻻﺟﺘﻤﺎﻋﻴﻴﻦ ﺑﺎﻟﺠﻤﺎﻋﺔ، ﻟﺘﺸﺨﻴﺺ ﻣﺨﺘﻠﻒ اﻟﻤﺸﺎﻛﻞ ﻭﺗﺤﺪﻳﺪ اﻟﺤﺎﺟﻴﺎﺕ ﻭاﻗﺘﺮاﺡ اﻟﺤﻠﻮﻝ.                                </p><br/>
                                     <p>
اﻥ ﻣﺨﺘﻠﻒ ﻣﺮاﺣﻞ ﺇﻋﺪاﺩ ﺑﺮﻧﺎﻣﺞ ﻋﻤﻞ اﻟﺠﻤﺎﻋﺔ، ﺗﻤﺖ ﺑﺎﻟﺘﻌﺎﻭﻥ ﻣﻊ اﻟﻤﺼﺎﻟﺢ اﻟﻻﻣﻤﺮﻛﺰﺓ ﻭاﻟﺠﻤﺎﻋﺎﺕ اﻟﺘﺮاﺑﻴﺔ اﻷﺧﺮﻯ، ﺧﺎﺻﺔ ﻣﺠﻠﺲ اﻟﺠﻬﺔ ﻭﻣﺠﻠﺲ اﻹﻗﻠﻴﻢ، ﻣﻦ ﺃﺟﻞ ﺗﺤﻘﻴﻖ اﻻﻟﺘﻘﺎﺋﻴﺔ ﻭاﻻﻧﺴﺠﺎﻡ ﻓﻲ ﻣﺨﺘﻠﻒ اﻟﺘﺪﺧﻼﺕ ﺑﺨﺼﻮﺹ اﻟﻤﺸﺎﺭﻳﻊ اﻟﻤﺰﻣﻊ ﺇﻗﺎﻣﺘﻬﺎ ﺃﻭ ﺑﺮﻣﺠﺘﻬﺎ ﻓﻮﻕ ﺗﺮاﺏ اﻟﺠﻤﺎﻋﺔ، ﺑﺘﻨﺴﻴﻖ ﺗﺎﻡ ﻣﻊ ﻋﺎﻣﻞ اﻹﻗﻠﻴﻢ.                                </p><br/>
                                     <p>
ﻭﻓﻲ ﻧﻔﺲ اﻟﻮﻗﺖ اﻟﺬﻱ ﺣﺎﻓﻈﺖ ﻣﻨﻬﺠﻴﺔ ﺇﻋﺪاﺩ ﺑﺮﻧﺎﻣﺞ ﻋﻤﻞ اﻟﺠﻤﺎﻋﺔ ﻋﻠﻰ ﻣﺰاﻳﺎ اﻟﺘﺨﻄﻴﻂ، ﻓﺈﻧﻬﺎ ﻗﻄﻌﺖ ﻣﻊ ﺑﺮﻣﺠﺔ اﻟﻤﺸﺎﺭﻳﻊ ﻏﻴﺮ اﻟﻮاﻗﻌﻴﺔ، ﺩﻟﻚ ﺃﻥ اﻟﻤﺮﺳﻮﻡ اﻟﺘﻄﺒﻴﻘﻲ اﻟﻤﺤﺪﺩ ﻟﻤﺴﻄﺮﺓ ﺇﻋﺪاﺩ ﺑﺮﻧﺎﻣﺞ ﻋﻤﻞ اﻟﺠﻤﺎﻋﺔ ﻳﺆﻛﺪ ﻋﻠﻰ ﻭﺟﻮﺏ ﺃﻥ ﺗﻜﻮﻥ ﻣﺨﺘﻠﻒ اﻟﻤﺸﺎﺭﻳﻊ ﻭاﻷﻧﺸﻄﺔ اﻟﻤﺒﺮﻣﺠﺔ ﻗﺎﺑﻠﺔ ﻟﻹﻧﺠﺎﺯ ﻭاﻟﺘﺤﻘﻖ ﻭﻗﺎﺑﻠﺔ ﻟﻠﻘﻴﺎﺱ.                                </p><br/>
                                 <p>
ﻭﻓﻲ ﻫﺬا اﻹﻃﺎﺭ ﻓﺎﻥ ﻣﺠﻠﺲ اﻟﺠﻤﺎﻋﺔ، اﻟﺘﺰﻡ ﺑﻤﻘﺘﻀﻴﺎﺕ اﻟﻘﺎﻧﻮﻥ اﻟﺘﻨﻈﻴﻤﻲ اﻟﻤﺘﻌﻠﻖ ﺑﺎﻟﺠﻤﺎﻋﺎﺕ ﻭﻛﺬا اﻟﻤﺮﺳﻮﻡ اﻟﺘﻄﺒﻴﻘﻲ اﻟﻤﺘﻌﻠﻖ ﺑﺒﺮﻧﺎﻣﺞ ﻋﻤﻞ اﻟﺠﻤﺎﻋﺔ، ﻭﺫﻟﻚ ﺑﺒﺮﻣﺠﺔ ﻣﺸﺎﺭﻳﻊ ﻭﺃﻧﺸﻄﺔ ﺗﺴﺘﺠﻴﺐ ﻟﻷﻭﻟﻮﻳﺎﺕ اﻟﺘﻨﻤﻮﻳﺔ، ﻭاﻟﺘﻲ ﺃﺧﺪﺕ ﺑﻌﻴﻦ اﻻﻋﺘﺒﺎﺭ اﻗﺘﺮاﺣﺎﺕ اﻟﻤﻮاﻃﻨﺎﺕ ﻭاﻟﻤﻮاﻃﻨﻴﻦ ﺑﺎﻟﺠﻤﺎﻋﺔ ﻣﻦ ﺟﻬﺔ، ﻛﻤﺎ ﺭاﻋﺖ ﻭﻓﻲ ﻧﻔﺲ اﻵﻥ اﻹﻣﻜﺎﻧﺎﺕ اﻟﻤﺎﺩﻳﺔ اﻟﻤﺘﻮﻓﺮﺓ ﺃﻭ اﻟﺘﻲ ﻳﻤﻜﻦ ﺗﻌﺒﺌﺘﻬﺎ ﻣﻦ ﻃﺮﻑ اﻟﺠﻤﺎﻋﺔ ﻣﻦ ﺟﻬﺔ ﺃﺧﺮﻯ.
                                </p><br/>
                                <p>
: ﻟﻘﺪ اﺳﺘﻬﺪﻑ ﺑﺮﻧﺎﻣﺞ ﻋﻤﻞ اﻟﺠﻤﺎﻋﺔ اﻟﻮﺻﻮﻝ اﻟﻰ ﺗﺤﻘﻴﻖ ﺟﻤﺎﻋﺔ ﻋﺼﺮﻳﺔ ﻣﺴﺘﺠﻴﺒﺔ ﻟﻤﺘﻄﻠﺒﺎﺕ اﻟﺘﻨﻤﻴﺔ اﻟﻤﺴﺘﺪاﻣﺔ
ﺣﺘﻰ ﺗﺼﻴﺮ ﺟﻤﺎﻋﺘﻨﺎ ﻣﺠﺎﻻ ﻟﻠﻌﻴﺶ اﻟﻤﺸﺘﺮﻙ، ﻳﺘﻴﺢ ﻟﺴﺎﻛﻨﺘﻪ ﻭﻟﻮﺟﺎ ﺳﻠﺴﺎ ﻟﻠﺨﺪﻣﺎﺕ اﻷﺳﺎﺳﻴﺔ، ﻭﺇﻃﺎﺭا ﻣﺤﻔﺰا ﻋﻠﻰ اﻻﺳﺘﻘﺮاﺭ، ﻭﻳﺸﻜﻞ ﻣﺮﻛﺰ ﺟﺪﺏ اﻗﺘﺼﺎﺩﻱ، ﻋﺒﺮ ﺗﺜﻤﻴﻦ اﻹﻣﻜﺎﻥ اﻟﺒﺸﺮﻱ ﻭﺗﺜﻤﻴﻦ اﻹﻣﻜﺎﻥ اﻟﺘﺮاﺑﻲ، ﻭﺟﻌﻞ اﻟﺠﻤﺎﻋﺔ ﻓﺎﻋﻼ ﺗﻨﻤﻮﻳﺎ، ﻭﺣﺎﺿﻨﺎ ﻭﺩاﻋﻤﺎ ﻭﻣﺴﺘﻘﻄﺒﺎ ﻭﻣﻤﻜﻨﺎ ﻟﻤﺨﺘﻠﻒ اﻟﻔﺎﻋﻠﻴﻦ اﻻﻗﺘﺼﺎﺩﻳﻴﻦ ﻭاﻻﺟﺘﻤﺎﻋﻴﻴﻦ ﻭاﻟﻤﺪﻧﻴﻴﻦ ﺑﺘﺮاﺏ اﻟﺠﻤﺎﻋﺔ، ﻣﻦ ﺃﺟﻞ ﺗﺤﻘﻴﻖ ﺗﻨﻤﻴﺔ ﻣﺠﺎﻟﻴﺔ ﻣﺴﺘﺪاﻣﺔ ﻣﻨﺼﻔﺔ ﻭﻋﺎﺩﻟﺔ
                                </p><br/>
                                
<p>
                                ﻛﻤﺎ اﺳﺘﻬﺪﻑ ﺑﺮﻧﺎﻣﺞ ﻋﻤﻞ ﺟﻤﺎﻋﺘﻨﺎ ﻋﺼﺮﻧﺔ ﻭﺗﺤﺪﻳﺚ ﺃﺩﻭاﺕ ﻭاﻟﻴﺎﺕ ﻋﻤﻞ اﻟﺠﻤﺎﻋﺔ، ﺑﺎﻟﻌﻤﻞ ﻋﻠﻰ ﺭﻗﻤﻨﺔ ﺟﻤﻴﻊ اﻟﻤﺼﺎﻟﺢ اﻟﺠﻤﺎﻋﻴﺔ، ﻭﺧﻠﻖ ﺑﻮاﺑﺔ اﻟﻴﻜﺘﺮﻭﻧﻴﺔ ﻟﻠﺠﻤﺎﻋﺔ، ﺣﺘﻰ ﺗﻜﻮﻥ ﺟﻤﺎﻋﺘﻨﺎ ﻣﻨﻔﺘﺤﺔ ﻋﻠﻰ ﻣﺤﻴﻄﻬﺎ اﻟﻤﺤﻠﻲ ﻭاﻹﻗﻠﻴﻤﻲ ﻭاﻟﺠﻬﻮﻱ ﻭاﻟﻮﻃﻨﻲ، ﻭﻟﺘﺼﺒﺢ ﻛﺬﻟﻚ ﺟﻤﺎﻋﺔ ﻣﻨﻔﺘﺤﺔ ﻋﻠﻰ اﻟﻌﺎﻟﻢ، ﺑﻤﺎ ﻳﻌﺰﺯ ﻓﺮﺻﻬﺎ ﻓﻲ ﺗﻨﻤﻴﺔ ﻭﺗﻌﺒﺌﺔ ﻣﺨﺘﻠﻒ ﺃﻧﻮاﻉ اﻟﺘﻌﺎﻭﻥ ﻭاﻟﺸﺮاﻛﺔ. 
                                </p><br/>

                            </div>
                        </div>
                    </div>
                </div>

                <!--Last news ticker-->
                <div style='margin-top: 2%; margin-left: inherit;' class='row hoverable z-depth-1' id='global-ticker'>
                    <div class="innerWrap" style='width: 100%;'>
                        <div class="row"  style="padding-top: 2px">
                            <div class='col s2' style='margin-left: -22px;'>
                                <a class="waves-effect waves-light btn" style='width: 100%; height: 43px;
                                font-size: 18px; background-color:#0a5d45; font-weight: 500; padding-top: 5px; padding-bottom: 3px; display: inline; padding-left: 25%; padding-right: 25%;'>
                                    <i class="fas fa-newspaper"></i>
                                    <span>ﺃﺣﺪاﺙ</span>
                                </a>
                            </div>
                            <div class='col s10' style=' padding-top: 4px; display: flex; flex-direction: row-reverse;'>
                                <span  class='red-text' style="font-size:18px; font-weight: 600;font-family: 'DroidArabicKufi', serif;">2019-12-12</span>
                                <span  class='black-text' style="font-family: 'DroidArabicKufi', serif; direction: rtl; font-size:18px; padding-right: 1%; font-weight: 600;">ﺃﺷﻐﺎﻝ ﺗﺒﻠﻴﻂ ﻭ ﺗﺮﺻﻴﻒ اﻷﺣﻴﺎء اﻟﻨﺎﻗﺼﺔ اﻟﺘﺠﻬﻴﺰ ﺑﺤﻲ اﻟﺮﺣﺎﻟﻲ ﺟﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ  </span>
                                <span  class='black-text truncate' style="font-size:18px; padding-right: 1%; width: 60%; font-family: 'DroidArabicKufi', serif;"> ...   </span>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 2px">
                            <div class='col s2' style='margin-left: -22px;'>
                                <a class="waves-effect waves-light btn" style='width: 100%; height: 43px;
                                font-size: 18px; background-color:#ea534f; font-weight: 500; padding-top: 5px; padding-bottom: 3px; display: inline; padding-left: 25%; padding-right: 25%;'>
                                <i class="fas fa-newspaper"></i>
                                <span>ﺃﺣﺪاﺙ</span>
                            </a>
                            </div>  
                            <div class='col s10' style=' padding-top: 4px; display: flex; flex-direction: row-reverse;'>
                                <span  class='red-text' style="font-size:18px; font-weight: 600; font-family: 'DroidArabicKufi', serif;">2019-12-12</span>
                                <span  class='black-text' style="font-family: 'DroidArabicKufi', serif; direction: rtl; font-size:18px; padding-right: 1%; font-weight: 600;">• ﺃﺷﻐﺎﻝ ﺗﻬﻴﺌﺔ ﻭ ﺇﺻﻼﺡ ﻣﻨﺸﺎﺕ اﻟﻤﺮاﺏ ﻭ اﻟﻤﺤﺠﺰ اﻟﺠﻤﺎﻋﻴﻴﻦ   ﺑﺠﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ     </span>
                                <span  class='black-text truncate' style="font-size:18px; padding-right: 1%; width: 60%; font-family: 'DroidArabicKufi', serif;">  ...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='row'>
                    <div class='col s7' style='padding-right: 0;'>
                        <!--Carousel-->
                        <div class='row carousel carousel-x carousel-slider' style='height: 400px'>
                            <div class="carousel-fixed-item right" style='top:0px; padding-left: 70%;'>
                                <a class="btn waves-effect" style="background-color:#ea534f; font-weight: 700; font-size:15px">ﺃﻧﺸﻄﺔ اﻟﻤﺠﻠﺲ</a>
                            </div>
                            <a class="carousel-item" href="#one!">
                                <h2>ﺃﺷﻐﺎﻝ ﺗﺒﻠﻴﻂ ﻭ ﺗﺮﺻﻴﻒ اﻷﺣﻴﺎء اﻟﻨﺎﻗﺼﺔ اﻟﺘﺠﻬﻴﺰ ﺑﺤﻲ اﻟﺮﺣﺎﻟﻲ ﺟﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ   </h2>
                                <p>ﺣﺘﻀﻨﺖ ﻣﻘﺎﻃﻌﺔ ﻣﺪﻳﻮﻧﺔ ﻳﻮﻡ اﻷﺭﺑﻌﺎء 27 ﻓﺒﺮاﻳﺮ 2019 ﺃﺷﻐﺎﻝ اﻟﻤﻠﺘﻘﻰ اﻟﺠﻬﻮﻱ اﻷﻭﻝ اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌ ﺔ</p>
                                <img style='height:420px' src="images/qods.jpg"/>
                            </a>
                            <a class="carousel-item" href="#one!">
                                <h2>ﺃﺷﻐﺎﻝ  ﺗﺒﻠﻴﻂ ﻭﺗﺮﺻﻴﻒ اﻷﺣﻴﺎء اﻟﻨﺎﻗﺼﺔ اﻟﺘﺠﻬﻴﺰ ﺑﺤﻲ اﻧﺰاﻟﺔ اﻟﺠﺎﻣﻊ ﺟﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ </h2>
                                                               <p>اﺣﺘﻀﻨﺖ ﻣﻘﺎﻃﻌﺔ  ﻣﺪﻳﻮﻧﺔ ﻳﻮﻡ اﻷﺭﺑﻌﺎء 27 ﻓﺒﺮاﻳﺮ 2019 ﺃﺷﻐﺎﻝ اﻟﻤﻠﺘﻘﻰ اﻟﺠﻬﻮﻱ اﻷﻭﻝ اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ.اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ</p>
                                <img style='height:420px' src="images/sania.jpg"/>
                            </a>
                            <a class="carousel-item" href="#two!">
                                <h2>  - ﺃﺷﻐﺎﻝ ﺗﺒﻠﻴﻂ ﻭﺗﺮﺻﻴﻒ اﻷﺣﻴﺎء اﻟﻨﺎﻗﺼﺔ اﻟﺘﺠﻬﻴﺰ ﺑﺤﻲ اﻧﺰاﻟﺔ اﻟﺠﺎﻣﻊ ﺟﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ  </h2>
                                                               <p>اﺣﺘﻀﻨﺖ ﻣﻘﺎﻃﻌﺔ  ﻣﺪﻳﻮﻧﺔ ﻳﻮﻡ اﻷﺭﺑﻌﺎء 27 ﻓﺒﺮاﻳﺮ 2019 ﺃﺷﻐﺎﻝ اﻟﻤﻠﺘﻘﻰ اﻟﺠﻬﻮﻱ اﻷﻭﻝ اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ.اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ</p>
                                <img style='height:420px' src="images/bloc.png"/>
                            </a>
                            <a class="carousel-item" href="#three!">
                                <h2>ﺃﺷﻐﺎﻝ ﺗﺒﻠﻴﻂ ﻭﺗﺮﺻﻴﻒ اﻷﺣﻴﺎء اﻟﻨﺎﻗﺼﺔ اﻟﺘﺠﻬﻴﺰ ﺑﺤﻲ اﻧﺰاﻟﺔ اﻟﺠﺎﻣﻊ ﺟﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ   </h2>
                                                               <p>اﺣﺘﻀﻨﺖ ﻣﻘﺎﻃﻌﺔ  ﻣﺪﻳﻮﻧﺔ ﻳﻮﻡ اﻷﺭﺑﻌﺎء 27 ﻓﺒﺮاﻳﺮ 2019 ﺃﺷﻐﺎﻝ اﻟﻤﻠﺘﻘﻰ اﻟﺠﻬﻮﻱ اﻷﻭﻝ اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ.اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ</p>
                                <img style='height:420px' src="images/tis2.jpg"/>
                            </a>
                            <a class="carousel-item" href="#four!">
                                <h2>  ﺗﻬﻴﺌﺔ اﻟﻄﺮﻳﻖ اﻟﻤﻮاﺯﻳﺔ ﻟﺸﺎﺭﻉ ﺃﺣﻤﺪ ﺑﻠﺤﺴﻦ ﺑﺠﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ </h2>
                                <p>اﺣﺘﻀﻨﺖ ﻣﻘﺎﻃﻌﺔ  ﻣﺪﻳﻮﻧﺔ ﻳﻮﻡ اﻷﺭﺑﻌﺎء 27 ﻓﺒﺮاﻳﺮ 2019 ﺃﺷﻐﺎﻝ اﻟﻤﻠﺘﻘﻰ اﻟﺠﻬﻮﻱ اﻷﻭﻝ اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ.اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ</p>
                                <img style='height:420px' src="images/tis1.jpg"/>
                            </a>
                        </div>
                        <!--Offers-->
                        <div class="row hoverable" style='width: 100%; margin-right: 0;' >
                            <div class='center' style="position: absolute; padding-left: 1%;">
                                <a class="btn waves-effect" style="background-color:#3997bb; width:230px; font-weight: 700; font-size:15px">ﻃﻠﺒﺎﺕ اﻟﻌﺮﻭﺽ</a>
                            </div>
                            <div id='offers-ticker' class="z-depth-1">
                                <div class="innerWrap" style='width: 100%; padding-left: 4%; padding-top: 7%; padding-right: 2%;'>
                                    <div>
                                        <img src="images/hay.jpg" style="height: 123px; width: 25%; float: right;"/>
                                        <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>ﻣﻦ اﺟﻞ اﻟﺴﻼﻣﺔ اﻟﻄﺮﻗﻴﺔ:  <span class='blue-txt'>(12-12-2019)</span></h5>
                                        <p>اﺣﺘﻀﻨﺖ ﻣﻘﺎﻃﻌﺔ  ﻣﺪﻳﻮﻧﺔ ﻳﻮﻡ اﻷﺭﺑﻌﺎء 27 ﻓﺒﺮاﻳﺮ 2019 ﺃﺷﻐﺎﻝ اﻟﻤﻠﺘﻘﻰ اﻟﺠﻬﻮﻱ اﻷﻭﻝ اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ.اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ</p>
                                    </div>
                                    <div class="divider"></div>
                                    <div style='padding-top: 2%;'>
                                        <img src="images/hay.jpg" style="height: 123px; width: 25%; float: right;"/>
                                        <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>ﻣﻦ اﺟﻞ اﻟﺴﻼﻣﺔ اﻟﻄﺮﻗﻴﺔ:  <span class='blue-txt'>(12-12-2019)</span></h5>
                                       <p>اﺣﺘﻀﻨﺖ ﻣﻘﺎﻃﻌﺔ  ﻣﺪﻳﻮﻧﺔ ﻳﻮﻡ اﻷﺭﺑﻌﺎء 27 ﻓﺒﺮاﻳﺮ 2019 ﺃﺷﻐﺎﻝ اﻟﻤﻠﺘﻘﻰ اﻟﺠﻬﻮﻱ اﻷﻭﻝ اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ.اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ</p>
                                    </div>
                                    <div class="divider"></div>
                                    <div style='padding-top: 2%;'>
                                        <img src="images/hay.jpg" style="height: 123px; width: 25%; float: right;"/>
                                        <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>ﻣﻦ اﺟﻞ اﻟﺴﻼﻣﺔ اﻟﻄﺮﻗﻴﺔ:  <span class='blue-txt'>(12-12-2019)</span></h5>
                                         <p>اﺣﺘﻀﻨﺖ ﻣﻘﺎﻃﻌﺔ  ﻣﺪﻳﻮﻧﺔ ﻳﻮﻡ اﻷﺭﺑﻌﺎء 27 ﻓﺒﺮاﻳﺮ 2019 ﺃﺷﻐﺎﻝ اﻟﻤﻠﺘﻘﻰ اﻟﺠﻬﻮﻱ اﻷﻭﻝ اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ.اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ</p>
                                    </div>
                                    <div class="divider"></div>
                                    <div style='padding-top: 2%;'>
                                        <img src="images/hay.jpg" style="height: 123px; width: 25%; float: right;"/>
                                        <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>ﻣﻦ اﺟﻞ اﻟﺴﻼﻣﺔ اﻟﻄﺮﻗﻴﺔ:  <span class='blue-txt'>(12-12-2019)</span></h5>
                                         <p>اﺣﺘﻀﻨﺖ ﻣﻘﺎﻃﻌﺔ  ﻣﺪﻳﻮﻧﺔ ﻳﻮﻡ اﻷﺭﺑﻌﺎء 27 ﻓﺒﺮاﻳﺮ 2019 ﺃﺷﻐﺎﻝ اﻟﻤﻠﺘﻘﻰ اﻟﺠﻬﻮﻱ اﻷﻭﻝ اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ.اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class='col s5' style='padding-right: 0; padding-left: 1%;'>
                         <!--Associations-->
                        <div class='row hoverable' style="margin-right: 0%;">
                            <div class='center' style="position: absolute; padding-left: 1%;">
                                <a class="btn waves-effect" style="background-color:#2c5ea9; width:230px; font-weight: 700; font-size:15px">ﺃﻧﺸﻄﺔ اﻟﺠﻤﻌﻴﺎﺕ</a>
                            </div>
                            <div id='association-ticker' class="z-depth-1 ticker">
                                <div class="innerWrap" style='width: 100%; padding-top: 10%; height: 100%'>
                                    <div class='row' style='display: flex; flex-direction: row-reverse; padding-top: 1%; height: 24%;'>
                                        <div class='col s4' style='padding-right: 0; padding-left: 0;'>
                                            <img src="images/association.jpg" style="height: 80px; width: 139px;"/>
                                        </div>
                                        <div class='col s8' style='padding-bottom: 3%; padding-right: 2%; padding-left: 0;'>
                                            <p  class='black-text' style='direction: rtl;'>اﻟﻤﻬﺮﺟﺎﻥ اﻷﻭﻝ ﻟﻘﺪﻣﺎء ﺗﻠﻤﻴﺬاﺕ ﻭﺗﻼﻣﻴﺬ اﻟﺜﺎﻧﻮﻳﺔ اﻹﻋﺪاﺩﻳﺔ اﻟﻤﺴﺘﻘﺒﻞ</p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class='row' style='display: flex; flex-direction: row-reverse; padding-top: 3%; height: 26%;'>
                                        <div class='col s4' style='padding-right: 0; padding-left: 0;'>
                                            <img src="images/association.jpg" style="height: 80px; width: 139px;"/>
                                        </div>
                                        <div class='col s8' style='padding-bottom: 3%; padding-right: 2%; padding-left: 0;'>
                                            <p  class='black-text' style='direction: rtl;'>اﻟﻤﻬﺮﺟﺎﻥ اﻷﻭﻝ ﻟﻘﺪﻣﺎء ﺗﻠﻤﻴﺬاﺕ ﻭﺗﻼﻣﻴﺬ اﻟﺜﺎﻧﻮﻳﺔ اﻹﻋﺪاﺩﻳﺔ اﻟﻤﺴﺘﻘﺒﻞ</p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class='row' style='display: flex; flex-direction: row-reverse; padding-top: 3%; height: 26%;'>
                                        <div class='col s4' style='padding-right: 0; padding-left: 0;'>
                                            <img src="images/association.jpg" style="height: 80px; width: 139px;"/>
                                        </div>
                                        <div class='col s8' style='padding-bottom: 3%; padding-right: 2%; padding-left: 0;'>
                                            <p  class='black-text' style='direction: rtl;'>اﻟﻤﻬﺮﺟﺎﻥ اﻷﻭﻝ ﻟﻘﺪﻣﺎء ﺗﻠﻤﻴﺬاﺕ ﻭﺗﻼﻣﻴﺬ اﻟﺜﺎﻧﻮﻳﺔ اﻹﻋﺪاﺩﻳﺔ اﻟﻤﺴﺘﻘﺒﻞ</p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class='row' style='display: flex; flex-direction: row-reverse; padding-top: 3%; height: 26%;'>
                                        <div class='col s4' style='padding-right: 0; padding-left: 0;'>
                                            <img src="images/association.jpg" style="height: 80px; width: 139px;"/>
                                        </div>
                                        <div class='col s8' style='padding-bottom: 3%; padding-right: 2%; padding-left: 0;'>
                                            <p  class='black-text' style='direction: rtl;'>اﻟﻤﻬﺮﺟﺎﻥ اﻷﻭﻝ ﻟﻘﺪﻣﺎء ﺗﻠﻤﻴﺬاﺕ ﻭﺗﻼﻣﻴﺬ اﻟﺜﺎﻧﻮﻳﺔ اﻹﻋﺪاﺩﻳﺔ اﻟﻤﺴﺘﻘﺒﻞ</p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                </div> 
                            </div>
                        </div>
                        <!--Agenda-->
                        <div class='row' style="width: 100%; padding-left: 2%">
                            <div class='z-depth-1 hoverable' style='padding: 5%;'>
                                <div class='row' style='display: flex; flex-direction: row-reverse;'>
                                    <div class='col s6' style="direction: rtl">
                                        <h5 style='font-weight: 600;'>ﺃﺟﻨﺪﺓ ﻣﺪﻳﻮﻧﺔ</h5>
                                    </div>
                                    <div class='col s6'>
                                        <a class="btn-floating btn-large waves-effect waves-light blue pulse tooltipped" data-position="top" data-tooltip="ﺗﺼﻔﺢ اﻷﺟﻨﺪﺓ">
                                            <i class="far fa-calendar fa-large"></i>
                                        </a>
                                    </div>   
                                </div>
                                <div class="collection" id='agenda-container' style='height: 300px'>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>01:00 1970 اﻟﺠﻤﻌﺔ 01 ﻳﻨﺎﻳﺮ</h6>
                                            <p class='agenda-desc'>2019 اﻟﺒﺮﻧﺎﻣﺞ اﻟﺘﻮﻗﻌﻲ ﻟﻠﺼﻔﻘﺎﺕ اﻟﻤﺰﻣﻊ ﺑﺮﻣﺠﺘﻬﺎ ﺑﺮﺳﻢ اﻟﺴﻨﺔ اﻟﻤﺎﻟﻴﺔ</p>
                                        </div>
                                    </li>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>01:00 1970 اﻟﺠﻤﻌﺔ 01 ﻳﻨﺎﻳﺮ</h6>
                                            <p class='agenda-desc'>2019 اﻟﺒﺮﻧﺎﻣﺞ اﻟﺘﻮﻗﻌﻲ ﻟﻠﺼﻔﻘﺎﺕ اﻟﻤﺰﻣﻊ ﺑﺮﻣﺠﺘﻬﺎ    ﺑﺮﺳﻢ اﻟﺴﻨﺔ اﻟﻤﺎﻟﻴﺔ</p>
                                        </div>
                                    </li>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>01:00 1970 اﻟﺠﻤﻌﺔ 01 ﻳﻨﺎﻳﺮ</h6>
                                            <p class='agenda-desc'>2019 اﻟﺒﺮﻧﺎﻣﺞ اﻟﺘﻮﻗﻌﻲ ﻟﻠﺼﻔﻘﺎﺕ اﻟﻤﺰﻣﻊ ﺑﺮﻣﺠﺘﻬﺎ ﺑﺮﺳﻢ اﻟﺴﻨﺔ اﻟﻤﺎﻟﻴﺔ</p>
                                        </div>
                                    </li>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>01:00 1970 اﻟﺠﻤﻌﺔ 01 ﻳﻨﺎﻳﺮ</h6>
                                            <p class='agenda-desc'>2019 اﻟﺒﺮﻧﺎﻣﺞ اﻟﺘﻮﻗﻌﻲ ﻟﻠﺼﻔﻘﺎﺕ اﻟﻤﺰﻣﻊ ﺑﺮﻣﺠﺘﻬﺎ ﺑﺮﺳﻢ اﻟﺴﻨﺔ اﻟﻤﺎﻟﻴﺔ</p>
                                        </div>
                                    </li>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>01:00 1970 اﻟﺠﻤﻌﺔ 01 ﻳﻨﺎﻳﺮ</h6>
                                            <p class='agenda-desc'>2019 اﻟﺒﺮﻧﺎﻣﺞ اﻟﺘﻮﻗﻌﻲ ﻟﻠﺼﻔﻘﺎﺕ اﻟﻤﺰﻣﻊ ﺑﺮﻣﺠﺘﻬﺎ ﺑﺮﺳﻢ اﻟﺴﻨﺔ اﻟﻤﺎﻟﻴﺔ</p>
                                        </div>
                                    </li>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>01:00 1970 اﻟﺠﻤﻌﺔ 01 ﻳﻨﺎﻳﺮ</h6>
                                            <p class='agenda-desc'>2019 اﻟﺒﺮﻧﺎﻣﺞ اﻟﺘﻮﻗﻌﻲ ﻟﻠﺼﻔﻘﺎﺕ اﻟﻤﺰﻣﻊ ﺑﺮﻣﺠﺘﻬﺎ ﺑﺮﺳﻢ اﻟﺴﻨﺔ اﻟﻤﺎﻟﻴﺔ</p>
                                        </div>
                                    </li>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>01:00 1970 اﻟﺠﻤﻌﺔ 01 ﻳﻨﺎﻳﺮ</h6>
                                            <p class='agenda-desc'>2019 اﻟﺒﺮﻧﺎﻣﺞ اﻟﺘﻮﻗﻌﻲ ﻟﻠﺼﻔﻘﺎﺕ اﻟﻤﺰﻣﻊ ﺑﺮﻣﺠﺘﻬﺎ ﺑﺮﺳﻢ اﻟﺴﻨﺔ اﻟﻤﺎﻟﻴﺔ</p>
                                        </div>
                                    </li>
                                </div>  
                            </div>   
                        </div>
                         <div id="agenda" class='calendar' style="padding-left: 10%; padding-top: 3%;"></div>
                    </div>
                </div>

                <!--Videos-->
                <div style='padding-bottom: 3%;'>
                    <div class="rvs-container">
                        <div class="rvs-item-container">
                            <div class="rvs-item-stage">
                                <div class="rvs-item" style="background-image: url('images/vid1.jpg')">
                                    <p class="rvs-item-text">VIDEO_TITLE <small>by VIDEO_CREDITS</small></p>
                                    <a href="https://youtu.be/rt2T94VSHCw" class="rvs-play-video"></a>
                                </div>
                                <div class="rvs-item" style="background-image: url('images/vid2.png')">
                                    <p class="rvs-item-text">VIDEO_TITLE <small>by VIDEO_CREDITS</small></p>
                                    <a href="https://youtu.be/5Tuue6icIeg" class="rvs-play-video"></a>
                                </div>
                            </div>
                        </div>

                        <div class="rvs-nav-container">
                            <a class="rvs-nav-prev"></a>
                            <div class="rvs-nav-stage">
                                <a class="rvs-nav-item">
                                    <span class="rvs-nav-item-thumb" style="background-image: url('http://i.ytimg.com/vi/C8wzPmH7KRQ/sddefault.jpg')"></span>
                                    <h4 class="rvs-nav-item-title">VIDEO_TITLE</h4>
                                    <small class="rvs-nav-item-credits">by VIDEO_CREDITS</small>
                                </a>
                                <a class="rvs-nav-item">
                                    <span class="rvs-nav-item-thumb" style="background-image: url('http://i.ytimg.com/vi/Ipqs_KaoZPI/sddefault.jpg')"></span>
                                    <h4 class="rvs-nav-item-title">VIDEO_TITLE</h4>
                                    <small class="rvs-nav-item-credits">by VIDEO_CREDITS</small>
                                </a>
                            </div>
                            <a class="rvs-nav-next"></a>
                        </div>
                    </div>
                </div>

                <div class='row'>
                    <!-- Mediouna-photos-->
                    <div class='col' style='padding-top: 3%; width: 30%'>
                        <ul id="mediouna-slider">
                            <li>
                                <img class='materialboxed' style='width: 100%' src='images/commune.jpeg'>
                            </li>
                            <li>
                                <img class='materialboxed' style='width: 100%' src='images/commune1.jpeg'>
                            </li>
                            <li>
                                <img class='materialboxed' style='width: 100%' src='images/commune.jpeg'>
                            </li>
                        </ul>
                    </div>
                     <!-- Services-->
                    <div class='col' style='padding-top: 1%; width: 70%'>
                        <div class='row'>
                            <img class='hoverable' src='images/mol.jpg'/>
                            <img class='hoverable'  src='images/procedure.jpg'/>
                        </div>
                        <div class='row'>
                            <img class='hoverable' src='images/service.jpg'/>
                            <img class='hoverable'  src='images/plaintes.jpg'/>
                        </div>
                    </div>
                </div>

                <footer class="page-footer black">
                    <div style='padding-right: 8%;'>
                        <div class="row" style='display: flex; flex-direction: row-reverse;'>
                            <div class='col s4' style='direction: rtl;'>
                                <h5 style=" font-weight: 600">ﻧﺒﺬﺓ ﻋﻨﺎ</h5>
                                <p style='text-align: justify;'>ﻣﻨﻄﻘﺔ ﻣﺪﻳﻮﻧﺔ ﻟﻬﺎ ﺗﺎﺭﻳﺦ ﻋﺮﻳﻖ ﻭ ﺇﺭﺙ ﺣﻀﺎﺭﻱ ﻭ ﺛﻘﺎﻓﻲ ﻛﺒﻴﺮ ﻟﻤﺎ ﺗﺘﻤﻴﺰ ﺑﻪ ﻣﻦ اﻟﻘﺼﺒﺎﺕ ﻭ ﻣﻮﻗﻌﻬﺎ ﻹﺳﺘﺮاﺗﻴﺠﻲ. ﻟﻬﺬا ﻣﻘﺎﻃﻌﺔ ﻣﺪﻳﻮﻧﺔ ﺗﻌﻤﻞ ﺟﺎﻫﺪﺓ ﻋﻠﻰ ﻗﺪﻡ ﻭ ﺳﺎﻕ ﻣﻦ ﺃﺟﻞ ﺭﺩ اﻹﻋﺘﺒﺎﺭ ﻟﻤﻜﺎﻧﺔ اﻟﻤﻨﻄﻘﺔ اﻟﺘﺎﺭﻳﺨﻴﺔ ﺑﻐﻴﺔ ﺭﻗﻲ اﻟﻤﻨﻄﻘﺔ ﻭ اﺯﺩﻫﺎﺭﻫﺎ ﻭ ﻫﺬا ﻟﻦ ﻳﺘﻢ ﺇﻻ ﺑﺎﻟﻤﺴﺎﻭﺓ ''ﺳﺎﻛﻨﺔ ﻭ ﻣﻘﺎﻃﻌﺔ''.
   </p>
                            </div>
                            <div class='col s5' style='direction: rtl; padding-right: 3%;'>
                                <h5 style=" font-weight: 600">اﺗﺼﺎﻝ</h5>
                                <p><i style='padding-left: 2%;' class="material-icons md-light">location_on</i>اﻟﻤﺮﻛﺐ اﻹﺩاﺭﻱ، 1 ﺷﺎﺭﻉ ﻋﻠﻲ ﻳﻌﺘﺔ، اﻟﺪاﺭاﻟﺒﻴﻀﺎء، اﻟﻤﻐﺮﺏ</p>
                                <p><i style='padding-left: 2%;' class="material-icons md-light">access_time</i>16:30:-08:30 - ﺃﻭﻗﺎﺕ اﻟﻌﻤﻞ</p>
                                <p style="display: flex"><i style='padding-left: 2%;' class="material-icons md-light">phone</i>
                                    <span style='direction: ltr!important;'>(+212) 0522 61 10 99</span>
                                </p>
                                <p><i style='padding-left: 2%;' class="material-icons md-light">alternate_email</i>contact@mediouna.org</p>
                            </div>
                            <div class='col s3' style='direction: rtl; padding-top: 4%; padding-right: 5%;'>
                                <h5>ﺗﺤﺘﺎﺟﻮﻥ  ﻟﻰ <br/>ﻣﺴﺎﻋﺪﺓ ؟</h5>
                                <div style='padding-right: 9%'>
                                    <a style='background-color:#396bf9' class="btn-floating btn-large waves-effect waves-light pulse tooltipped" data-position="top" data-tooltip="ﺃﻛﺘﺒﻮا ﻟﻨﺎ">
                                                <i class="material-icons">email</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright" style='border-top:1px solid #396bf9; background-color:#131111; margin-top: -15px;'>
                        <div class="container center white-text" style='direction: rtl; font-weight: 700;'>
                            © 2019   ﺟﻤﻴﻊ اﻟﺤﻘﻮﻕ ﻣﺤﻔﻮﻇﺔ ﻟﻤﻮﻗﻊ ﻣﻘﺎﻃﻌﺔ   ﻣﺪﻳﻮﻧﺔ 
                        </div>
                    </div>
                </footer>
                @show
            </div>
        </div>
        {{ Html::script('js/script.js')}}     
    </body>

    </html>