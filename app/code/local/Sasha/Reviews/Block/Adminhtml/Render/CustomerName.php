<?php

/**
 * Tim
 *
 * @category  Tim
 * @package   Tim_CustomerWithoutOrder
 * @copyright Copyright (c) 2015 Tim (http://tim.pl)
 * @author    Bogdan Bakalov <bakalov.bogdan@gmail.com>
 */
class Sasha_Reviews_Block_Adminhtml_Render_CustomerName extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        $customerId = $row->getData($this->getColumn()->getIndex());
        $customer = Mage::getModel('customer/customer')->load($customerId);
        $customerName = $customer->getFirstname() . ' ' . $customer->getLastname();

        return $customerName;
    }
}