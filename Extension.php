<?php

namespace Bolt\Extension\Raistlfiren\FAIconFieldType;

use Bolt\Application;
use Bolt\BaseExtension;

include_once 'FAIconPickerField.php';

class Extension extends BaseExtension
{
    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);

        //$this->config = $this->app['config'];
        $this->app['config']->getFields()->addField(new FAIconPickerField());

        if ($this->app['config']->getWhichEnd() == 'backend') {
            $this->app['htmlsnippets'] = true;
            $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");
        }
    }

    public function initialize() {
        $this->addCSS('assets/css/fontawesome-iconpicker.min.css');
        $this->addJavascript('assets/js/fontawesome-iconpicker.min.js', true);
    }

    public function getName()
    {
        return "faiconpicker";
    }

}






