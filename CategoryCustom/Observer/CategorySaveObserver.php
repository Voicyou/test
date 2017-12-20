<?php
namespace Sourabh\CategoryCustom\Observer;
use Magento\Framework\Event\ObserverInterface;

class CategorySaveObserver implements ObserverInterface
{
    protected $context;
    protected $categoryAttAssign;
    public function __construct(
    \Magento\Framework\View\Element\Context $context,
    \Sourabh\CategoryCustom\Model\CategoryAttAssignFactory $categoryAttAssign
  ){
        $this->context = $context;
        $this->categoryAttAssign = $categoryAttAssign;
  }

  public function execute(\Magento\Framework\Event\Observer $observer)
  {
      $prodAtts = $this->context->getRequest()->getParam('sourabh_task_atts');
      if(!empty($prodAtts))
      {
          foreach($prodAtts as $key=>$value)
          {
              $setCateAttData = $this->categoryAttAssign->create()->getCollection()->addFieldToFilter('category_id',$this->context->getRequest()->getParam('entity_id'))->addFieldToFilter('catalog_attribute_id',$value);
              if(empty($setCateAttData->getData())){
                $setCateAttData = $this->categoryAttAssign->create();
                $setCateAttData->setCategoryId($this->context->getRequest()->getParam('entity_id'));
                $setCateAttData->setCatalogAttributeId($value);
                $setCateAttData->save();       
              }
          }
      }
  }
}


