$(function () {

    $('.navButton').on('click', function () {

        $('.navMenu').toggleClass('navActive');
        $('.btn__menu').toggleClass('active');
        $('.navMenu__top, .navMenu__bottom').toggleClass('menuActive');

    });

    $('.toTop').on('click',function(){
        var position_top = $('#header').offset().top;
        $('html,body').animate({
            scrollTop : position_top, 
        },1300);
        $('.navMenu').removeClass('navActive');
        $('.btn__menu').removeClass('active');
        $('.navMenu__top, .navMenu__bottom').removeClass('menuActive');
    });
    $('.toKodawari').on('click',function(){
        var position_kodawari = $('#kodawari').offset().top;
        $('html,body').animate({
            scrollTop : position_kodawari -50, 
        },1300);
        $('.navMenu').removeClass('navActive');
        $('.btn__menu').removeClass('active');
        $('.navMenu__top, .navMenu__bottom').removeClass('menuActive');
    });
    $('.toOsinagaki').on('click',function(){
        var position_osinagaki = $('#osinagaki').offset().top;
        $('html,body').animate({
            scrollTop : position_osinagaki - 50, 
        },1300);
        $('.navMenu').removeClass('navActive');
        $('.btn__menu').removeClass('active');
        $('.navMenu__top, .navMenu__bottom').removeClass('menuActive');
    });
    $('.toOsirase').on('click',function(){
        var position_osirase = $('#osirase').offset().top;
        $('html,body').animate({
            scrollTop : position_osirase - 50, 
        },1300);
        $('.navMenu').removeClass('navActive');
        $('.btn__menu').removeClass('active');
        $('.navMenu__top, .navMenu__bottom').removeClass('menuActive');
    });
    $('.toTenpo').on('click',function(){
        var position_tenpo = $('#tenpo').offset().top;
        $('html,body').animate({
            scrollTop : position_tenpo - 50, 
        },1300);
        $('.navMenu').removeClass('navActive');
        $('.btn__menu').removeClass('active');
        $('.navMenu__top, .navMenu__bottom').removeClass('menuActive');
    });

});
