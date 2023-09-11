<?php

namespace Zammad;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin
{

    public function __construct(array $config = array())
    {
        $config += [
            'title' => env('ZAMMAD_TITLE','Duvidas? fale conosco'),
            'enabled' => env('ZAMMAD_ENABLED',false),
            'url' => env('ZAMMAD_URL', null),
            'background' => env('ZAMMAD_BACKGROUD_COLLOR','#121212'),
        ];
        parent::__construct($config);
    }

    public function _init()
    {
        $app = App::i();

        $self = $this;

        $app->hook('mapasculturais.body:after', function() use ($app, $self){
            if($self->config['enabled']){
                $app->view->part('app-zammad', $self->config);
            }
        });
    }

    public function register()
    {
    }
}
