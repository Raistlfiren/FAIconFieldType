<?php

namespace Raistlfiren\FAIconFieldType;

use Raistlfiren\FAIconFieldType\Field\FAIconPickerField;
use Raistlfiren\FAIconFieldType\Provider\FAIconFieldTypeProvider;
use Bolt\Extension\SimpleExtension;
use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\Controller\Zone;

class FAIconFieldTypeExtension extends SimpleExtension
{

    public function getServiceProviders()
    {
        return [
            $this,
            new FAIconFieldTypeProvider()
        ];
    }
        
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
        $style = (new Stylesheet('css/fontawesome-iconpicker.min.css'))
            ->setZone(Zone::BACKEND);
        $js = (new JavaScript('js/fontawesome-iconpicker.js'))
            ->setZone(Zone::BACKEND);
        $start = (new JavaScript('js/start.js'))
            ->setZone(Zone::BACKEND);

        return [
            $style,
            $js,
            $start
        ];
    }
}
