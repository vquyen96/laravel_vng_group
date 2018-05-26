var master = document.getElementById('master');
var historyImg = document.getElementById('historyImg');
console.log(master);
master.onscroll = function(){
	var x = master.scrollTop;
	if (x > 600 && x<1100) {
		historyImg.style.marginTop = x-600+"px";
	}
}

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
});