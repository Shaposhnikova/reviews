<?php

class Sasha_Reviews_Block_Review extends Mage_Core_Block_Template
{
    public function getName($name)
    {
        return $name;
    }

    public function getReviewsCollection()
    {
        $collection = Mage::getModel('reviews/reviews')->getCollection();
        return $collection;
    }
}