$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,1],
        pagination:true,
        autoPlay:true
    });

    $("#advancefilter").click(function(){

    	$(".showadvanceflte").slideToggle(500);

    });
});