
$(document).ready(function(){

	$('.pneuf').slick({
		slidesToShow: 12,
		slidesToScroll: 6,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		arrows: false,
		mobileFirst: true,
		variableWidth: true,
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
	});

	$('div.comment-container').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		vertical: true,
		infinite: true,
		autoplay: true,
		centerPadding: "100px",
    	draggable: false,
    	adaptativeHeight: true
	});
});