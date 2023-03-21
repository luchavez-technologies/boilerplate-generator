<?php

namespace Luchavez\BoilerplateGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class BoilerplateGenerator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'boilerplate-generator';
    }
}
