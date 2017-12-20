<?php

namespace Sourabh\CategoryCustom\Model\ResourceModel;


class CategoryAttAssign extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     *
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfigInterface
     */
    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context,
                                \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfigInterface
    )
    {
        $this->scopeConfigInterface = $scopeConfigInterface;
        $this->resource = $context->getResources();
        parent::__construct($context);
    }

    public function _construct()
    {
        $this->_init('sourabh_category_task', 'id');
    }
}