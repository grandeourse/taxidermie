$(document).ready(function() {

	$('.burger').click(function(){
    
    $(this).toggleClass('active');
    
    $('main').toggleClass('blur');
    
    $('.menu-mobile').toggleClass('active');
    
    $('.overlay').toggleClass('active');
    
  });
	
	
	// Videos
	/*
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
		
		/*if($(window).width() > 800) {
			
			$('.video-viewport').width($('.banner').width());

	    var scale_h = $('.banner').width() / vid_w_orig;
	    var scale_v = $('.banner').height() / vid_h_orig;
	    var scale = scale_h;
	
	    $('video').width(scale * vid_w_orig);
	
	    $('.video-viewport').scrollLeft(($('video').width() - $('.banner').width()) / 2);
			
		/*}
		else {
			
			$('.video-viewport').width($('.banner').width());
	    $('.video-viewport').height($('.banner').height());
	
	    var scale_h = $('.banner').width() / vid_w_orig;
	    var scale_v = $('.banner').height() / vid_h_orig;
	    var scale = scale_h > scale_v ? scale_h : scale_v;
	
	    if (scale * vid_w_orig < min_w) {scale = min_w / vid_w_orig;};
	
	    $('video').width(scale * vid_w_orig);
	    $('video').height(scale * vid_h_orig);
	
	    $('.video-viewport').scrollLeft(($('video').width() - $('.banner').width()) / 2);
	    $('.video-viewport').scrollTop(($('video').height() - $('.banner').height()) / 2);
	    
		}
	
	};*/
	
});


//Resize

$(window).resize(function() {
	
	
	
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