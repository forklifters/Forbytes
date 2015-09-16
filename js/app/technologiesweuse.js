define(['jquery'], function ($) {
    var currentTechItem = 'dot-net';    var techsView = $('.services').find('.technologies-we-use');    var techArticle = techsView.find('article');    var nav = techArticle.find('nav');
    var autoChangerIntervalMetadata;    var selectItem = function (itemKey) {
        currentTechItem = itemKey;        var menuItemSelector = '.' + itemKey + '-item';        nav.find('li:not(' + menuItemSelector + ')').removeClass('active');        nav.find(menuItemSelector).addClass('active');        var techInfoSelector = '.' + itemKey + '-info';        var techImgSelector = '.' + itemKey + '-img';        var leftPart = techArticle.find('.left-part');        var rightPart = techArticle.find('.right-part');        rightPart.off();        rightPart.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            techArticle.removeClass();            techArticle.addClass('clearfix ' + itemKey);            rightPart.find('> div:not(' + techInfoSelector + ')').hide();            rightPart.find(techInfoSelector).removeClass('fadeOutRight').show().addClass('animated fadeIn');
        });        leftPart.off();        leftPart.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            leftPart.find('.tech-icons span:not(' + techImgSelector + ')').hide();            leftPart.find(techImgSelector).removeClass('fadeOut').show().addClass('animated fadeIn');
        });        rightPart.find('> div:not(' + techInfoSelector + ')').addClass('animated fadeOutRight');        leftPart.find('.tech-icons span:not(' + techImgSelector + ')').addClass('animated fadeOut');
    }
    var init = function () {
        nav.find('li').on('click', function () {
            clearInterval(autoChangerIntervalMetadata);
            var itemKey = $(this).data('item');
            selectItem(itemKey);
        });

        selectItem(currentTechItem);
    };

    var runAutoChanger = function () {
        autoChangerIntervalMetadata = setInterval(function () {
            var currentItemIdx = techsArray.indexOf(currentTechItem);            var nextItemToSelect = techsArray[0];            if (currentItemIdx < techsArray.length - 1) {
                nextItemToSelect = techsArray[currentItemIdx + 1];
            }            selectItem(nextItemToSelect);
        }, 3000);
    };

    var stopAutoChanger = function () {
        clearInterval(autoChangerIntervalMetadata);
    }

    return {
        init: init,
        runAutoChanger: runAutoChanger,
        stopAutoChanger: stopAutoChanger
    }
})