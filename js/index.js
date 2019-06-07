$(document).ready(function () {
    new WOW().init();
    $(window).scroll(function () {



        // thay doi background menu
        var scrollH = $(window).scrollTop();
        if(scrollH > 10 ){
          $('.menu').addClass('bg');
        }
        else{
            $('.menu').removeClass('bg');
        }

        // hieu ứng page 4
        var page3Top = $('.page3').offset().top;

        if(scrollH > (page3Top+100)){
            $('.imagepage4').addClass('chuyendong');
            $('.textpage4').addClass('fadeInDown animated');
        }
    });
});