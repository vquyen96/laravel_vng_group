function showMessHome5(){
	var time = 0;
	var timePlus = 500;
	if (master.offsetWidth > 768 && master.offsetWidth <=  1024) {
		setTimeout(function(){
			$('.home501 ').css('transform','scale(0.8) translate(-40px, -10px)');
		}, time);
		setTimeout(function(){
			$('.home502 ').css('transform','scale(0.8) translate(-35px, 0px)');
		}, time+timePlus);
		setTimeout(function(){
			$('.home503 ').css('transform','scale(0.8) translate(-50px, 0px)');
		}, time+timePlus*2);
	}
	else if (master.offsetWidth <=  768 ) {
		setTimeout(function(){
			$('.home501 ').css('transform','scale(0.6) translate(-75px, 25px)');
		}, time);
		setTimeout(function(){
			$('.home502 ').css('transform','scale(0.6) translate(-100px, 25px)');
		},  time+timePlus);
		setTimeout(function(){
			$('.home503 ').css('transform','scale(0.6) translate(-100px, 50px)');
		}, time+timePlus*2);
	}else{
		setTimeout(function(){
			$('.home501 ').css('transform','scale(1) translate(0% ,0)');
		}, time);
		setTimeout(function(){
			$('.home502 ').css('transform','scale(1) translate(0% ,0)');
		},  time+timePlus);
		setTimeout(function(){
			$('.home503 ').css('transform','scale(1) translate(0% ,0)');
		}, time+timePlus*2);
	}
		

}


function showImgHome3(){
	setTimeout(function(){
		$('.home3Item').eq(0).find('.home3ItemImg').css('top','0'); 
	}, 1000);
	setTimeout(function(){
		$('.home3Item').eq(1).find('.home3ItemImg').css('top','0'); 
	}, 1200);
	setTimeout(function(){
		$('.home3Item').eq(2).find('.home3ItemImg').css('top','0'); 
	}, 1400);
	setTimeout(function(){
		$('.home3Item').eq(3).find('.home3ItemImg').css('top','0'); 
	}, 1600);
	setTimeout(function(){
		$('.home3Item').eq(4).find('.home3ItemImg').css('top','0'); 
	}, 1800);
	setTimeout(function(){
		$('.home3Item').eq(5).find('.home3ItemImg').css('top','0'); 
	}, 2000);
	setTimeout(function(){
		$('.home3Item').eq(5).find('.home3ItemImg').css('opacity','0.15');
	}, 3600);
	setTimeout(function(){
		$('.home3Item').eq(4).find('.home3ItemImg').css('opacity','0.15');
	}, 3800);
	setTimeout(function(){
		$('.home3Item').eq(3).find('.home3ItemImg').css('opacity','0.15');
	}, 4000);
	setTimeout(function(){
		$('.home3Item').eq(2).find('.home3ItemImg').css('opacity','0.15');
	}, 4200);
	setTimeout(function(){
		$('.home3Item').eq(1).find('.home3ItemImg').css('opacity','0.15');
	}, 4400);
	setTimeout(function(){
		$('.home3Item').eq(0).find('.home3ItemImg').css('opacity','0.15');
	}, 4600);
			
}

function scrollDown(){
	if (master.scrollTop < windowHeight) {
		$('.master').animate({
	      	scrollTop: windowHeight
	    }, 800);
	}
	if (master.scrollTop >= windowHeight && master.scrollTop < 2*windowHeight) {
		$('.master').animate({
	      	scrollTop: 2*windowHeight
	    }, 800);
	    showImgHome3();
	    
	}
	if (master.scrollTop >= windowHeight*2 && master.scrollTop < 3*windowHeight) {
		$('.master').animate({
	      	scrollTop: 3*windowHeight
	    }, 800);
	}
	if (master.scrollTop >= windowHeight*3 && master.scrollTop < 4*windowHeight) {
		$('.master').animate({
	      	scrollTop: 4*windowHeight
	    }, 800);
	    showMessHome5();
	}
}
function scrollUp(){
	if (master.scrollTop < windowHeight) {
		$('.master').animate({
	      	scrollTop: 0
	    }, 800);
	}
	if (master.scrollTop >= windowHeight && master.scrollTop < 2*windowHeight) {
		$('.master').animate({
	      	scrollTop: windowHeight
	    }, 800);
	    showImgHome3();
	    
	}
	if (master.scrollTop >= windowHeight*2 && master.scrollTop < 3*windowHeight) {
		$('.master').animate({
	      	scrollTop: 2*windowHeight
	    }, 800);
	}
	if (master.scrollTop >= windowHeight*3 && master.scrollTop < 4*windowHeight) {
		$('.master').animate({
	      	scrollTop: 3*windowHeight
	    }, 800);
	    showMessHome5();
	}
}
function setBgDot(){
	var x = master.scrollTop;
	
	if (x < windowHeight) {
		$('.dotScrollItem').css('background','none');
    	$('.dotScroll_1').css('background','#000');
	}
	if (x >= windowHeight && x < windowHeight*2) {
		$('.dotScrollItem').css('background','none');
    	$('.dotScroll_2').css('background','#000');
	}
	if (x >= windowHeight*2 && x < windowHeight*3) {
		$('.dotScrollItem').css('background','none');
    	$('.dotScroll_3').css('background','#000');
	}
	if (x >= windowHeight*3 && x < windowHeight*4) {
		$('.dotScrollItem').css('background','none');
    	$('.dotScroll_4').css('background','#000');
	}
	if (x >= windowHeight*4 && x < windowHeight*5) {
		$('.dotScrollItem').css('background','none');
    	$('.dotScroll_5').css('background','#000');
	}

}
function scrollOption(){
	
	var x = master.scrollTop;
	if (x < windowHeight) {
		$('.home1Main').css({'position':'absolute', 'top': x, 'left':'0', 'transition':'0s'});
		$('.home2Main').css({'position':'absolute', 'top': windowHeight, 'left':'0', 'transition':'1s'});
	}
	if (x >= windowHeight && x < windowHeight*2) {

		$('.home1Main').css({'position':'absolute', 'top': 0, 'left':'0', 'transition':'1s'});
		$('.home2Main').css({'position':'absolute', 'top': x-windowHeight, 'left':'0', 'transition':'0s'});
		$('.home3Main').css({'position':'absolute', 'top': windowHeight, 'left':'0', 'transition':'1s'});
	}
	if (x >= windowHeight*2 && x < windowHeight*3) {
		$('.home2Main').css({'position':'absolute', 'top': 0, 'left':'0', 'transition':'1s'});
		$('.home3Main').css({'position':'absolute', 'top': x-windowHeight*2, 'left':'0', 'transition':'0s'});
		$('.home4Main').css({'position':'absolute', 'top': windowHeight, 'left':'0', 'transition':'1s'});
	}
	if (x >= windowHeight*3 && x < windowHeight*4) {
		$('.home3Main').css({'position':'absolute', 'top': 0, 'left':'0', 'transition':'1s'});
		$('.home4Main').css({'position':'absolute', 'top': x-windowHeight*3, 'left':'0', 'transition':'0s'});
		$('.home5Main').css({'position':'absolute', 'top': windowHeight, 'left':'0', 'transition':'1s'});
	}
	if (x >= windowHeight*4 && x < windowHeight*5) {
		$('.home4Main').css({'position':'absolute', 'top': 0, 'left':'0', 'transition':'1s'});
		$('.home5Main').css({'position':'absolute', 'top': x-windowHeight*4, 'left':'0', 'transition':'0s'});
	}
}

