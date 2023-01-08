<?php

namespace Custom\EavDemo\Model\Config;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Options extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label'=>_('Gold'),'value'=>'gold'],
            ['label'=>_('Silver'),'value'=>'silver'],
            ['label'=>_('Bronze'),'value'=>'bronze'],
        ];
        return $this->_options;
    }
}
