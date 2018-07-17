$(document).ready(function(){
    $(".btnToggle").click(function(){
        $(".masterContentToggle").slideToggle();
    });

    $(".btnAddHis").click(function(){
    	$(this).hide();
    	$(".formAddHis").slideDown();
    });


    $('.btnShowDetail').click(function(){
    	var content = $(this).siblings(".fieldHidden").text();
    	$('.modal-body').text(content);
    });
});