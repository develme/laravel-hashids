<?php
/**
 * Created by PhpStorm.
 * User: verronknowles
 * Date: 3/9/19
 * Time: 12:18 PM
 */

namespace DevelMe\Hashids\Traits;

use DevelMe\Hashids\Facades\Hashids;

/**
 * Trait HashModelRouteKey
 * @package DevelMe\Hashids\Traits
 */
trait HashModelRouteKey
{
    /**
     * @return mixed
     */
    public function getRouteKey()
    {
        return Hashids::encode(parent::getRouteKey());
    }

    /**
     * @param $value
     * @return mixed
     */
    public function resolveRouteBinding($value)
    {
        return parent::resolveRouteBinding(Hashids::decode($value));
    }
}