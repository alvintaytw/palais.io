// JavaScript Document
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 // some code..
}
else{
	window.onresize= function(){
	 var windowHeight = $(window).height();
   var windowWidth = $(window).width();
 	location.reload();
      // redraw the chart here will make IE8 fire resize event again
      // ...
	 //alert("width"+windowWidth);
      currentHeight = windowHeight;
      currentWidth = windowWidth;
	};
}
$(document).ready(function(){		
	var winHeight = $(window).height();
	var winWidth = $(window).width();
	$('.promo-small').css('height',winHeight);
	$('.home-small').css('height',winHeight);
	var containerWidth = (winWidth-200)/2;
	var titleWidth = $('h1.title').width()+30;
	$('.promo-big').css('width',titleWidth);
	$('.promo-large-img-frame').css('width',titleWidth);
	$('.promo-large-img-frame').css('height',winHeight-40);
	$('.find-out-more-wrapper').css('width',containerWidth);
	$('.promo-big').css('height',winHeight);
	$('.home-big').css('width',containerWidth);
	$('.home-big').css('height',winHeight);
	
  	//var promoHeight = $('#promo_main_img').height();
	//$('.promo-large-img-frame').css('height',promoHeight);
	if(winHeight>=900)
	{
		$('.home-small').css('padding-top','10%');
	}
	
	if(winWidth<790)
	{
		$('.dropdown-toggle').attr( "data-toggle","dropdown" );
	}
	
	$( "#search-icon-button" ).click(function() {
	  $( "#location" ).submit();
	});
	
	
	/* --- Configure Home and Promotions Thumb size --- */
	var divWidth = $('.directory-container').width();
	divWidth =  divWidth/2;
	$('.promo-thumb').css('width',(divWidth)/2);
	$('.promotion-img-frame').css('height',(divWidth)/2 -16);
	$('.da-thumbs li article').css('width',(divWidth)/2 -15);
	$('.index-map').css('width',(divWidth)/2 -15);
	$('.index-map').css('height',(divWidth)/2 -16);
	
    	var liHeight = $('#thumb-height').height();
	$('.location-wrapper').css('height',liHeight);
	
	
	/* --- Configure Tenant Individual size --- */
	var leftContainerHeight = $('.left-container-padding').height();
	$('.tenant-img-frame').css('height',leftContainerHeight-20);
	$('.tenant-img-frame').css('height',leftContainerHeight-20);
	
	/* --- Configure Tenant Page size --- */
	var galleyWidth = $('.tenant-gallery-left').width();
	$('.tenant-sub-wrapper').css('width',((galleyWidth-30)/2)-0.5);
	var directoryImgWidth = $('.directory-image-wrapper').width();
	$('.directory-image-frame').css('width',directoryImgWidth);
	$('.directory-image-frame').css('height',directoryImgWidth*0.656);
	
	/* --- Join Us Mail Check box --- */
	$('#option-survey-malls').click(function(event) {
        var $that = $(this);
        $('.option-survey-item').find('input[name="option-survey[]"]').each(function() {
            this.checked = $that.is(':checked');
        });
	    if(!$(this).is(':checked'))
	   {
		 $('#option-survey-malls').prop('checked', false);
	  	 $('#option-survey-all').prop('checked', false);
	   }	
    });
	
	$('#option-malls-palais').click(function(event) {
	   if(!$(this).is(':checked'))
	   {
		 $('#option-survey-malls').prop('checked', false);
	  	 $('#option-survey-all').prop('checked', false);
	   }	
    });
	$('#option-malls-city').click(function(event) {
	  if(!$(this).is(':checked'))
	   {
		 $('#option-survey-malls').prop('checked', false);
	  	 $('#option-survey-all').prop('checked', false);
	   }	
    });
	$('#option-malls-quayside').click(function(event) {
	   if(!$(this).is(':checked'))
	   {
		 $('#option-survey-malls').prop('checked', false);
	  	 $('#option-survey-all').prop('checked', false);
	   }	
    });
	$('#option-survey-properties').click(function(event) {
	   if(!$(this).is(':checked'))
	   {
	  	 $('#option-survey-all').prop('checked', false);
	   }
    });
	
	$('#option-survey-all').click(function(event) {
        var $that = $(this);
        $('input[name="option-survey[]"]').each(function() {
            this.checked = $that.is(':checked');
        });
	   $('.option-survey-item').find('input[name="option-survey[]"]').each(function() {
            this.checked = $that.is(':checked');
        });
    });
	
	$('#option-communicate-all').click(function(event) {
        var $that = $(this);
        $('input[name="option-communicate[]"]').each(function() {
            this.checked = $that.is(':checked');
        });
    });
	$('#option-communicate-sms').click(function(event) {
	   if(!$(this).is(':checked'))
	   {
	  	 $('#option-communicate-all').prop('checked', false);
	   }
    });
	$('#option-communicate-calls').click(function(event) {
	   if(!$(this).is(':checked'))
	   {
	  	 $('#option-communicate-all').prop('checked', false);
	   }
    });
	$('#option-communicate-email').click(function(event) {
	   if(!$(this).is(':checked'))
	   {
	  	 $('#option-communicate-all').prop('checked', false);
	   }
    });
	$('#option-communicate-mail').click(function(event) {
	   if(!$(this).is(':checked'))
	   {
	  	 $('#option-communicate-all').prop('checked', false);
	   }
    });
	
	/* --- Home page Hover effect --- */
	$(function() {
    		$('ul.da-thumbs > li').hoverdir();
	});

});



$( "#promo_main_img" ).load(function() {
  	var promoHeight = $('#promo_main_img').height();
	$('.promo-large-img-frame').css('height',promoHeight);
});

$( "#thumb-height" ).load(function() {
    	var liHeight = $('#thumb-height').height();
	$('.location-wrapper').css('height',liHeight);
});