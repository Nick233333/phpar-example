<?php

require_once __DIR__ . '/example.phar';

echo 'index.php' . PHP_EOL;
test();


$config = include 'phar://example.phar/config.php';
var_dump($config);