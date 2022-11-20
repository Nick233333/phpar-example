<?php

echo 'start.php' . PHP_EOL;
$config = require_once './config.php';
var_dump($config);

function test()
{
    echo 'test' . PHP_EOL;
}
