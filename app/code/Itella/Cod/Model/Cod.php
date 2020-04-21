<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Itella\Cod\Model;

/**
 * Cash on delivery payment method model
 *
 * @method \Magento\Quote\Api\Data\PaymentMethodExtensionInterface getExtensionAttributes()
 *
 * @api
 * @since 100.0.2
 */
class Cod extends \Magento\Payment\Model\Method\AbstractMethod
{
    const PAYMENT_METHOD_CASHONDELIVERY_CODE = 'itella_cod';

    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = self::PAYMENT_METHOD_CASHONDELIVERY_CODE;

    /**
     * Cash On Delivery payment block paths
     *
     * @var string
     */
    //protected $_formBlockType = \Itella\Cod\Block\Form\Cod::class;

    /**
     * Info instructions block path
     *
     * @var string
     */
   // protected $_infoBlockType = \Magento\Payment\Block\Info\Instructions::class;;

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;

    
    
    public function isAvailable(\Magento\Quote\Api\Data\CartInterface $quote = null){
        if (!parent::isAvailable($quote)) {
            return false;
        }

		if ($quote->getItemVirtualQty() > 0) {
            return false; //can't use this method if cart contains virtual products
        }
        
        if (strtolower($quote->getShippingAddress()->getShippingMethod()) === "itella_parcel_terminal"){
            return false;
        }
        return true;
    }
}
