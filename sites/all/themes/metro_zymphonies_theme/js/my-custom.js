// $(document).ready(function()
// {
//     var slider_width = $('.notification-div').width();//get width automaticly
//   $('#notification-id').click(function() {
//     if($(this).css("margin-right") == slider_width+"px" && !$(this).is(':animated'))
//     {
//         $('.notification-div').animate({"margin-right": '-='+slider_width});
//     }
//     else
//     {
//         if(!$(this).is(':animated'))//perevent double click to double margin
//         {
//             $('.notification-div').animate({"margin-right": '+='+slider_width});
//         }
//     }


//   });
//  });


function openNav() {
    document.getElementById("mySidenav").style.width = "400px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

$(".checkbox").click(function(){
    $(this).toggleClass('checked')
});