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


    $(document).ready(function() {
    $('#blogCarousel').carousel({
        interval: 10000
    })
});



});

function openNav() {
  
   document.getElementById("searchLay").style.display = "block";
}

function closeNav() {
    document.getElementById("searchLay").style.display = "none";
}



// $(document).ready(function(){
//     $(".dropdown").hover(            
//         function() {
//             $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
//             $(this).toggleClass('open');        
//         },
//         function() {
//             $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
//             $(this).toggleClass('open');       
//         }
//     );





    // BS tabs hover (instead - hover write - click)
//     $('.tab-menuleft a').hover(function (e) {
//       e.preventDefault()
//       $(this).tab('show')
//     })
// });