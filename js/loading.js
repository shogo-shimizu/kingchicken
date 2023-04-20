$(function () {

    imagesProgress();

    function imagesProgress() {
        var $container = $('#progress'),
            $progressBar = $container.find('.progress__bar'),
            $progressText = $container.find('.progress__text'),
            imgLoad = imagesLoaded('body'),
            imgTotal = imgLoad.images.length,
            imgLoaded = 0,
            current = 0,
            progressTimer = setInterval(updateProgress, 1000 / 60);

        imgLoad.on('progress', function () {
            imgLoaded++;
        });

        function updateProgress() {
            var target = (imgLoaded / imgTotal) * 100;

            current += (target - current) * 0.1;

            $progressBar.css({ width: current + '%' });
            $progressText.text(Math.floor(current) + '%');

            if (current >= 100) {
                clearInterval(progressTimer);
                $container.addClass('progress-complete');
                $progressBar.add('.progressText').delay(500).animate({
                    opacity: 0
                }, 500, function () {
                    $container.animate({
                        opacity:0
                    }, 1000,function(){
                        $container.css({
                            top: '-100%'
                        });
                    });
                });
            }
            if(current > 99.9){
                current = 100;
            }
        }
    }

});