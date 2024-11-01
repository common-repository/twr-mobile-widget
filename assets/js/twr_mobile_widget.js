jQuery(document).ready(function($){
    $('.twr-next').on('click', function (e) {
        e.preventDefault();
        $('.' + $(this).attr('data-current')).hide();
        $('.' + $(this).attr('data-next')).show();
    });

    $('#twr-agree').on('click', function(e){
        e.preventDefault();
        if($(this).is(':checked')){
            $('.' + $(this).attr('data-current')).hide();
            $('.' + $(this).attr('data-next')).show();
        }
    });

    $('.twr-prev').on('click', function (e) {
        e.preventDefault();
        $('.' + $(this).attr('data-current')).hide();
        $('.' + $(this).attr('data-prev')).show();
    });
});