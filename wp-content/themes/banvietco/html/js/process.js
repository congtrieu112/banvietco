$(document).ready(function() {
    $(".bv-read-more").on("click",function(e){
        e.preventDefault();
        $(this).slideUp("fast");
        var id = $(this).attr("href");
        $(id).slideDown("fast");
    });

    $(".icon-item").on("click",function(e){
    	e.preventDefault();
    	var id = $(this).data("link");
    	$(".bv-block").removeClass("actives");
    	$(id).addClass("actives");
    	$(".bv-block-item").removeClass("xam");
    	$(this).parent().addClass("xam");

    	$(id).slideToggle("slow");
    
    	
    });

    // $("body").on("click",".icon-hidden",function(e){
    // 	e.preventDefault();
    // 	var id = $(this).data("link");
    // 	$(id).css("display","none");
    // 	// alert("ok");
    // });

});

function custom_menu(){
    var menu_ul = $('.menu-left-ul-content > li > ul'),
        menu_a  = $('.menu-left-ul-content > li > a');
    menu_ul.hide();
    menu_a.click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true,true).slideDown('normal');
        } else {
            $(this).removeClass('active');
            $(this).next().stop(true,true).slideUp('normal');
        }
    });
}