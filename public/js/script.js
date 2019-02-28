$(function () {
	
	$(".dropdown-trigger").dropdown();
	$('#webTicker').webTicker({
		"height": "35px",
		"speed": "30",
		maskwidth: "50px"
	});
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
	
	setInterval(function(){
		$('.carousel').carousel('next');
	}, 10000);

	
   $("#core-container").mCustomScrollbar({
   		scrollInertia:4,
   		theme:"dark"
   });

	
});