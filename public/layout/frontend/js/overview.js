
$(document).ready(function(){
	var url_string = window.location.href;
	var url = new URL(url_string);
	var scroll = url.searchParams.get("scroll");
	switch(scroll){
		case "history":
			$('.master').animate({
				scrollTop: $(".history").offset().top-80
			}, 800);
			break;
		case "vision":
			$('.master').animate({
				scrollTop: $(".vision").offset().top-80
			}, 800);
			break;
		case "culture":
			$('.master').animate({
				scrollTop: $(".culture").offset().top-80
			}, 800);
			break;
		case "ceo":
			$('.master').animate({
				scrollTop: $(".ceo").offset().top-80
			}, 800);
			break;
		default:
			break;
	}

	// $('.master').animate({
	// 	scrollTop: $(".project").offset().top-80
	// }, 800);


	$('.master').scroll = function(){
		alert("ok");
		if (true){
			$('.history .historyImg').css('margin-top', document.body.scrollTop - 700)
		}
	}
	$('.master').scroll(function(){
		console.log($('.master').scrollTop);
	});
});