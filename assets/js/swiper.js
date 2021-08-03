// JavaScript Document
var prePage = 0;
var mySwiper;

$(document).ready(function(){
	var myswiper_desktop = '.promotion ';
	var numberIndex = 1;
	mySwiper = new Swiper(myswiper_desktop+'.swiper-container',{
	   pagination: myswiper_desktop+'.pagination',
    paginationClickable: true,
    centeredSlides: true,
     slidesPerView: 'auto',
    onTouchEnd : function() {
		var currentPage = $(myswiper_desktop+'.swiper-slide-active').index();	
		if(currentPage == 0)
			$(myswiper_desktop+'.prev_btn').hide();
		else
			$(myswiper_desktop+'.prev_btn').show();
		if(currentPage == numberIndex)
			$(myswiper_desktop+'.next_btn').hide();
		else
			$(myswiper_desktop+'.next_btn').show();
		
		prePage = currentPage;
		}	
	});
	$(myswiper_desktop+'.next_btn').click(function(){
		mySwiper.swipeNext();
	});

	$(myswiper_desktop+'.prev_btn').click(function(){
		mySwiper.swipePrev();
	});
		
	$(myswiper_desktop+'.pagination .swiper-pagination-switch').click(function(){
		mySwiper.swipeTo($(this).index(), 740);
	});

});