$(document).ready(function(){


	//menu

	var listMenu =  $('.menuHide>ul>li');
	// for(var i = 0; i < listMenu.length ; i++){
	// 	listMenu.eq(i).find('a').prepend("<div>0"+(i+1)+"__</div>");
	// }
	$('.menuHide>ul>li').click(function(){
		$(this).find('ul li').slideToggle();
		// $(this).css('background','#ebebeb');
		// $(this).find('a:first').css('color','#000');
		// $(this).siblings().css('background','#fff');
		$(this).siblings().find('ul li').slideUp();
		// $(this).siblings().find('a:first').css('color','#858585');
	});
	$('.menuHide .menuRight, .manChe').click(function(){
		$('.menuHide').css('right','-260px');
		$('.manChe').css('width', '0%');
		$('.btnMenuVsLang').css('right', '0');
	});
	var countMenu = 0
	$('.btnMenuVsLang .btnMenu').click(function(){
		if(countMenu == 0) {
		  	$('.menuHide').css('right', '0');
			$('.manChe').css('width', '100%');
			$('.btnMenu').css('transform', 'rotate(-90deg)');
			countMenu = 1;
		} else {
			$('.menuHide').css('right', '-100%');
			$('.manChe').css('width', '0%');
			$('.btnMenu').css('transform', 'rotate(0deg)');
			countMenu = 0;
		}
			// $('.menuHide').css('right', '0');
			// $('.manChe').css('width', '100%');
			// $('.btnMenu').css('transform', 'rotate(-90deg)');
	});
	
	setTimeout(function(){
		$('.errorAlert').fadeOut();
	}, 3000);


});