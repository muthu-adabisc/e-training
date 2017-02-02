
jQuery(document).ready(function($) {

//notification navigation
function openNav() {
    document.getElementById("mySidenav").style.width = "400px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

//checkbox
$('.form-checkbox').each(function(){
    $(this).hide().after('<div class="class_checkbox" />');

});


$('.class_checkbox').on('click',function(){
    $(this).toggleClass('checked').prev().prop('checked',$(this).is('.checked'))
});

//mobile slider
  $("#owl-demo").owlCarousel({
 
      navigation : true, // Show next and prev buttons
 
      slideSpeed : 300,
      paginationSpeed : 400,
 
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false
 
  });
 

});