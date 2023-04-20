$(function () {
// パララックス効果
    $(window).bind('scroll',function(e){
        parallaxScroll();
    });
    function parallaxScroll() {
        var scrolled = $(window).scrollTop();
        $('#parallax-bg1').css('bottom', (15 - (scrolled * .06)) + '%');
    };
// 画面に入ったら文字表示
    $('.apearInview').on('inview', function(event, isInView) {
        if(isInView) { 
            $(this).addClass('apear');
        }
    });

});
