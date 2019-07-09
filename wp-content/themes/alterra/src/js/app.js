import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal'

window.jQuery = window.$ = jquery;

import 'flickity/dist/flickity.css';

(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').click(function () {
        var menu = $('.menu');
        $(this).toggleClass('active');
        if (menu.is(':visible')) {
            menu.slideUp();
        } else {
            menu.slideDown();
            $(menu).css("display", 'flex');
        }
    });

    /**
     * Form-label
     */

    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parents('.form-group').addClass('in-focus');
        } else {
            $(this).parents('.form-group').removeClass('in-focus');
        }
    });


    /**
     * Scroll link
     */

    $(".scroll-link").on("click", function (event) {
        event.preventDefault();

        var id = $(this).attr('href');

        if (id.length > 1) {

            var top = $(id).offset().top;

            $('body,html').animate({
                scrollTop: top
            }, 1500);
        }
    });

    /**
     * Modal
     */
    var packageModal = $('.custom-modal--package');
    var closeModal = $('.close-modal');
    var modalMask = $('.modal-mask');

    $('.open-package').on('click', function (e) {
        e.preventDefault();
        $(packageModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(packageModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(packageModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            $(packageModal).removeClass('active');
            $(modalMask).removeClass('active');
        }
    });

    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.header-banner-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.header-banner__decoration-text', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.reasons__decoration-text', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.themes__decoration-text', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.themes-item', {
        origin: 'top',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.themes-img', {
        origin: 'left',
        delay: 450,
        distance: '200px',
    });
    ScrollReveal().reveal('.packages-card--individuals', {
        origin: 'left',
        delay: 450,
        distance: '300px',
        scale: 0.75
    });
    ScrollReveal().reveal('.packages-card--legal', {
        origin: 'right',
        delay: 450,
        distance: '300px',
        scale: 0.75
    });
})(jQuery)