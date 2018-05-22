$(document).ready(function(){
	$('.menuHide>ul>li').click(function(){
		$(this).find('ul li').slideToggle();
		$(this).css('background','#ebebeb');
		$(this).find('a:first').css('color','#000');
		$(this).siblings().css('background','#fff');
		$(this).siblings().find('ul li').slideUp();
		$(this).siblings().find('a:first').css('color','#858585');
		

	});
});