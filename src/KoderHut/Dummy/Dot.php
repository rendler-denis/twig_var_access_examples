<?php
namespace KoderHut\Dummy;

/**
 * Class Dot
 * Used as example for the simple dot notation using __isset
 * and __get methods
 *
 * @package KoderHut\Dummy
 */
class Dot
{

    /**
     * Overriding __isset to check if var is set on object
     *
     * @param string $varName
     *
     * @return string
     */
    public function __isset($varName)
    {
        return "Method {Dot::__isset()} has been called and received: {$varName}";
    }

    /**
     * Overriding __get to retrieve the data from the dynamic variable
     *
     * @param string $varName
     *
     * @return string
     */
    public function __get($varName)
    {
        return "Method {Dot::__get()} has been called and received: {$varName}";
    }
}