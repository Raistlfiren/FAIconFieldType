<?php

namespace Raistlfiren\FAIconFieldType;

use Bolt\Extension\Raistlfiren\FAIconFieldType\Field\FAIconPickerField;
use Bolt\Extension\SimpleExtension;
use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\Controller\Zone;

class FAIconFieldTypeExtension extends SimpleExtension
{
    protected function registerFields()
    {
        return [
            new FAIconPickerField()
        ];
    }

    protected function registerTwigPaths()
    {
        return [
            'templates'
        ];
    }

    protected function registerAssets()
    {
        $style = (new Stylesheet())->setZone(Zone::BACKEND);
        $js = (new JavaScript())->setZone(Zone::BACKEND);

        return [
            $style,
            $js
        ];
    }
}
