require('./bootstrap');

import $ from 'jquery';
import Cookies from 'js-cookie';
import 'jquery-ui/ui/widgets/sortable.js';
import { Fancybox } from "@fancyapps/ui";

window.$ = window.jQuery = $;

$(function() {

    /* Age check window actions */
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


    /* Masseuses list view */
    $('.masseuses-list .masseuses li').on('click', function () {
        $('.masseuses-list .masseuses').find('li.active').removeClass('active');
        $(this).addClass('active');

        let dataId = $(this).find('a').data('id');
        $('.photo-wrapper').removeClass('active');
        $('*[data-id=' + dataId + ']').addClass('active');
    });


    /* Min height for gallery block */
    let masseusesListHeight = $('.masseuses-list').height();
    $('.gallery-view-block').css('min-height', masseusesListHeight);


    /* Sorting employees admin panel */
    $('#sortable').sortable({
        placeholder: 'ui-state-highlight',
        update: function( event, ui ) {
            let currentElement = ui.item[0];
            let currentElementSort = currentElement.dataset.sort;

            let previousElementSort = (currentElement.previousElementSibling !== null)
                ? currentElement.previousElementSibling.dataset.sort
                : null;

            let nextElementSort = (currentElement.nextElementSibling)
                ? currentElement.nextElementSibling.dataset.sort
                : null;

            if (currentElementSort < previousElementSort) {

                (function setPreviousSort(previoutSortElement) {
                    let previousElement = previoutSortElement.previousElementSibling;

                    if (previousElement !== null) {

                        let originalSort = parseInt(previousElement.dataset.sort);

                        if (originalSort !== 1 && parseInt(previousElement.dataset.sort) !== parseInt(currentElementSort) - 1) {
                            previousElement.dataset.sort = parseInt(previousElement.dataset.sort) - 1;
                            setPreviousSort(previousElement);
                        }
                    }
                })(currentElement);

                currentElement.dataset.sort = previousElementSort;

            } else {

                // Get sort value of last element
                let lastElementSort = (function searchLastSort(currentElement) {

                    let nextElement = currentElement.nextElementSibling;

                    return (nextElement !== null)
                        ? searchLastSort(nextElement)
                        : currentElement.dataset.sort;

                })(currentElement);

                console.log(ui.item[0]);
                console.log(currentElement.nextElementSibling);
                console.log(lastElementSort);

                (function setNextSort(nextSortElement) {
                    let nextElement = nextSortElement.nextElementSibling;

                    /*if (nextSortElement.dataset.sort === lastElementSort) {

                    }*/

                    if (nextElement !== null) {

                        if (
                            parseInt(nextSortElement.dataset.sort) + 1 === parseInt(currentElementSort) ||
                            nextElement.dataset.sort !== lastElementSort
                        ) {
                            nextElement.dataset.sort = parseInt(nextElement.dataset.sort) + 1;
                            setNextSort(nextElement);
                        }
                    }
                })(currentElement);

                currentElement.dataset.sort = nextElementSort;
            }

            /* Update sorting in DB */
            let allResortedElementsData = [];

            $('.employee-list li').each(function() {
                let elementData = {
                    id: $(this).data('id'),
                    sort: $(this).data('sort')
                }

                allResortedElementsData.push(elementData);
            });

            console.log(allResortedElementsData)

            /*$.ajax('admin/employee-sort', {
                type: 'GET',
                data: {allResortedElementsData},

                success: function (data, status, xhr) {
                    location.reload();
                },

                error: function (jqXhr, textStatus, errorMessage) {
                    console.log(errorMessage);
                }
            });*/
        }
    });
});




