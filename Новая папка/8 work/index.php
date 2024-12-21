<?php

require __DIR__ . '/vendor/autoload.php';

use FileHandler\FileHandler;

$fileHandler = new FileHandler();

$filename = 'red.txt';
echo $fileHandler->readFile($filename);
