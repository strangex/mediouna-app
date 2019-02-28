   <div style='margin-top: 2%; margin-left: inherit;' class='row z-depth-1'>
                    <div class='col s2' style= "padding:0; ">
                        <a class="waves-effect waves-light btn" style='width: 100%; height: 43px;
                            font-size: 18px; background-color:#0a5d45; font-weight: 500; padding-top: 4px;'>
                            <i class="fas fa-newspaper"></i>
                            <span>أحداث</span>
                        </a>
                    </div>
                    <div class='col s10' style= "padding-top: 10px;">
                        <ul id="webTicker" >
                            <li class='ticker-elt'>
                                <a  href="#">
                                    <span class='red-text' style='font-size:18px; padding-left: 10px'>12-12-2019</span>
                                    <span class='black-text' style='font-size:18px; padding-left: 10px'>اﻟﻤﺸﺎﺭﻳﻊ اﻟﺘﻨﻤﻮﻳﺔ</span>
                                </a>
                            </li>
                            <li class='ticker-elt'>
                                <a class='white-text' href="#">
                                    <span class='red-text' style='font-size:18px; padding-left: 10px'>12-12-2019</span>
                                    <span class='black-text' style='font-size:18px; padding-left: 10px'>اﻟﻤﺸﺎﺭﻳﻊ اﻟﺘﻨﻤﻮﻳﺔ</span>
                                </a>
                            </li>

Cannot set property 'tabIndex' of null @foreach($dropdowns as $id => $dropdown)
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
          <header id="header">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_top">
                  <div class="header_top_left">
                    <ul class="top_nav">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="pages/contact.html">Contact</a></li>
                    </ul>
                  </div>
                  <div class="header_top_right">
                    <a href="{{route('home')}}" >Se connecter</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_bottom">
                  <div class="logo_area"><a href="index.html" class="logo"><img src="images/med.jpg" alt=""></a></div>
                  <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
                </div>
              </div>
            </div>
          </header>
 <li><a class="navbar-elt dropdown-trigger" href="#!" data-target="dropdown1">مديونة </a>
                            </li>
                            <li><a class="navbar-elt dropdown-trigger" href="#!" data-target="dropdown2">المجلس  <i class="material-icons right"></i></a>
                            </li>
                            <li class='navbar-elt'><a href="#">المجلس  </a></li>
                            <li class='navbar-elt'><a href="#">المشاريع التنموية</a></li>
                            <li class='navbar-elt'><a href="#">فضاء المواطنين</a></li>
                            <li class='navbar-elt'><a href="#">الجمعيات</a></li>
                            <li class='navbar-elt'><a href="#">إقتصاد</a></li>
<!--@extends('layouts.main')

@section('title','الرئيسية<')
@section('container')
  @parent
