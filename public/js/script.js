$(function () {
	setTimeout(function() {
		$("#progress-bar").hide() ;
		$("#core-container").fadeIn(300) ;
		$('.rvs-container').rvslider();
		$('.carousel-item > p').dotdotdot();
		$('#offers-ticker  p').dotdotdot();
	}, 3000);

	$(".dropdown-trigger").dropdown();
	$('.tooltipped').tooltip();
	$('.materialboxed').materialbox({
	 	onOpenEnd:function(){
	 		$("#materialbox-overlay ").css({"top":"-100px",  "height": "10000px", "left": "-400px"}) ;
	 		$("#core-container").mCustomScrollbar("disable");
	 		$(".lSAction, #top-link").hide() ;
	 	},
	 	onCloseEnd:function(){
	 		$("#core-container").mCustomScrollbar("update");
	 		$(".lSAction, #top-link").show() ;
	 	}
	});
	

	$('.modal').modal({
		'endingTop' : '5%'
	});

	$('.carousel-x').carousel({
		fullWidth: true,
		indicators: true,
		shift: 5
	});
	$('.carousel-y').carousel();	


	setInterval(function(){
		$('.carousel').carousel('next');
	}, 10000);

	$('.ticker-elt').css("padding-right","60px") ;

	$("#core-container").mCustomScrollbar({
		scrollInertia:4,
		theme:"dark",
		callbacks:{
			onScroll: function(){
				if(this.mcs.topPct >= 20)
				{
					$("#top-link").fadeIn(200);
				}
				else
				{
					$("#top-link").fadeOut(200);
				}
			}
		}
	});

	$("#top-link").on("click",function(){
		$("#core-container").mCustomScrollbar("scrollTo","top",{
		    scrollInertia:2000
		});
	}) ;

	$("#agenda-container").mCustomScrollbar({
		scrollInertia:4,
		mouseWheelPixels: 5,
		theme:"dark"
	});

	function getTickerConfig(height){
		return {
			direction: 'up',
			easing: 'swing',
			speed: 'slow',
			interval: 500000,
			height: height,
			visible: 0,
			mousePause: 1,
			controls: {
				up: '',
				down: '',
				toggle: '',
				playText: 'Play',
				stopText: 'Stop'
			}
		} ;
	}

	$('#global-ticker').easyTicker(getTickerConfig("38px"));
	$('#association-ticker').easyTicker(getTickerConfig("440px"));
	$('#offers-ticker').easyTicker(getTickerConfig("790px")); 

	var now = new Date();
    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var date = now.getDate();

	var data = [{
            date: year + '-' + month + '-' + (date - 1),
            value: 'انطلاق عملية التسجيل في المخيم'
        }, {
            date: new Date(year, month - 1, date + 1),
            value: 'انطلاق عملية التسجيل في المخيم'
    }];

	$('#agenda').calendar({
			data: data,
			monthArray: ['يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليوز',
			 'اغسطس', 'شتنبر', 'أكتوبر', 'نونبر', 'دجنبر'],
			weekArray: [],
            date: new Date()
    });

     $("#mediouna-slider").lightSlider({
        item: 2,
        loop: true,
        vertical:true,
        verticalHeight:360,
        slideMargin: 100,
        autoWidth:false
    });
 
});
