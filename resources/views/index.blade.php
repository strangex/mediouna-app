@extends('layouts.main')
@php($active = 'اﻟﺮﺋﻴﺴﻴﺔ ')

@section('title','الرئيسية')

@section('styles')
	{{ Html::style('css/style.css') }}
	{{ Html::style('css/materialize.min.css') }}
	{{ Html::style('css/jquery.mCustomScrollbar.css') }}
	{{ Html::style('css/rvslider.min.css') }}
	{{ Html::style('css/calendar.css') }}
	{{ Html::style('css/lightslider.css') }}
@endsection

@section('scripts')
	{{ Html::script('js/app.js')}}
	{{ Html::script('js/materialize.min.js') }}   
	{{ Html::script('js/jquery.dotdotdot.min.js') }}
	{{ Html::script('js/jquery.easy-ticker.min.js') }}
	{{ Html::script('js/rvslider.min.js') }}
	{{ Html::script('js/calendar.js') }}
	{{ Html::script('js/lightslider.js') }}
@endsection

@section('progress')
	@include('includes.progress-bar')
@endsection

@section('content')
	<div class='row'>
		<div class='col s7' style='padding-right: 0;'>
			<!--Carousel-->
			<div class='row carousel carousel-x carousel-slider' style='height: 400px'>
				<div class="carousel-fixed-item right" style='top:0px; padding-left: 70%;'>
					<a class="btn waves-effect" style="background-color:#ea534f; font-weight: 700; font-size:15px">ﺃﻧﺸﻄﺔ اﻟﻤﺠﻠﺲ</a>
				</div>
				<a class="carousel-item" href="#one!">
					<p class='council-h'>ﺃﺷﻐﺎﻝ ﺗﺒﻠﻴﻂ ﻭ ﺗﺮﺻﻴﻒ اﻷﺣﻴﺎء اﻟﻨﺎﻗﺼﺔ اﻟﺘﺠﻬﻴﺰ ﺑﺤﻲ اﻟﺮﺣﺎﻟﻲ ﺟﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ </p>
					<img style='height:420px' src="images/qods.jpg"/>
				</a>
				<a class="carousel-item" href="#one!">
					<p class='council-h'>ﺃﺷﻐﺎﻝ  ﺗﺒﻠﻴﻂ ﻭﺗﺮﺻﻴﻒ اﻷﺣﻴﺎء اﻟﻨﺎﻗﺼﺔ اﻟﺘﺠﻬﻴﺰ ﺑﺤﻲ اﻧﺰاﻟﺔ اﻟﺠﺎﻣﻊ ﺟﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ </p>
					<img style='height:420px' src="images/sania.jpg"/>
				</a>
				<a class="carousel-item" href="#two!">
					<p class='council-h'> ﺃﺷﻐﺎﻝ ﺗﺒﻠﻴﻂ ﻭﺗﺮﺻﻴﻒ اﻷﺣﻴﺎء اﻟﻨﺎﻗﺼﺔ اﻟﺘﺠﻬﻴﺰ ﺑﺤﻲ اﻧﺰاﻟﺔ اﻟﺠﺎﻣﻊ ﺟﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ  </p>
					<img style='height:420px' src="images/bloc.jpg"/>
				</a>
				<a class="carousel-item" href="#three!">
					<p class='council-h'>ﺃﺷﻐﺎﻝ ﺗﺒﻠﻴﻂ ﻭﺗﺮﺻﻴﻒ اﻷﺣﻴﺎء اﻟﻨﺎﻗﺼﺔ اﻟﺘﺠﻬﻴﺰ ﺑﺤﻲ اﻧﺰاﻟﺔ اﻟﺠﺎﻣﻊ ﺟﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ   </p>
					<img style='height:420px' src="images/tis2.jpg"/>
				</a>
				<a class="carousel-item" href="#four!">
					<p class='council-h'>  ﺗﻬﻴﺌﺔ اﻟﻄﺮﻳﻖ اﻟﻤﻮاﺯﻳﺔ ﻟﺸﺎﺭﻉ ﺃﺣﻤﺪ ﺑﻠﺤﺴﻦ ﺑﺠﻤﺎﻋﺔ ﻣﺪﻳﻮﻧﺔ </p>
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
							<img src="images/hay.jpg" style="float: right; height: 140px; width: 120px;"/>
							<h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>ﻣﻦ اﺟﻞ اﻟﺴﻼﻣﺔ اﻟﻄﺮﻗﻴﺔ:  <span class='blue-txt'>(12-12-2019)</span></h5>
							<p>اﺣﺘﻀﻨﺖ ﻣﻘﺎﻃﻌﺔ  ﻣﺪﻳﻮﻧﺔ ﻳﻮﻡ اﻷﺭﺑﻌﺎء 27 ﻓﺒﺮاﻳﺮ 2019 ﺃﺷﻐﺎﻝ اﻟﻤﻠﺘﻘﻰ اﻟﺠﻬﻮﻱ اﻷﻭﻝ اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ.اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ  : ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ  : ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ  :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ</p>
						</div>
						<div class="divider"></div>
						<div style='padding-top: 2%;'>
							<img src="images/hay.jpg" style="float: right; height: 140px; width: 120px;"/>
							<h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>ﻣﻦ اﺟﻞ اﻟﺴﻼﻣﺔ اﻟﻄﺮﻗﻴﺔ:  <span class='blue-txt'>(12-12-2019)</span></h5>
							<p>اﺣﺘﻀﻨﺖ ﻣﻘﺎﻃﻌﺔ  ﻣﺪﻳﻮﻧﺔ ﻳﻮﻡ اﻷﺭﺑﻌﺎء 27 ﻓﺒﺮاﻳﺮ 2019 ﺃﺷﻐﺎﻝ اﻟﻤﻠﺘﻘﻰ اﻟﺠﻬﻮﻱ اﻷﻭﻝ اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ.اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ</p>
						</div>
						<div class="divider"></div>
						<div style='padding-top: 2%;'>
							<img src="images/hay.jpg" style="float: right; height: 140px; width: 120px;"/>
							<h5  class='black-text' style='direction: rtl; font-size:18px; font-weight: 600;'>ﻣﻦ اﺟﻞ اﻟﺴﻼﻣﺔ اﻟﻄﺮﻗﻴﺔ:  <span class='blue-txt'>(12-12-2019)</span></h5>
							<p>اﺣﺘﻀﻨﺖ ﻣﻘﺎﻃﻌﺔ  ﻣﺪﻳﻮﻧﺔ ﻳﻮﻡ اﻷﺭﺑﻌﺎء 27 ﻓﺒﺮاﻳﺮ 2019 ﺃﺷﻐﺎﻝ اﻟﻤﻠﺘﻘﻰ اﻟﺠﻬﻮﻱ اﻷﻭﻝ اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ.اﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔاﻟﻤﻨﻈﻢ ﺗﺤﺖ ﺷﻌﺎﺭ :ﻣﻦ ﺃﺟﻞ اﻻﺭﺗﻘﺎء ﺑﺨﺪﻣﺎﺕ ﻣﻜﺘﺐ ﺣﻔﻆ اﻟﺼﺤﺔ</p>
						</div>
						<div class="divider"></div>
						<div style='padding-top: 2%;'>
							<img src="images/hay.jpg" style="float: right; height: 140px; width: 120px;"/>
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
					<img class='materialboxed mediouna-photos' src='images/commune.jpeg'>
				</li>
				<li>
					<img class='materialboxed mediouna-photos' src='images/commune.jpeg'>
				</li>
				<li>
					<img class='materialboxed mediouna-photos' src='images/commune.jpeg'>
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
@endsection

@section('custom-script')
	 {{ Html::script('js/script.js')}} 
@endsection
 