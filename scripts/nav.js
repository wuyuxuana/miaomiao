/**
 * Created by Administrator on 2016/9/2.
 */

/*nav_l*/
/*styles({"color":"black"})73B9FF*/
$(document).ready(function(){
    $(".nav_l_01").mouseover(function(){
        $(".nav_l_01").animate({top:'2px',opacity:'0.8'},"slow");
    });
});
$(document).ready(function(){
    $(".nav_l_01").mouseout(function(){
        $(".nav_l_01").animate({top:'0',opacity:'1'},"slow");
    });
});


/**/

$(document).ready(function(){
    $(".nav_l_02").mouseover(function(){
        $(".nav_l_02").animate({top:'2px',opacity:'0.8'},"slow");
    });
});
$(document).ready(function(){
    $(".nav_l_02").mouseout(function(){
        $(".nav_l_02").animate({top:'0',opacity:'1'},"slow");
    });
});
$(document).ready(function(){
    $(".nav_l_03").mouseover(function(){
        $(".nav_l_03").animate({top:'2px',opacity:'0.8'},"slow");
    });
});
$(document).ready(function(){
    $(".nav_l_03").mouseout(function(){
        $(".nav_l_03").animate({top:'0',opacity:'1'},"slow");
    });
});

    /*sz*/
//$(document).ready(function(){
//    $(".nav_sz").mouseover(function(){
//        $("#nav_sz_jt").animate({top:'8px'},700);
//    });
//});
//$(document).ready(function(){
//    $(".nav_sz").mouseout(function(){
//        $("#nav_sz_jt").animate({top:'0'},700);
//    });
//});


$(document).ready(function(){
    $("#publish_02").focus(function () {
        $("#publish_02").addClass("publish_02_sd")
    });
});
$(document).ready(function(){
    $("#publish_02").blur(function () {
        $("#publish_02").removeClass("publish_02_sd")
    });
});

/*������ı������*/
$(document).ready(function(){
    $(".nav_ss_text").focus(function () {
        $(".nav_ss_text").addClass("nav_ss_text_bj");
    });
});
$(document).ready(function(){
    $(".nav_ss_text").blur(function () {
        $(".nav_ss_text").removeClass("nav_ss_text_bj");
    });
});

/*下拉*/
$(document).ready(function(){
    $(".nav_sz").mouseover(function () {
        $("#nav_sz_xl").slideDown().mouseleave(function(){
        	$(this).slideUp()
        });
    });
});
//$(document).ready(function(){
//    $(".nav_sz").mouseover(function () {
//        $(".nav_sz").mouseout(function(){
//        	$("#nav_sz_xl").slideUp()
//        });
//    });
//});
