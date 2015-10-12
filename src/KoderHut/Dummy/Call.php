<?php
namespace KoderHut\Dummy;

/**
 * Class Call
 *
 * Used as example for the dot notation object data access using
 * __call PHP magic method
 *
 * @package KoderHut\Dummy
 */
class Call
{

    /**
     * Example of overriding __call to allow access from Twig templates
     * to the object data. You can use either obj.var_name or obj.method()/obj.method(params)
     *
     * @param string $method
     * @param array  $params
     *
     * @return string
     */
    public function __call($method, $params)
    {
        $params = var_export($params, true);

        return "Method {Call::__call()} has been called and received the following params: {$method} and {$params}";
    }
}