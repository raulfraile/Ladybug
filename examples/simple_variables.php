<?php

require_once __DIR__.'/../vendor/autoload.php';

$var1 = NULL;
$var2 = 15;
$var3 = 15.5;
$var4 = 'hello world!';
$var5 = false;

ladybug_set_format('text');
ladybug_dump($var1, $var2, $var3, $var4, $var5, array(1,2,3));