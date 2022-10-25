<?php
require __DIR__ . '/vendor/autoload.php';

use Backend\Backend\Database\View;

$test = new View\View();
$janis = $test->viewInfo();
echo $janis;