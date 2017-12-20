<?php

namespace Sourabh\CategoryCustom\Model;

class CategoryAttAssign extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Sourabh\CategoryCustom\Model\ResourceModel\CategoryAttAssign');
    }
}