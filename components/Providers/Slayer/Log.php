<?php
namespace Components\Providers\Slayer;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Bootstrap\Services\Service\ServiceProvider;

class Log extends ServiceProvider
{
    protected $alias  = 'log';
    protected $shared = false;

    public function register()
    {
        $logger = new Logger('slayer');

        $logger->pushHandler(
            new StreamHandler(
                config()->path->logs . 'slayer.log',
                Logger::DEBUG
            )
        );

        return $logger;
    }
}