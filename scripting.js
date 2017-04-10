//all
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#topmenu').addClass('fixed');
        $('#hamburger_list').css('position', 'fixed');
        $('#hamburger_list').css('top', '30px');
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('#topmenu').removeClass('fixed');
        $('#hamburger_list').css('position', 'relative');
        $('#hamburger_list').css('top', '0px');
        $('.scrolltop').stop(true, true).fadeOut();
    }
});

$(function(){
    $(".scroll").click(function(){
        $("html,body").animate({scrollTop:$(".thetop").offset().top},"1000");
        return false;
    });
});

//index
$(document).ready(function () {
    $(".indexContent-h1").hide();
    $(".indexContent-h1").fadeIn(3000);
    $(".indexContent-h1").slideUp(3000);
});

$(document).ready(function () {
    $(".indexContent-h2").hide();
    $(".indexContent-h2").delay(3000);
    $(".indexContent-h2").fadeIn(3000);
});

$(document).ready(function () {
    $("#indexTopmenu").hide();
    $("#indexTopmenu").delay(3000);
    $("#indexTopmenu").fadeIn(3000);
});

//other
$("#hamburger_list").hide();
$(".hamburger_topmenu").click(function () {
    $("#hamburger_list").slideToggle();
});

$("#hamburger_projectList").hide();
$("#hamburger_projectList-show").click(function () {
    if ($("#hamburger_projectList").is(':hidden') == true) {
        $("#hamburger_projectList").slideToggle();
        return false;
    }
});

$(".topcontact_button").click(function () {
    $(this).slideUp('slow', function () {
        $(".topcontact").css("display", "block");
    });
});