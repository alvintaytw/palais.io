// JavaScript Document


/* --- Pop up Images --- */
$(document).ready(function(){
					  
$('.parent-gallery').magnificPopup({
		 delegate: 'a.image-link', 					
          type: 'image',
          closeOnContentClick: true,
          closeBtnInside: false,
          fixedContentPos: true,
          mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
          image: {
            verticalFit: true
          }, 
		gallery: {
            enabled: true
          },
          zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
          }
        });
});