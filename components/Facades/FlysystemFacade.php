<?php
namespace Components\Facades;

use Bootstrap\Facades\Facade;

class FlysystemFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'flysystem_manager';
    }
}