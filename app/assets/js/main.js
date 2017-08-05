$(document).ready(function() {

	$('.burger').click(function(){
    
    $(this).toggleClass('active');
    
    $('main').toggleClass('blur');
    
    $('.menu-mobile').toggleClass('active');
    
    $('.overlay').toggleClass('active');
    
  });
	
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