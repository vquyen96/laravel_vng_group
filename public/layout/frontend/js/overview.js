var master = document.getElementById('master');
var historyImg = document.getElementById('historyImg');
var his = document.getElementById('history');
var letter = document.getElementById('letter');
var letterImg = document.getElementById('letterImg');

console.log(master.offsetWidth);

master.onscroll = function(){
	if (master.offsetWidth >  767 ) {
		var x = master.scrollTop;
		if (x > letter.offsetHeight && x < his.offsetHeight+letter.offsetHeight-historyImg.offsetHeight) {
			historyImg.style.marginTop = x-letter.offsetHeight+"px";
		}
	}
	if (master.offsetWidth >  767 && master.offsetWidth <  992 ) {
		var x = master.scrollTop;
		if (x > 0 && x < letter.offsetHeight-letterImg.offsetHeight) {
			letterImg.style.marginTop = x+"px";
		}
	}
}
// if (master.offsetWidth >  768 && master.offsetWidth <  992 ) {
// 	master.onscroll = function(){
		
// 	}
// }
	

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