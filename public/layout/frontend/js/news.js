$(document).ready(function(){
	$('.slideHeader #carousel-news-header .item').first().attr('class','item active');
	$('.news_internal .left .newsItemSmall').first().attr('class', 'newsItemBig');
	$('.news_internal .right .newsItemSmall').first().attr('class', 'newsItemBig');
	$('.news_project .newsItemSmall').first().attr('class', 'newsItemBig').css({'width':'50%','float':'left','margin-right':'30px'});
});