<?php
namespace KoderHut\Dummy;

/**
 * Class Attribute
 *
 * @package KoderHut\Dummy
 */
class Attribute
{

    /**
     * Method used to allow access to data from Twig templates using the
     * attribute() function in Twig
     *
     * @param mixed $param
     *
     * @return string
     */
    public function getVariable($param)
    {
        return "Method {Attribute::getVariable()} has been called and received: {$param}";
    }
}