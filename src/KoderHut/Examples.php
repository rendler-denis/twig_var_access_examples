<?php

namespace KoderHut;

/**
 * Class Examples
 *
 * @package KoderHut
 */
class Examples
{
    /**
     * @var null|\Twig_Environment
     */
    private $twig = null;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $loader     = new \Twig_Loader_Array([
            'dot_accessor.twig'       => '{{ this.dot_access_var }}',
            'attribute_accessor.twig' => '{{ attribute(this, "getVariable", ["accessor_access_var"]) }}',
            'call_accessor.twig'      => '{{ this.call_method_access_var }} <br /> {% set foo = ["val1", "val2"] %} {{ this.call_undefiend_method(foo) }}',
        ]);
        $this->twig = new \Twig_Environment($loader);
    }

    /**
     * Example of simple dot notation object data access using __isset
     * and __get PHP magic methods
     *
     * @return string
     */
    public function showSimpleAccess()
    {
        return $this->twig->render('dot_accessor.twig', [
            'this' => new Dummy\Dot()
        ]);
    }

    /**
     * Example of attribute function notation object data access
     *
     * @return string
     */
    public function showAttributeAccess()
    {
        return $this->twig->render('attribute_accessor.twig', [
            'this' => new Dummy\Attribute()
        ]);
    }

    /**
     * Example of simple dot notation object data access using the __call
     * PHP magic method
     *
     * @return string
     */
    public function showCallAccess()
    {
        return $this->twig->render('call_accessor.twig', [
            'this' => new Dummy\Call()
        ]);
    }
}