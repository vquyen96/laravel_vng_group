$(document).ready(function(){
	//menu
	$('.menuHide>ul>li').click(function(){
		$(this).find('ul li').slideToggle();
		$(this).css('background','#ebebeb');
		$(this).find('a:first').css('color','#000');
		$(this).siblings().css('background','#fff');
		$(this).siblings().find('ul li').slideUp();
		$(this).siblings().find('a:first').css('color','#858585');
	});
	$('.menuHide .menuRight, .manChe').click(function(){
		$('.menuHide').css('right','-260px');
		$('.manChe').css('width', '0%');
		$('.btnMenuVsLang').css('right', '0');
	});
	$('header .btnMenuVsLang .btnMenu').click(function(){
		$('.menuHide').css('right', '0');
		$('.manChe').css('width', '100%');
		$('.btnMenuVsLang').css('right', '-260px');
	});
	
	
});