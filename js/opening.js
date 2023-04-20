$(function(){
    $(".loader2").on('click',function(){
        console.log('clicked');
        this.animate({
            transform: 'rotateY(180deg)'
        },1000);
    });
});

