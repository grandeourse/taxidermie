$(document).ready(function() {

	$('.burger').click(function(){
    
    $(this).toggleClass('active');
    
    $('main').toggleClass('blur');
    
    $('.menu-mobile').toggleClass('active');
    
    $('.overlay').toggleClass('active');
    
  });
	
	
	// Videos
	
	var min_w = 300;
	var vid_w_orig;
	var vid_h_orig;
	
	$(function() {
	
    vid_w_orig = parseInt($('video').attr('width'));
    vid_h_orig = parseInt($('video').attr('height'));

    $(window).resize(function () { fitVideo(); });
    $(window).trigger('resize');
	
	});
	
	function fitVideo() {
	
    $('.video-viewport').width($('.banner').width());

    var scale_h = $('.banner').width() / vid_w_orig;
    var scale_v = $('.banner').height() / vid_h_orig;
    var scale = scale_h;

    $('video').width(scale * vid_w_orig);

    $('.video-viewport').scrollLeft(($('video').width() - $('.banner').width()) / 2);
	
	};
	
	banner();
	
});


//Resize

$(window).resize(function() {
	
	banner();
	
});


//Functions

function banner() {
		
	if($(window).width() >= 769) {
		headerH = $('.header-screen').outerHeight();
	}
	else {
		headerH = $('.header-mobile').outerHeight();
	}
	
	$('.banner .container').css('paddingTop', headerH);
	
}