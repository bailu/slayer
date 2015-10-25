<?php
namespace Components\Providers\Slayer;

use Bootstrap\Services\Service\ServiceProvider;
use Bootstrap\Support\Redirect\Redirect as SupportRedirect;

class Redirect extends ServiceProvider
{
    protected $alias  = 'redirect';
    protected $shared = false;

    public function register()
    {
        return new SupportRedirect;
    }
}