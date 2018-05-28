$(document).ready(function(){
    $(".btnToggle").click(function(){
        $(".masterContentToggle").slideToggle();
    });

    $(".btnAddHis").click(function(){
    	$(this).hide();
    	$(".formAddHis").slideDown();
    });
});