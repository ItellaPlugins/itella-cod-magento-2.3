define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (Component,
              rendererList) {
        'use strict';
        rendererList.push(
            {
                type: 'itella_cod',
                component: 'Itella_Cod/js/view/payment/method-renderer/cod-method'
            }
        );
        return Component.extend({});
    }
);