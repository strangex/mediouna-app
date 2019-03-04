$(function () {

	$(".dropdown-trigger").dropdown();
	$('.tooltipped').tooltip();
	$('.carousel-item > p').dotdotdot({});
	$('#ticker2  p').dotdotdot({});
	$('.modal').modal({
		'endingTop' : '5%'
	});

	$('.ticker-elt').css("padding-right","60px") ;

	$("#core-container").mCustomScrollbar({
		scrollInertia:4,
		theme:"dark"
	});

	$("#agenda-container").mCustomScrollbar({
		scrollInertia:4,
		mouseWheelPixels: 5,
		theme:"dark"
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
	$('.rvs-container').rvslider();
});