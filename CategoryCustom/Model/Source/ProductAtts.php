<?php

namespace Sourabh\CategoryCustom\Model\Source;

class ProductAtts implements \Magento\Framework\Option\ArrayInterface
{
	protected $attributeFactory;
	public function __construct(\Magento\Catalog\Model\ResourceModel\Eav\Attribute $attributeFactory)
	{
		$this->attributeFactory = $attributeFactory;
	}
    public function toOptionArray()
    {
        $attributeInfo = $this->attributeFactory->getCollection()->addFilter('entity_type_id',4);
        //echo "<pre>";
        //die(print_r($attributeInfo->getData()));
        $index = 0;
        $attributesData = array();
        foreach($attributeInfo as $attributes)
        {
            $attributesData[$index]['value'] = $attributes->getAttributeId();
            $attributesData[$index]['label'] = $attributes->getFrontendLabel();
            $index++;
        }
        return $attributesData;
    }
}