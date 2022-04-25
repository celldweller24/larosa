require('./bootstrap');

import $ from 'jquery';
import Cookies from 'js-cookie';

window.$ = window.jQuery = $;

$(function() {

    /* Age check window actoins */
    if (!Cookies.get('ageCheck')) {
        $('.age-check-box').addClass('visible');
        $('.overlay').css('display', 'block');
    }

    $('button.check-yes').on('click', function () {
        Cookies.set('ageCheck', 'true', { expires: 1 });
        $('.age-check-box').removeClass('visible');
        $('.overlay').css('display', 'none');
    });

    $('button.check-no').on('click', function () {
        window.location.replace("https://www.google.com/");
    });

    /* Open-close mobile menu */
    $('header .mobile-control-block .menu').on('click', function () {
        let windowHeight = $(document).height();
        $('.left').height(windowHeight).css('display', 'block');
        $('.overlay').css('display', 'block');
    });

    $('.left .sidebar .menu-close-button').on('click', function () {
        $('.left').css('display', 'none');
        $('.overlay').css('display', 'none');
    });
});

