<?php
/**
 * Created by PhpStorm.
 * User: quant
 * Date: 16/08/2016
 * Time: 11:45
 */

namespace SM\HelloWorld\Block;

class HelloWorld extends \Magento\Framework\View\Element\Template
{
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getStoreName()
    {
        return "This is " . $this->_storeManager->getWebsite()->getName();
    }
}