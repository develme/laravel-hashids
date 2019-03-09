<?php
/**
 * Created by PhpStorm.
 * User: verronknowles
 * Date: 3/9/19
 * Time: 12:12 PM
 */

namespace DevelMe\Hashids;

/**
 * Class Hashids
 * @package DevelMe\Hashids
 */
class Hashids
{
    /**
     * @var \Hashids\Hashids
     */
    private $hasher;

    /**
     * Hashids constructor.
     * @param \Hashids\Hashids $hasher
     */
    public function __construct(\Hashids\Hashids $hasher)
    {
        $this->hasher = $hasher;
    }

    public function encode($value)
    {
        return $this->hasher->encode($value);
    }

    public function decode($value)
    {
        return current($this->hasher->decode($value));
    }
}