var master = document.getElementById('master');
var windowHeight = $(window).height();
var scroll = 0;



//btnSlide(2)
var btnSlideMainLine = 0;
var home3ImgItem = 0;
var home3RightNameLine = 0;

function btnSlideUp(){
	btnSlideMainLine -= 50;
	home3ImgItem -= $(window).height();
	home3RightNameLine -= 300;

	$('.btnSlideMainLine').css('margin-top', btnSlideMainLine);
	$('.home3ImgLine').css('margin-top', home3ImgItem);
	$('.home3RightNameLine').css('margin-top', home3RightNameLine);

	if (btnSlideMainLine%300 == 0 && btnSlideMainLine < 0) {
		$('.btnSlideMainLine').append($('.btnSlideMainLine').html());
	}
	if (home3ImgItem%($(window).height()*6) == 0 && home3ImgItem<0) {
		$('.home3ImgLine').append($('.home3ImgLine').html());
	}
	if (home3RightNameLine%1800 == 0 && home3RightNameLine<0) {
		$('.home3RightNameLine').append($('.home3RightNameLine').html());
	}

}
function btnSlideDown(){

	btnSlideMainLine += 50;
	home3ImgItem += $(window).height();
	home3RightNameLine += 300;
	console.log(btnSlideMainLine);
	//Khi vượt quá giới hạn
	if (btnSlideMainLine > 0) {
		//tắt hiệu ứng
		$('.btnSlideMainLine').css('transition', '0s');
		$('.home3ImgLine').css('transition', '0s');
		$('.home3RightNameLine').css('transition', '0s');
		//chuyển cảnh
		$('.btnSlideMainLine').css('margin-top', -300);
		$('.home3ImgLine').css('margin-top', -$(window).height()*6);
		$('.home3RightNameLine').css('margin-top', -1800);
		//đợi và bật hiệu ứng
		setTimeout(function(){
			$('.btnSlideMainLine').css('transition', '1s');
			$('.home3ImgLine').css('transition', '1s');
			$('.home3RightNameLine').css('transition', '1s');
		},20)
		//set lại gía trị	
		btnSlideMainLine = -250;
		home3ImgItem = -$(window).height()*5;
		home3RightNameLine = -1500;
	}
	//đợi và chạy chuyển động như bình thường
	setTimeout(function(){
		$('.btnSlideMainLine').css('margin-top', btnSlideMainLine);
		$('.home3ImgLine').css('margin-top', home3ImgItem);
		$('.home3RightNameLine').css('margin-top', home3RightNameLine);
	},50);
}



$(document).ready(function(){
	$('.listPage ul li a').hover(function(){
		$('.imageBig img').attr('src', $(this).find('.link').text());
		$('.title .titleMain').text($(this).find('.text').text());
		$('.title p').text($(this).find('.content').text());
	});

	$('.home').height(windowHeight);
	$('.home').width($(window).width());

	$('.home3ImgItem').height($(window).height());

	$('.backgroundBody').height(windowHeight);
	$('.backgroundBody').width($(window).width());
	var home4MainLineLeft = 0;
	
  	$(".owl-carousel").owlCarousel({
  		autoplay:true,
	    autoplayTimeout:5000,
	    autoplayHoverPause:true
  	});

	if (scroll == 1) {
		$('#master').css('overflow-y','scroll');
	}

	$('.btnSlideItem.up').click(function(){
		btnSlideUp();
	});
	$('.btnSlideItem.down').click(function(){
		btnSlideDown();
	});
	

	$('.home.home3').hover(function(){
		showImgHome3();
	});
	$('.home.home5').hover(function(){
		showMessHome5();
	});
	
				
});