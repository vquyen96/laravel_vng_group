var master = document.getElementById('master');
var historyImg = document.getElementById('historyImg');
var his = document.getElementById('history');
console.log(his.offsetHeight);
master.onscroll = function(){
	var x = master.scrollTop;
	console.log(x);
	if (x > 600 && x < his.offsetHeight) {
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