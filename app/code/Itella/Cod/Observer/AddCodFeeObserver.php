<?php
namespace Itella\Cod\Observer;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;

class AddCodFeeObserver implements ObserverInterface
{
    /**
     * Set payment fee to order
     *
     * @param EventObserver $observer
     * @return $this
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $quote = $observer->getQuote();
        $fee = $quote->getItellaCodFee();
        $order = $observer->getOrder();
        $order->setData('itella_cod_fee', $fee);

        return $this;
    }
}