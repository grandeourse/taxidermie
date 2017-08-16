$(document).ready(function() {

	$('.burger').click(function(){
    
    $(this).toggleClass('active');
    
    $('main').toggleClass('blur');
    
    $('.menu-mobile').toggleClass('active');
    
    $('.overlay').toggleClass('active');
    
  });
	
	
	/*var themeColor = new function () {
				
		var me = this;
		
		me.init = function () {
			$title = document.querySelector("title");
			$themeColor = document.querySelector("meta[name='theme-color']");
			startAnim();
		};
		
		function startAnim() {
			if($themeColor.content === '#00314b') {
				$themeColor.content = '#491337';
			} else {
				$themeColor.content = '#00314b';
			}
			
			setTimeout(startAnim, 3000);
		}
	}
	
	themeColor.init();*/
	
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