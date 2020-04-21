<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Itella\Cod\Block\Form;

/**
 * Block for Cash On Delivery payment method form
 */
class Cod extends \Magento\OfflinePayments\Block\Form\AbstractInstruction
{
    /**
     * Cash on delivery template
     *
     * @var string
     */
    protected $_template = 'Itella_Cod::form/cod.phtml';
}
