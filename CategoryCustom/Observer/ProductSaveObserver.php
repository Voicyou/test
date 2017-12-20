<?php
namespace Sourabh\CategoryCustom\Observer;
use Magento\Framework\Event\ObserverInterface;

class ProductSaveObserver implements ObserverInterface
{
    protected $context;
    public function __construct(
    \Magento\Framework\View\Element\Context $context
  ){
        $this->context = $context;
  }

  public function execute(\Magento\Framework\Event\Observer $observer)
  {
      echo "<pre>";
      die(print_r($observer->getEvent()->getProduct()->getData()));
  }
}


