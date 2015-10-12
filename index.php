<?php

use KoderHut\Examples;

require_once 'vendor/autoload.php';

$example = new Examples();

echo $example->showAttributeAccess() . "<br />";
echo $example->showSimpleAccess() . "<br />";
echo $example->showCallAccess() . "<br />";