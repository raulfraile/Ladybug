<?php

require_once __DIR__.'/../vendor/autoload.php';
Ladybug\Loader::loadHelpers();

$var = 15;

$dumper = new \Ladybug\Dumper();
$dumper->setFormat(\Ladybug\Format\XmlFormat::FORMAT_NAME);

echo $dumper->dump($var);
