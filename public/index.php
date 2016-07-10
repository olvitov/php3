<?php

require __DIR__ . '/../vendor/autoload.php';

echo '<h1>' . 'Hello!' . '</h1>';
$obj = new \T4\Core\Std(['foo' => 42]);
echo $obj->foo;
