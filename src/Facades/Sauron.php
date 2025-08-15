<?php

namespace Hetbo\Sauron\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hetbo\Sauron\Sauron
 */
class Sauron extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Hetbo\Sauron\Sauron::class;
    }
}
