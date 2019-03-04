<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>مديونة  - @yield('title')</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        {{ Html::style('css/style.css') }}
        {{ Html::style('css/materialize.min.css') }}
        {{ Html::style('css/jquery.mCustomScrollbar.css') }}
        <!--scri {{ Html::script('js/jquery.webticker.min.js') }}  pts-->
        {{ Html::script('js/app.js')}}
        {{ Html::script('js/materialize.min.js') }}   
        {{ Html::script('js/jquery.dotdotdot.min.js') }}
        {{ Html::script('js/jquery.easy-ticker.min.js') }}
    </head>
    <body>
        <div id='core-container'>
        <div class="container" id='shit' style="width:80%;">
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
          
                <div style='margin-top: 2%; margin-left: inherit;' class='row' id='ticker1'>
                    <div class="innerWrap" style='width: 100%;'>
                        <div class="row">
                            <div class='col s2'>
                                <a class="waves-effect waves-light btn" style='width: 100%; height: 43px;
                                font-size: 18px; background-color:#0a5d45; font-weight: 500; padding-top: 4px; padding-bottom: 3px; display: inline; padding-left: 25%; padding-right: 25%;'>
                                    <i class="fas fa-newspaper"></i>
                                    <span>أحداث</span>
                                </a>
                            </div>
                            <div class='col s10' style=' padding-top: 4px; display: flex; flex-direction: row-reverse;'>
                                <span  class='red-text' style='font-size:18px; font-weight: 600;'>12-12-2019</span>
                                <span  class='black-text' style='direction: rtl; font-size:18px; padding-right: 1%; font-weight: 600;'>من اجل السلامة الطرقية:</span>
                                <span  class='black-text truncate' style='font-size:18px; padding-right: 1%; width: 60%'>حتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class='col s2'>
                                <a class="waves-effect waves-light btn" style='width: 100%; height: 43px;
                                font-size: 18px; background-color:#ea534f; font-weight: 500; padding-top: 4px; padding-bottom: 3px; display: inline; padding-left: 25%; padding-right: 25%;'>
                                    <i class="fas fa-newspaper"></i>
                                    <span>أحداث</span>
                                </a>
                            </div>
                            <div class='col s10' style=' padding-top: 4px; display: flex; flex-direction: row-reverse;'>
                                <span  class='red-text' style='font-size:18px; font-weight: 600;'>12-12-2019</span>
                                <span  class='black-text' style='direction: rtl; font-size:18px; padding-right: 1%; font-weight: 600;'>من اجل السلامة الطرقية:</span>
                                <span  class='black-text truncate' style='font-size:18px; padding-right: 1%; width: 60%'>حتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='row'>
                    <div class="col s6" style='height: 350px'>
                        <div class='row carousel carousel-slider'>
                            <div class="carousel-fixed-item right" style='top:0px; padding-left: 70%;'>
                              <a class="btn waves-effect" style="background-color:#ea534f; font-weight: 700; font-size:15px">ﺃﻧﺸﻄﺔ اﻟﻤﺠﻠﺲ</a>
                            </div>
                            <a class="carousel-item" href="#one!">
                                <h2>من اجل السلامة الطرقية</h2>
                                <p>احتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                <img src="images/slider4.jpg"/>
                            </a>
                            <a class="carousel-item" href="#one!">
                                <h2>من اجل السلامة الطرقية</h2>
                                <p>احتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                <img src="images/slider4.jpg"/>
                            </a>
                            <a class="carousel-item" href="#two!">
                                <h2>من اجل السلامة الطرقية</h2>
                                <p>احتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                <img src="images/slider3.png"/>
                            </a>
                            <a class="carousel-item" href="#three!">
                                <h2>من اجل السلامة الطرقية</h2>
                                <p>احتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                <img src="images/slider3.png"/>
                            </a>
                            <a class="carousel-item" href="#four!">
                                <h2>من اجل السلامة الطرقية</h2>
                                <p>احتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                <img src="images/slider3.png"/>
                            </a>
                        </div>
                        <div class='col' style="width: 100%">
                            <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'><i class="far fa-calendar"></i><span class='red-text'>9h05 12-12-2019</span></h5>
                            <p>من اجل السلامة الطرقية:</p>
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div class="col s6 row" >
                        <div class='center' style="position: absolute; padding-left: 1%;">
                            <a class="btn waves-effect" style="background-color:#50aed2; width:230px; font-weight: 700; font-size:15px">طلبات العروض</a>
                        </div>
                        <div id='ticker2' class="z-depth-1">
                            <div class="innerWrap" style='width: 100%; padding-left: 4%; padding-top: 7%; padding-right: 2%;'>
                                <div>
                                    <img src="images/hay.jpg" style="height: 123px; width: 35%; float: right;"/>
                                    <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>من اجل السلامة الطرقية:  <span class='red-text'>(12-12-2019)</span></h5>
                                    <p  class='black-text'>حتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                     <div class="divider"></div>
                                </div>
                                <div>
                                    <img src="images/hay.jpg" style="height: 123px; width: 35%; float: right;"/>
                                    <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>من اجل السلامة الطرقية:  <span class='red-text'>(12-12-2019)</span></h5>
                                    <p  class='black-text'>حتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                     <div class="divider"></div>
                                </div>
                                <div>
                                    <img src="images/hay.jpg" style="height: 123px; width: 35%; float: right;"/>
                                    <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>من اجل السلامة الطرقية:  <span class='red-text'>(12-12-2019)</span></h5>
                                    <p  class='black-text'>حتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                     <div class="divider"></div>
                                </div>
                                <div>
                                    <img src="images/hay.jpg" style="height: 123px; width: 35%; float: right;"/>
                                    <h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>من اجل السلامة الطرقية:  <span class='red-text'>(12-12-2019)</span></h5>
                                    <p  class='black-text'>حتضنت مقاطعة الحي المحمدي يوم الأربعاء 27 فبراير 2019 أشغال الملتقى الجهوي الأول المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة.المنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحةالمنظم تحت شعار :من أجل الارتقاء بخدمات مكتب حفظ الصحة</p>
                                     <div class="divider"></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                
                <footer class="page-footer black">
                  <div class="container">
                    <div class="row">
                      <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                      </div>
                      <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                          <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                          <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                          <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="footer-copyright" style='border-top:1px solid white; background-color:#131111;'>
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