$(document).ready(function()
 {  

    function add(){$("nav").addClass('trans');}

    
    $(window).on("scroll",function(){
        if($(this).scrollTop()>1)
            $("nav").addClass('trans');
        else $("nav").removeClass('trans');
    }); 
 });

//  if($(this).scrollTop()>0)
//         $("nav").animate($("nav").addClass('trans'),3000);
//         else
//             $("nav").animate($("nav").removeClass('trans'),3000);