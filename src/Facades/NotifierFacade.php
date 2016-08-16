<?php

namespace BeautyCoding\Notifier\Facades;

use Illuminate\Support\Facades\Facade;

class NotifierFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Notifier';
    }
}
