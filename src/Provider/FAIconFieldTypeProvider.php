<?php

namespace Raistlfiren\FAIconFieldType\Provider;

use Raistlfiren\FAIconFieldType\Field\FAIconPickerField;
use Bolt\Storage\FieldManager;
use Silex\Application;
use Silex\ServiceProviderInterface;

class FAIconFieldTypeProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['storage.typemap'] = array_merge($app['storage.typemap'], [
            'faiconpicker' => FAIconPickerField::class
        ]);
        $app['storage.field_manager'] = $app->share($app->extend('storage.field_manager', function (FieldManager $manager) {
            $manager->addFieldType('faiconpicker', new FAIconPickerField());
            return $manager;
        }));
    }
    public function boot(Application $app)
    {
    }
}