@endsection-->


          <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>مديونة  -الرئيسية</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{ Html::style('css/style.css')}}
        {{ Html::style('css/bootstrap.min.css')}}
        {{ Html::style('css/font-awesome.min.css')}}
        {{ Html::style('css/animate.css')}}
        {{ Html::style('css/font.css')}}
        {{ Html::style('css/li-scroller.css')}}
        {{ Html::style('css/slick.css')}}
        {{ Html::style('css/jquery.fancybox.css')}}
        {{ Html::style('css/theme.css')}}
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        <div class="container">
          <header id="header">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_bottom">
                  <div class="logo_area"><a href="index.html" class="logo"><img src="images/med.jpg" alt=""></a></div>
                  <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
                </div>
              </div>
            </div>
          </header>
          <section id="navArea">
            <nav class="navbar navbar-inverse" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav main_nav">
                  <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                  <li><a href="#">الرئيسية   </a></li>
                   <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">مديونة   </a>
                  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">اعضاء المجلس    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Android</a></li>
                      <li><a href="#">Samsung</a></li>
                      <li><a href="#">Nokia</a></li>
                      <li><a href="#">Walton Mobile</a></li>
                      <li><a href="#">Sympony</a></li>
                    </ul>
                  </li>
                  <li><a href="#">المقاطعة  </a></li>
                  <li><a href="#">انشطة الجمعيات  </a></li>
                  <li><a href="pages/contact.html">فضاء المواطنين </a></li>
                  <li><a href="pages/404.html">اجندة </a></li>
                </ul>
              </div>
            </nav>
          </section>
          <section id="newsSection">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="latest_newsarea"> <span>الاولى</span>
                  <ul id="ticker01" class="news_sticker">
                    <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My First News Item</a></li>
                    <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Second News Item</a></li>
                    <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Third News Item</a></li>
                    <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Four News Item</a></li>
                    <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Five News Item</a></li>
                    <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Six News Item</a></li>
                    <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Seven News Item</a></li>
                    <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Eight News Item</a></li>
                    <li><a href="#"><img src="images/news_thumbnail2.jpg" alt="">My Nine News Item</a></li>
                  </ul>
                  <div class="social_area">
                    <ul class="social_nav">
                      <li class="facebook"><a href="#"></a></li>
                      <li class="twitter"><a href="#"></a></li>
                      <li class="flickr"><a href="#"></a></li>
                      <li class="pinterest"><a href="#"></a></li>
                      <li class="googleplus"><a href="#"></a></li>
                      <li class="vimeo"><a href="#"></a></li>
                      <li class="youtube"><a href="#"></a></li>
                      <li class="mail"><a href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="sliderSection">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="slick_slider">
                  <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider1.jpg" alt=""></a>
                    <div class="slider_article">
                      <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                    </div>
                  </div>
                  <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider2.jpg" alt=""></a>
                    <div class="slider_article">
                      <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                    </div>
                  </div>
                  <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider3.png" alt=""></a>
                    <div class="slider_article">
                      <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                    </div>
                  </div>
                   <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider3.png" alt=""></a>
                    <div class="slider_article">
                      <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                    </div> </div>
                  <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider33.png" alt=""></a>
                    <div class="slider_article">
                      <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="latest_post">
                  <h2><span>اخبار مديونة</span></h2>
                  <div class="latest_post_container">
                    <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                    <ul class="latest_postnav">
                      <li>
                        <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                          <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                          <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                          <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                          <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                          <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                        </div>
                      </li>
                    </ul>
                    <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="contentSection">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="left_content">
                  <div class="single_post_content">
                    <h2><span>انشطة المجلس</span></h2>
                    <div class="single_post_content_left">
                      <ul class="business_catgnav  wow fadeInDown">
                        <li>
                          <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img1.jpg"> <span class="overlay"></span> </a>
                            <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                          </figure>
                        </li>
                      </ul>
                    </div>
                    <div class="single_post_content_right">
                      <ul class="spost_nav">
                        <li>
                          <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                          </div>
                        </li>
                        <li>
                          <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                          </div>
                        </li>
                        <li>
                          <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                          </div>
                        </li>
                        <li>
                          <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="fashion_technology_area">
                    <div class="fashion">
                      <div class="single_post_content">
                        <h2><span>فيديوهات </span></h2>
                        <ul class="business_catgnav wow fadeInDown">
                          <li>
                            <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img2.jpg"> <span class="overlay"></span> </a>
                              <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                            </figure>
                          </li>
                        </ul>
                      
                      </div>
                    </div>
                    <div class="technology">
                      <div class="single_post_content">
                        <h2><span>انشطة الجمعيات</span></h2>
                        <ul class="business_catgnav">
                          <li>
                            <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img3.jpg"> <span class="overlay"></span> </a>
                              <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                            </figure>
                          </li>
                        </ul>

                      </div>
                    </div>
                  </div>
                  <div class="single_post_content">
                    <h2><span>خدمات  </span></h2>
                    <ul class="photograph_nav  wow fadeInDown">
                      <li>
                        <div class="photo_grid">
                          <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="images/photograph_img2.jpg" alt=""/></a> </figure>
                        </div>
                      </li>
                      <li>
                        <div class="photo_grid">
                          <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                        </div>
                      </li>
                               <li>
                        <div class="photo_grid">
                          <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                        </div>
                      </li>
                       
                    </ul>
                  </div>
                 
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <aside class="right_content">
                  <div class="single_sidebar">
                    <h2><span>اعلانات ادارية  </span></h2>
                    <ul class="spost_nav">
                      <li>
                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                          <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                        </div>
                      </li>
                      <li>
                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                          <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                        </div>
                      </li>
                      <li>
                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                          <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                        </div>
                      </li>
                      <li>
                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                          <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="single_sidebar">
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">صور  </a></li>
                      <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">فيديوهات</a></li>
                      <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">وثائق </a></li>
                    </ul>
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="category">
                        <ul>
                          <li class="cat-item"><a href="#">Sports</a></li>
                          <li class="cat-item"><a href="#">Fashion</a></li>
                          <li class="cat-item"><a href="#">Business</a></li>
                          <li class="cat-item"><a href="#">Technology</a></li>
                          <li class="cat-item"><a href="#">Games</a></li>
                          <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                          <li class="cat-item"><a href="#">Photography</a></li>
                        </ul>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="video">
                        <div class="vide_area">
                          <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="comments">
                        <ul class="spost_nav">
                          <li>
                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                              <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                            </div>
                          </li>
                          <li>
                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                              <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                            </div>
                          </li>
                          <li>
                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                              <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                            </div>
                          </li>
                          <li>
                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                              <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="single_sidebar wow fadeInDown">
                    <h2><span>Sponsor</span></h2>
                    <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> </div>
                  <div class="single_sidebar wow fadeInDown">
                    <h2><span>Category Archive</span></h2>
                    <select class="catgArchive">
                      <option>Select Category</option>
                      <option>Life styles</option>
                      <option>Sports</option>
                      <option>Technology</option>
                      <option>Treads</option>
                    </select>
                  </div>
                  <div class="single_sidebar wow fadeInDown">
                    <h2><span>طلبات العروض</span></h2>
                    <ul>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Rss Feed</a></li>
                      <li><a href="#">Login</a></li>
                      <li><a href="#">Life &amp; Style</a></li>
                    </ul>
                  </div>
                </aside>
              </div>
            </div>
          </section>
          <footer id="footer">
            <div class="footer_top">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="footer_widget wow fadeInLeftBig">
                    <h2>Flickr Images</h2>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="footer_widget wow fadeInDown">
                    <h2>Tag</h2>
                    <ul class="tag_nav">
                      <li><a href="#">Games</a></li>
                      <li><a href="#">Sports</a></li>
                      <li><a href="#">Fashion</a></li>
                      <li><a href="#">Business</a></li>
                      <li><a href="#">Life &amp; Style</a></li>
                      <li><a href="#">Technology</a></li>
                      <li><a href="#">Photo</a></li>
                      <li><a href="#">Slider</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="footer_widget wow fadeInRightBig">
                    <h2>Contact</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <address>
                    Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
                    </address>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer_bottom">
              <p class="copyright">Copyright &copy; 2019</p>
              <p class="developer">Developed By Wpfreeware</p>
            </div>
          </footer>
        </div>
        {{ Html::script('js/jquery.min.js')}}
        {{ Html::script('js/wow.min.js')}}
        {{ Html::script('js/bootstrap.min.js')}}
        {{ Html::script('js/slick.min.js')}}
        {{ Html::script('js/jquery.li-scroller.1.0.js')}}
        {{ Html::script('js/jquery.newsTicker.min.js')}}
        {{ Html::script('js/jquery.fancybox.pack.js')}}
        {{ Html::script('js/custom.js')}}
    </body>
