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
(function($) {

    /*
     *  render_map
     *
     *  This function will render a Google Map onto the selected jQuery element
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	$el (jQuery element)
     *  @return	n/a
     */

    function render_map( $el ) {

        // var
        var $markers = $el.find('.marker');
        var styles = [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}];

        // vars
        var args = {
            scrollwheel : false,
            styles      : styles,
            zoom		: 17,
            center		: new google.maps.LatLng(0, 0),
            mapTypeId	: google.maps.MapTypeId.ROADMAP
        };

        // create map
        var map = new google.maps.Map( $el[0], args);

        // add a markers reference
        map.markers = [];

        // add markers
        $markers.each(function(){

            add_marker( $(this), map );

        });

        // center map
        center_map( map );

    }

    /*
     *  add_marker
     *
     *  This function will add a marker to the selected Google Map
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	$marker (jQuery element)
     *  @param	map (Google Map object)
     *  @return	n/a
     */

    function add_marker( $marker, map ) {

        // var
        var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
        
        var myIcon = new google.maps.MarkerImage("http://" + location.host + "/grandmont/app/assets/images/marker.png", null, null, null, new google.maps.Size(49,77));
        
        
        
        // create marker
        var marker = new google.maps.Marker({
            position	: latlng,
            map			: map,
            icon : myIcon
        });

        // add to array
        map.markers.push( marker );

        // if marker contains HTML, add it to an infoWindow
        if( $marker.html() )
        {
            // create info window
            var infowindow = new google.maps.InfoWindow({
                content		: $marker.html()
            });

            // show info window when marker is clicked
            google.maps.event.addListener(marker, 'click', function() {

                infowindow.open( map, marker );

            });
        }

    }

    /*
     *  center_map
     *
     *  This function will center the map, showing all markers attached to this map
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	map (Google Map object)
     *  @return	n/a
     */

    function center_map( map ) {

        // vars
        var bounds = new google.maps.LatLngBounds();

        // loop through all markers and create bounds
        $.each( map.markers, function( i, marker ){

            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

            bounds.extend( latlng );

        });

        // only 1 marker?
        if( map.markers.length == 1 )
        {
            // set center of map
            map.setCenter( bounds.getCenter() );
            map.setZoom( 15 );
        }
        else
        {
            // fit to bounds
            map.fitBounds( bounds );
        }

    }

    /*
     *  document ready
     *
     *  This function will render each map when the document is ready (page has loaded)
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	5.0.0
     *
     *  @param	n/a
     *  @return	n/a
     */

    $(document).ready(function(){

        $('.map').each(function(){
            render_map( $(this) );
        });

    });

})(jQuery);