<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مديونة  - @yield('title')</title>
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
        <a style='background-color:#e82e96' id="top-link" class="btn-floating btn-large waves-effect waves-light pulse tooltipped" data-position="top" data-tooltip="عودة إلى الفوق">
            <i class="material-icons">arrow_upward</i>
        </a>
        <div class="container" id='shit' style="width:80%;">
            @section('container')
                <header id="header">
                    <div class="row">
                        <div class="col s6 m6 l6"><img src="images/med.jpg" alt=""></div>
                        <div class="col s6 m6 l6" style='padding-top: 10%; padding-left: 13%;'>
                            <img src="images/addbanner_728x90_V1.jpg" alt="">
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
                        <img src="images/directeur.png" style='height:96%; float:left; padding-right: 1%;
                        padding-top: 3px' class="circle responsive-img"/>
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1" style="background-color: #ea534f; font-weight: 700;">كلمة الرئيس</a>
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

                <!--President Word-->
                <div id="modal1" class="modal" style='max-height: 90%; width: 80%; height:100%;'>
                    <div style='margin:0; height:100%' class="card horizontal">
                        <div class="card-image">
                            <img style='height: 90%; height:100%' src="images/directeur.jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content" style="direction: rtl;">
                                <h4>رشيد اجكيني</h4>
                                <h5>رئيس المقاطعة</h5>
                                <br/>
                                <p>نضع بين أيديكم هذا الموقع الإلكتروني الخاص بمقاطعة الحي المحمدي, بهدف بناء جسر لتبادل المعلومة بين المقاطعة كمرفق جماعي عمومي و المواطنين , كشريك أساسي في بناء مستقبل المنطقة, و إيمانا منا بأهمية التواصل كآلية من آليات الحكامة الجيدة في منظومة التنمية المستدامة.</p><br/>
                                <p>أجمعت كل المكونات في مقاطعة الحي المحمدي, منتخبين و موظفين, على أنه لا تنمية محلية حقيقية بدون إشراك فعلي للمواطن في تدبير شأنه الجماعي, من خلال تمتيعه بكامل الحق في المعلومة الجماعية الرسمية و الصحيحة, و بوضع رهن إشارته كل المعطيات الخاصة بمرافق و مشاريع المقاطعة, وعيا منا بأن إعتماد المقاربة التشاركية في التنمية يبدأ بإخبار المواطن و عبره المحيط الخارجي و ينتهي بالمشاركة في تقييم حصيلة المنجزات و النتائج.</p><br/>
                                <p>من هذا المنطلق, نضع رهن إشارة المتتبع الكريم للشأن المحلي بالحي المحمدي مجموعة من الوسائل التواصلية لتعزيز العلاقة بين المقاطعة و المحيط بشكل مهني و عملي, من خلال خلق قسم خاص بالتواصل الداخلي و الخارجي, وهذا الموقع الإلكتروني الدي خضع لعملية تطوير و تحيين لمختلف صفحاته الإلكترونية من طرف مصلحة الإعلاميات التابعة لمقاطعة الحي المحمدي, و تحت إشراف قسم الإعلام و التواصل بشكل يستجيب لإنتظارات رواد الشبكة العنكبوتية, و تحويله إلى موقع تفاعلي بإمتياز يضمن كل عوامل التواصل الألكتروني بين المقاطعة و الزوار محليا ووطنيا و دوليا من خلال دبلجته إلى اللغة الفرنسية في مرحلة ثانية و بالشكل الدي يخدم مصلحة المنطقة.</p>

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
                                    <span>أحداث</span>
                                </a>
                            </div>
                            <div class='col s10' style=' padding-top: 4px; display: flex; flex-direction: row-reverse;'>
                                <span  class='red-text' style="font-size:18px; font-weight: 600;font-family: 'DroidArabicKufi', serif;">2019-12-12</span>
                                <span  class='black-text' style="font-family: 'DroidArabicKufi', serif; direction: rtl; font-size:18px; padding-right: 1%; font-weight: 600;">من اجل السلامة الطرقية:</span>
                                <span  class='black-text truncate' style="font-size:18px; padding-right: 1%; width: 60%; font-family: 'DroidArabicKufi', serif;">حتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</span>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 2px">
                            <div class='col s2' style='margin-left: -22px;'>
                                <a class="waves-effect waves-light btn" style='width: 100%; height: 43px;
                                font-size: 18px; background-color:#ea534f; font-weight: 500; padding-top: 5px; padding-bottom: 3px; display: inline; padding-left: 25%; padding-right: 25%;'>
                                <i class="fas fa-newspaper"></i>
                                <span>أحداث</span>
                            </a>
                            </div>  
                            <div class='col s10' style=' padding-top: 4px; display: flex; flex-direction: row-reverse;'>
                                <span  class='red-text' style="font-size:18px; font-weight: 600; font-family: 'DroidArabicKufi', serif;">2019-12-12</span>
                                <span  class='black-text' style="font-family: 'DroidArabicKufi', serif; direction: rtl; font-size:18px; padding-right: 1%; font-weight: 600;">من اجل السلامة الطرقية:</span>
                                <span  class='black-text truncate' style="font-size:18px; padding-right: 1%; width: 60%; font-family: 'DroidArabicKufi', serif;">حتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</span>
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
                                <h2>من اجل السلامة الطرقية</h2>
                                <p>احتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار  فظ ال فظ ال:من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار فظ ال  :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                <img style='height:420px' src="images/slider4.jpg"/>
                            </a>
                            <a class="carousel-item" href="#one!">
                                <h2>من اجل السلامة الطرقية</h2>
                                <p>احتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                <img style='height:420px' src="images/slider4.jpg"/>
                            </a>
                            <a class="carousel-item" href="#two!">
                                <h2>من اجل السلامة الطرقية</h2>
                                <p>احتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                <img style='height:420px' src="images/slider3.png"/>
                            </a>
                            <a class="carousel-item" href="#three!">
                                <h2>من اجل السلامة الطرقية</h2>
                                <p>احتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                <img style='height:420px' src="images/slider3.png"/>
                            </a>
                            <a class="carousel-item" href="#four!">
                                <h2>من اجل السلامة الطرقية</h2>
                                <p>احتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                <img style='height:420px' src="images/slider3.png"/>
                            </a>
                        </div>
                        <!--Offers-->
                        <div class="row hoverable" style='width: 100%; margin-right: 0;' >
                            <div class='center' style="position: absolute; padding-left: 1%;">
                                <a class="btn waves-effect" style="background-color:#3997bb; width:230px; font-weight: 700; font-size:15px">طلبات العروض</a>
                            </div>
                            <div id='offers-ticker' class="z-depth-1">
                                <div class="innerWrap" style='width: 100%; padding-left: 4%; padding-top: 7%; padding-right: 2%;'>
                                    <div>
                                        <img src="images/hay.jpg" style="height: 123px; width: 35%; float: right;"/>
                                        <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>من اجل السلامة الطرقية:  <span class='blue-txt'>(12-12-2019)</span></h5>
                                        <p  class='black-text'>حتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                        
                                    </div>
                                    <div class="divider"></div>
                                    <div style='padding-top: 2%;'>
                                        <img src="images/hay.jpg" style="height: 123px; width: 35%; float: right;"/>
                                        <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>من اجل السلامة الطرقية:  <span class='blue-txt'>(12-12-2019)</span></h5>
                                        <p  class='black-text'>حتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                    </div>
                                    <div class="divider"></div>
                                    <div style='padding-top: 2%;'>
                                        <img src="images/hay.jpg" style="height: 123px; width: 35%; float: right;"/>
                                        <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>من اجل السلامة الطرقية:  <span class='blue-txt'>(12-12-2019)</span></h5>
                                        <p  class='black-text'>حتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                    </div>
                                    <div class="divider"></div>
                                    <div style='padding-top: 2%;'>
                                        <img src="images/hay.jpg" style="height: 123px; width: 35%; float: right;"/>
                                        <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>من اجل السلامة الطرقية:  <span class='blue-txt'>(12-12-2019)</span></h5>
                                        <p  class='black-text'>حتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class='col s5' style='padding-right: 0; padding-left: 1%;'>
                         <!--Associations-->
                        <div class='row hoverable' style="margin-right: 0%;">
                            <div class='center' style="position: absolute; padding-left: 1%;">
                                <a class="btn waves-effect" style="background-color:#3997bb; width:230px; font-weight: 700; font-size:15px">أنشطة الجمعيات</a>
                            </div>
                            <div id='association-ticker' class="z-depth-1 ticker">
                                <div class="innerWrap" style='width: 100%; padding-top: 10%; height: 100%'>
                                    <div class='row' style='display: flex; flex-direction: row-reverse; padding-top: 1%; height: 24%;'>
                                        <div class='col s4' style='padding-right: 0; padding-left: 0;'>
                                            <img src="images/association.jpg" style="height: 80px; width: 139px;"/>
                                        </div>
                                        <div class='col s8' style='padding-bottom: 3%; padding-right: 2%; padding-left: 0;'>
                                            <p  class='black-text' style='direction: rtl;'>المهرجان الأول لقدماء تلميذات وتلاميذ الثانوية الإعدادية المستقبل</p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class='row' style='display: flex; flex-direction: row-reverse; padding-top: 3%; height: 26%;'>
                                        <div class='col s4' style='padding-right: 0; padding-left: 0;'>
                                            <img src="images/association.jpg" style="height: 80px; width: 139px;"/>
                                        </div>
                                        <div class='col s8' style='padding-bottom: 3%; padding-right: 2%; padding-left: 0;'>
                                            <p  class='black-text' style='direction: rtl;'>المهرجان الأول لقدماء تلميذات وتلاميذ الثانوية الإعدادية المستقبل</p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class='row' style='display: flex; flex-direction: row-reverse; padding-top: 3%; height: 26%;'>
                                        <div class='col s4' style='padding-right: 0; padding-left: 0;'>
                                            <img src="images/association.jpg" style="height: 80px; width: 139px;"/>
                                        </div>
                                        <div class='col s8' style='padding-bottom: 3%; padding-right: 2%; padding-left: 0;'>
                                            <p  class='black-text' style='direction: rtl;'>المهرجان الأول لقدماء تلميذات وتلاميذ الثانوية الإعدادية المستقبل</p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class='row' style='display: flex; flex-direction: row-reverse; padding-top: 3%; height: 26%;'>
                                        <div class='col s4' style='padding-right: 0; padding-left: 0;'>
                                            <img src="images/association.jpg" style="height: 80px; width: 139px;"/>
                                        </div>
                                        <div class='col s8' style='padding-bottom: 3%; padding-right: 2%; padding-left: 0;'>
                                            <p  class='black-text' style='direction: rtl;'>المهرجان الأول لقدماء تلميذات وتلاميذ الثانوية الإعدادية المستقبل</p>
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
                                        <h5 style='font-weight: 600;'>أجندة مديونة</h5>
                                    </div>
                                    <div class='col s6'>
                                        <a class="btn-floating btn-large waves-effect waves-light blue pulse tooltipped" data-position="top" data-tooltip="تصفح الأجندة">
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
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>الجمعة 01 يناير 1970 01:00</h6>
                                            <p class='agenda-desc'>البرنامج التوقعي للصفقات المزمع برمجتها بمقاطعة الحي المحمدي برسم السنة المالية 2019</p>
                                        </div>
                                    </li>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>الجمعة 01 يناير 1970 01:00</h6>
                                            <p class='agenda-desc'>البرنامج التوقعي للصفقات المزمع برمجتها بمقاطعة الحي المحمدي برسم السنة المالية 2019</p>
                                        </div>
                                    </li>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>الجمعة 01 يناير 1970 01:00</h6>
                                            <p class='agenda-desc'>البرنامج التوقعي للصفقات المزمع برمجتها بمقاطعة الحي المحمدي برسم السنة المالية 2019</p>
                                        </div>
                                    </li>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>الجمعة 01 يناير 1970 01:00</h6>
                                            <p class='agenda-desc'>البرنامج التوقعي للصفقات المزمع برمجتها بمقاطعة الحي المحمدي برسم السنة المالية 2019</p>
                                        </div>
                                    </li>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>الجمعة 01 يناير 1970 01:00</h6>
                                            <p class='agenda-desc'>البرنامج التوقعي للصفقات المزمع برمجتها بمقاطعة الحي المحمدي برسم السنة المالية 2019</p>
                                        </div>
                                    </li>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>الجمعة 01 يناير 1970 01:00</h6>
                                            <p class='agenda-desc'>البرنامج التوقعي للصفقات المزمع برمجتها بمقاطعة الحي المحمدي برسم السنة المالية 2019</p>
                                        </div>
                                    </li>
                                    <li class="collection-item row" style='display:flex; flex-direction: row-reverse; height: 90px;'>
                                        <div class='col s2' style="padding-left: 4%; padding-top: 2%;">
                                            <i class="far fa-calendar fa-3x blue-text"></i>
                                        </div>
                                        <div class='col s10'>
                                            <h6 class="title" style='color:#045e92; font-weight: 600; display:flex; flex-direction: row-reverse;'>الجمعة 01 يناير 1970 01:00</h6>
                                            <p class='agenda-desc'>البرنامج التوقعي للصفقات المزمع برمجتها بمقاطعة الحي المحمدي برسم السنة المالية 2019</p>
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
                                <div class="rvs-item" style="background-image: url('http://i.ytimg.com/vi/C8wzPmH7KRQ/maxresdefault.jpg')">
                                    <p class="rvs-item-text">VIDEO_TITLE <small>by VIDEO_CREDITS</small></p>
                                    <a href="https://youtu.be/C8wzPmH7KRQ" class="rvs-play-video"></a>
                                </div>
                                <div class="rvs-item" style="background-image: url('http://i.ytimg.com/vi/Ipqs_KaoZPI/maxresdefault.jpg')">
                                    <p class="rvs-item-text">VIDEO_TITLE <small>by VIDEO_CREDITS</small></p>
                                    <a href="https://youtu.be/Ipqs_KaoZPI" class="rvs-play-video"></a>
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
                                <img class='materialboxed' style='width: 100%' src='images/commune.jpg'>
                            </li>
                            <li>
                                <img class='materialboxed' style='width: 100%' src='images/commune.jpg'>
                            </li>
                            <li>
                                <img class='materialboxed' style='width: 100%' src='images/commune.jpg'>
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
                                <h5 style=" font-weight: 600">نبذة عنا</h5>
                                <p style='text-align: justify;'>عرف التجمع الحضري بالدار البيضاء خلال الربع الأخير من القرن العشرين وأوائل القرن الحالي عدة تقسيمات إدارية وجماعية يتوخى منها تقريب الإدارة من المواطنين ، وذلك بغية ضبط حاجيات السكان وتلبيتها عن قرب .</p>
                            </div>
                            <div class='col s5' style='direction: rtl; padding-right: 3%;'>
                                <h5 style=" font-weight: 600">اتصال</h5>
                                <p><i style='padding-left: 2%;' class="material-icons md-light">location_on</i>المركب الإداري، 1 شارع علي يعتة، الدارالبيضاء، المغرب</p>
                                <p><i style='padding-left: 2%;' class="material-icons md-light">access_time</i>أوقات العمل - 08:30-:16:30</p>
                                <p style="display: flex"><i style='padding-left: 2%;' class="material-icons md-light">phone</i>
                                    <span style='direction: ltr!important;'>(+212) 0522 61 10 99</span>
                                </p>
                                <p><i style='padding-left: 2%;' class="material-icons md-light">alternate_email</i>contact@mediouna.org</p>
                            </div>
                            <div class='col s3' style='direction: rtl; padding-top: 4%; padding-right: 5%;'>
                                <h5>تحتاجون  لى <br/>مساعدة ؟</h5>
                                <div style='padding-right: 9%'>
                                    <a style='background-color:#396bf9' class="btn-floating btn-large waves-effect waves-light pulse tooltipped" data-position="top" data-tooltip="أكتبوا لنا">
                                                <i class="material-icons">email</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright" style='border-top:1px solid #396bf9; background-color:#131111; margin-top: -15px;'>
                        <div class="container center white-text" style='direction: rtl; font-weight: 700;'>
                            © 2019 جميع الحقوق محفوظة لموقع مقاطعة الحي المحمدي
                        </div>
                    </div>
                </footer>
                @show
            </div>
        </div>
        {{ Html::script('js/script.js')}}     
    </body>

    </html>