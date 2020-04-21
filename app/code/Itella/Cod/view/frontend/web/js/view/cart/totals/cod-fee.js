
define(
    [
        'ko',
        'Itella_Cod/js/view/checkout/summary/cod-fee',
        'Itella_Cod/js/view/payment/cod-payments'
    ],
    function (ko, Component, cashondelivery) {
        'use strict';

        return Component.extend({
            isDisplayed: function () {
                return this.isFullMode();
            }
        });
    }
);