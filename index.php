<?php

require __DIR__ . '/vendor/autoload.php';

$log = new Monolog\Logger('Composer Demo');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');

// add records to the log
$log->warning('Foo');
$log->error('Bar');