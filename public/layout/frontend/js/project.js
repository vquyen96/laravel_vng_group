$(document).ready(function(){
	var url_string = window.location.href;
	var url = new URL(url_string);
	var scroll = url.searchParams.get("scroll");
	switch(scroll){
		case "investment":
			$('.master').animate({
				scrollTop: $(".investment").offset().top-80
			}, 800);
			break;
		case "distribution":
			$('.master').animate({
				scrollTop: $(".distribution").offset().top-80
			}, 800);
			break;
		default:
			break;
	}
	
	// $('.master').animate({
	// 	scrollTop: $(".project").offset().top-80
	// }, 800);

});