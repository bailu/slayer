<?php

namespace Components\Providers\Slayer;

use Bootstrap\Services\Service\ServiceProvider;
use Bootstrap\Support\Mail\Mail as SupportMail;
use Exception;

class Mail extends ServiceProvider
{
    protected $_alias = 'mail';

    protected $_shared = false;

    public function register()
    {
        $settings = config()->app->mailer;
        $classes = config()->app->mailer->classes->toArray();
        $adapter_class = @$classes[ $settings->adapter ];
        if (!$adapter_class) {
            throw new Exception('Adapter not found.');
        }

        return new SupportMail(new $adapter_class, $settings);
    }

}