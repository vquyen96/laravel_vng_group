function showMessHome5(){
	setTimeout(function(){
		$('.home501 ').css('transform','scale(1) translate(0% ,0)');
	}, 1000);
	setTimeout(function(){
		$('.home502 ').css('transform','scale(1) translate(0% ,0)');
	}, 1500);
	setTimeout(function(){
		$('.home503 ').css('transform','scale(1) translate(0% ,0)');
	}, 2000);

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
		$('.home3Item').eq(3).find('.home3ItemImg').css('opacity','0');
	}, 3000);
	setTimeout(function(){
		$('.home3Item').eq(2).find('.home3ItemImg').css('opacity','0');
	}, 3200);
	setTimeout(function(){
		$('.home3Item').eq(1).find('.home3ItemImg').css('opacity','0');
	}, 3400);
	setTimeout(function(){
		$('.home3Item').eq(0).find('.home3ItemImg').css('opacity','0');
	}, 3600);
			
}
var master = document.getElementById('master');
var windowHeight = $(window).height();
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
	console.log(x);
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
// var z = 0;
// function scrollFixScreen(x) {

// 	if(x > z){
// 		scrollDown();
// 		z=x;
// 	}
// 	else{
// 		scrollUp();
// 	}
// }
$(document).ready(function(){
	$('.listPage ul li a').hover(function(){
		$('.imageBig img').attr('src', $(this).find('.link').text());
		$('.title .titleMain').text($(this).find('.text').text());
		$('.title p').text($(this).find('.content').text());
	});
	
	
	


	console.log($(window).height());
	$('.home').height(windowHeight);
	$('.home').width($(window).width());

	$('.home3Item').height(windowHeight);

	$('.backgroundBody').height(windowHeight);
	$('.backgroundBody').width($(window).width());
	var home4MainLineLeft = 0;
	
  	$(".owl-carousel").owlCarousel();

	
	console.log($('.home3Item').length);
	console.log(windowHeight);
	master.onscroll = function(){
		var x = master.scrollTop;
		setBgDot();
		// if (x < windowHeight) {
		// 	$('.home1').css('margin-top',x);
		// }
		// else{
		// 	$('.home1').css('margin-top','0');
		// }
		// if (x >= windowHeight && x < windowHeight*2) {
		// 	$('.home1').animate({
		//       	marginTop: 0
		//     }, 800);
		// 	$('.home2').css('margin-top',x - windowHeight);
		// }
		// else{
		// 	$('.home2').css('margin-top','0');
		// }
		// if (x >= windowHeight*2 && x < windowHeight*3) {
		// 	$('.home3Main').css('top',x - windowHeight*2);
		// }
		// else{
		// 	$('.home3Main').css('top','0');
		// }
		if(x > windowHeight*2){
			showImgHome3();
		}
		
	}
	setBgDot()
	$('.home').click(function(){
		scrollDown();
	});
	$('.btnScrollDown').click(function(){
		scrollDown();
		
	});
	$('.dotScroll_1').click(function(){
		$('.master').animate({
	      	scrollTop: 0
	    }, 800);
	    
	});
	$('.dotScroll_2').click(function(){
		$('.master').animate({
	      	scrollTop: windowHeight
	    }, 800);
	    
	});
	$('.dotScroll_3').click(function(){
		$('.master').animate({
	      	scrollTop: windowHeight*2
	    }, 800);
	    
	});
	$('.dotScroll_4').click(function(){
		$('.master').animate({
	      	scrollTop: windowHeight*3
	    }, 800);
	    
	});
	$('.dotScroll_5').click(function(){
		$('.master').animate({
	      	scrollTop: windowHeight*4
	    }, 800);
	    
	});
	
				
});