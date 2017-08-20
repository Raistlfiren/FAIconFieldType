<?php

namespace Raistlfiren\FAIconFieldType\Field;

use Bolt\Storage\Field\Type\FieldTypeBase;
use Doctrine\DBAL\Types\Type;

class FAIconPickerField extends FieldTypeBase
{

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
        return Type::getType('text');
    }

    public function getStorageOptions()
    {
        return ['default'=>''];
    }
}