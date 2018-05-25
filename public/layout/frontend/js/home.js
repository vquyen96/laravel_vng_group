$(document).ready(function(){
	$('.listPage ul li a').hover(function(){
		$('.imageBig img').attr('src', $(this).find('.link').text());
		$('.title .titleMain').text($(this).find('.text').text());
		$('.title p').text($(this).find('.content').text());
	});

});