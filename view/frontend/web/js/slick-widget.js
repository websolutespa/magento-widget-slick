/*
 * Copyright © Websolute spa. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
    'jquery',
    'slick'
], function ($) {
    'use strict';

    return function (config, elem) {
        $(elem).addClass('slick');

        if ($(elem).children().length > 1) {
            return $(elem).slick(config);
        }

        return null;
    };
});
