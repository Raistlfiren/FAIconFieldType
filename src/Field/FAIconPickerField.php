<?php

namespace Raistlfiren\FAIconFieldType\Field;

use Bolt\Field\FieldInterface;

class FAIconPickerField implements FieldInterface {

    public function getName()
    {
        return 'faiconpicker';
    }

    public function getTemplate()
    {
        return '_faiconpicker.twig';
    }

    public function getStorageType()
    {
        return 'text';
    }

    public function getStorageOptions()
    {
        return array('default'=>'');
    }

}