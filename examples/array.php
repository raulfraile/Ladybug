<?php

require_once __DIR__.'/../vendor/autoload.php';
Ladybug\Loader::loadHelpers();

$var = array(
    array(
        'name' => 'Raul',
        'age' => 29
    ),
    array(
        'name' => 'John',
        'age' => 27
    )
);

ladybug_dump($var);