</html>


    <!--header id="header">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="header_bottom">
                          <div class="logo_area"><a href="index.html" class="logo"><img src="images/med.jpg" alt=""></a></div>
                          <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
                        </div>
                      </div>
                    </div>
                </header-->

                      <!--nav class="navbar navbar-inverse" role="navigation">
                          <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav main_nav" style="width:100%; display: flex; flex-direction: row-reverse;">
                              <li class="active"><a href="#">
                                 <i class="fas fa-home fa-2x" style="padding:9px"></i>
                               
                              </a></li>
                               <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">امديونة   </a>
                              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">اعضاء المجلس    </a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Android</a></li>
                                  <li><a href="#">Samsung</a></li>
                                  <li><a href="#">Nokia</a></li>
                                  <li><a href="#">Walton Mobile</a></li>
                                  <li><a href="#">Sympony</a></li>
                                </ul>
                              </li>
                              <li><a href="#">المقاطعة  </a></li>
                              <li><a href="#">انشطة الجمعيات  </a></li>
                              <li><a href="pages/contact.html">فضاء المواطنين </a></li>
                              <li><a href="pages/404.html">اجندة </a></li>
                            </ul>
                             {{ Html::script('js/jquery.min.js')}}
        {{ Html::script('js/wow.min.js')}}
        {{ Html::script('js/bootstrap.min.js')}}
        {{ Html::script('js/slick.min.js')}}
        {{ Html::script('js/jquery.li-scroller.1.0.js')}}
        {{ Html::script('js/jquery.newsTicker.min.js')}}
        {{ Html::script('js/jquery.fancybox.pack.js')}}
        {{ Html::script('js/custom.js')}}
    </div-->

    <html>
