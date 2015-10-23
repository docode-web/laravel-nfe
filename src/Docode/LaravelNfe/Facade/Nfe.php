<?php
namespace Docode\LaravelNfe\Facade;

use Illuminate\Support\Facades\Facade;

class Nfe extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Docode\LaravelNfe\Lib\Nfe::class;
    }
}