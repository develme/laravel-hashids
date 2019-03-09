<?php
/**
 * Created by PhpStorm.
 * User: verronknowles
 * Date: 3/9/19
 * Time: 12:10 PM
 */

namespace DevelMe\Hashids\Facades;


class Hashids extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return \DevelMe\Hashids\Hashids::class;
    }
}