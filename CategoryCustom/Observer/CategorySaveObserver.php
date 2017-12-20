<?php
namespace Sourabh\CategoryCustom\Observer;
use Magento\Framework\Event\ObserverInterface;

class CategorySaveObserver implements ObserverInterface
{
    protected $context;
    public function __construct(
    \Magento\Framework\View\Element\Context $context
  ){
        $this->context = $context;
    //Observer initialization code...
    //You can use dependency injection to get any class this observer may need.
  }

  public function execute(\Magento\Framework\Event\Observer $observer)
  {
      echo "<pre>";
      die(print_r($this->context->getRequest()->getParams()));
      //$observer->getEvent()->
      echo "<pre>";
      die(print_r($observer->getEvent()->getData()));
      die('observer');
    $myEventData = $observer->getData('myEventData');
    //Additional observer execution code...
  }
}


