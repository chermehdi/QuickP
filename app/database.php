<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
EnvParser::init();
$capsule->addConnection([
    'driver' => EnvParser::$driver,
    'host' => EnvParser::$host,
    'username' => EnvParser::$username,
    'password' => EnvParser::$password,
    'database' => EnvParser::$database,
    'charset' => EnvParser::$charset,
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->bootEloquent();
