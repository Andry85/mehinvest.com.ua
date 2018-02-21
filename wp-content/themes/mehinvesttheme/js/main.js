// JavaScript Document
$(document).ready( function(){


	$('#mycarousel').owlCarousel({
	    items:1,
	    autoHeight:true,
	    autoplay: true,
	    nav: false,
	    loop: true
	});



	$('header .nav-outer nav > ul').slicknav({
		label: ''
	});



	$(".news-list li:last-child").css('border-bottom','none');
	$(".menu li:last-child").css('border-bottom','none');
	$(".nav-outer nav > ul > li").mouseenter(function(){
	    $(this).children('ul').slideDown();
	});
	$(".nav-outer nav > ul > li").mouseleave(function(){
	    $(this).children('ul').slideUp();
	});

	mobileView();
    function mobileView() {
        
        var wiw = window.innerWidth;
        if(wiw < 768) {
        	$('.left-col').insertAfter('.right-col');
        }
    }; 


    var attr = $('html').attr('lang');
    if (attr == 'uk') {
    	$('.archiv-news').attr('href', '?page_id=579');
    } else {
    	$('.archiv-news').attr('href', '?page_id=23');
    };


	


});
//end ready
