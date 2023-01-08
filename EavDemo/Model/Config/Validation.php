<?php

namespace Custom\EavDemo\Model\Config;

use Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend;
use Magento\Framework\Exception\LocalizedException;

class Validation extends AbstractBackend
{
    public function validate($object)
    {
        if ($object->getData($this->getAttribute()->getAttributeCode()) < 10) {
            throw new LocalizedException(__('value must not be less then 10'));
        }
        return parent::validate($object);
    }
}
