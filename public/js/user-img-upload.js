$(document).ready(function () {
    $(".img-div").mouseenter(function () { 
        $(".img-cover").animate({
            bottom: '0vw'
        },'fast');
    });
    $(".img-div").mouseleave(function () { 
        $(".img-cover").animate({
            bottom: '-5vw'
        },'fast');
    });

    $('.img-cover').on('click', function() {
        $('#img-upload').trigger('click');
    });
});