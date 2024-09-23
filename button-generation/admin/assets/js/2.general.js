'use strict'

jQuery(document).ready(function($) {

    $('.wpie-tabs').on('click', '.wpie-tab-label', function() {
        $('.wpie-tabs .wpie-tab-label').removeClass('selected');
        $(this).addClass('selected');
    });

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('notice')) {
        const notice = $('.wpie-notice');
        $(notice).addClass('is-active');
        setTimeout(function (){
            $(notice).removeClass('is-active');
        }, 5000);
    }
});