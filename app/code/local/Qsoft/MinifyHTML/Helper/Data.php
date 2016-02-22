<?php
/**
 * QsoftVietnam - MINIFY HTML
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the The MIT License (MIT)
 * that is bundled with this package in the file LICENSE.txt.
 *
 * @category    QsoftVietnam
 * @package     QsoftVietnam_MinifyHTML
 * @copyright   Copyright (c) 2015 QsoftVietnam
 * @license     The MIT License (MIT)
 */


class PAJ_MinifyHTML_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isActive()
    {
        return Mage::getStoreConfig('minifyhtml/general/enable_minify');
    }
}