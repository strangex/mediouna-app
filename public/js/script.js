$(function () {
	
	$(".dropdown-trigger").dropdown();
	/*$('#webTicker').webTicker({
		"height": "35px",
		"speed": "30",
		maskwidth: "50px"
	});*/
	$('.ticker-elt').css("padding-right","60px") ;
	
	$('.modal').modal({
		'endingTop' : '5%'
	});

	const carousel = $('.carousel').carousel({
	    fullWidth: true,
	    indicators: true,
	    shift: 5
	});	
	$('.carousel-item > p').dotdotdot({});
	$('#ticker2  p').dotdotdot({});
	
	setInterval(function(){
		$('.carousel').carousel('next');
	}, 10000);

	
   $("#core-container").mCustomScrollbar({
   		scrollInertia:4,
   		theme:"dark"
   });

   $('#ticker1').easyTicker({
		direction: 'up',
		easing: 'swing',
		speed: 'slow',
		interval: 5000,
		height: '38px',
		visible: 0,
		mousePause: 1,
		controls: {
			up: '',
			down: '',
			toggle: '',
			playText: 'Play',
			stopText: 'Stop'
		}
	});
   $('#ticker2').easyTicker({
		direction: 'up',
		easing: 'swing',
		speed: 'slow',
		interval: 10000,
		height: '730px',
		visible: 0,
		mousePause: 1,
		controls: {
			up: '',
			down: '',
			toggle: '',
			playText: 'Play',
			stopText: 'Stop'
		}
	});
	
});