<head>
    <title>مديونة  - @yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    {{ Html::style('css/style.css')}}
    <!-- Styles -->
        <!--style
         {{ Html::style('css/style.css')}}
        {{ Html::style('css/bootstrap.min.css')}}
        {{ Html::style('css/font-awesome.min.css')}}
        {{ Html::style('css/animate.css')}}
        {{ Html::style('css/font.css')}}
        {{ Html::style('css/li-scroller.css')}}
        {{ Html::style('css/slick.css')}}
        {{ Html::style('css/jquery.fancybox.css')}}
        {{ Html::style('css/theme.css')}}>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style-->

    </head>
    <body>
        <!--div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a-->
            <!--section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>آخر الأخبار</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My First News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Second News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Third News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Four News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Five News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Six News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Seven News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Eight News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail2.jpg" alt="">My Nine News Item</a></li>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider1.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider2.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider3.png" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider3.png" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div> </div>
            <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider33.png" alt=""></a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="latest_post">
            <h2><span>اخبار مديونة</span></h2>
            <div class="latest_post_container">
              <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
              <ul class="latest_postnav">
                <li>
                  <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                  </div>
                </li>
              </ul>
              <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>انشطة المجلس</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img1.jpg"> <span class="overlay"></span> </a>
                    <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>فيديوهات </span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img2.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>

              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>انشطة الجمعيات</span></h2>
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img3.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>

              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>خدمات  </span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="images/photograph_img2.jpg" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>

            </ul>
          </div>

        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>اعلانات ادارية  </span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">صور  </a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">فيديوهات</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">وثائق </a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="#">Sports</a></li>
                  <li class="cat-item"><a href="#">Fashion</a></li>
                  <li class="cat-item"><a href="#">Business</a></li>
                  <li class="cat-item"><a href="#">Technology</a></li>
                  <li class="cat-item"><a href="#">Games</a></li>
                  <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                  <li class="cat-item"><a href="#">Photography</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> </div>
            <div class="single_sidebar wow fadeInDown">
              <h2><span>Category Archive</span></h2>
              <select class="catgArchive">
                <option>Select Category</option>
                <option>Life styles</option>
                <option>Sports</option>
                <option>Technology</option>
                <option>Treads</option>
              </select>
            </div>
            <div class="single_sidebar wow fadeInDown">
              <h2><span>طلبات العروض</span></h2>
              <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Rss Feed</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Life &amp; Style</a></li>
              </ul>
            </div>
          </aside>
      </div>
    </div>
  </section>
  <footer id="footer">
      <div class="footer_top">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer_widget wow fadeInLeftBig">
              <h2>Flickr Images</h2>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer_widget wow fadeInDown">
              <h2>Tag</h2>
              <ul class="tag_nav">
                <li><a href="#">Games</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Life &amp; Style</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Photo</a></li>
                <li><a href="#">Slider</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer_widget wow fadeInRightBig">
              <h2>Contact</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <address>
                Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
              </address>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <p class="copyright">Copyright &copy; 2019</p>
        <p class="developer">Developed By Wpfreeware</p>
      </div>
  </footer-->