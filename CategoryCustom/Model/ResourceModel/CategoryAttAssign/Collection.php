<?php

namespace Sourabh\CategoryCustom\Model\ResourceModel\CategoryAttAssign;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Sourabh\CategoryCustom\Model\CategoryAttAssign', 'Sourabh\CategoryCustom\Model\ResourceModel\CategoryAttAssign');
    }
}