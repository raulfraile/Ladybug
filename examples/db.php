<?php

require_once __DIR__.'/../vendor/autoload.php';
Ladybug\Loader::loadHelpers();

$connection = mysql_connect('localhost', 'root', '123456');
mysql_select_db('test', $connection);
$result = mysql_query('SELECT id,username,username_canonical,email,email_canonical FROM user', $connection);

ladybug_dump($connection, $result);
