<?php

use AlephTools\Data\Presenters\ArrayPresenter;

require_once(__DIR__ . '/../vendor/autoload.php');

$a = require(__DIR__ . '/data.php');

echo '<b>The original array:</b><pre>' . print_r($a, true) . '</pre>';

$presenter = new ArrayPresenter($a);
$presenter->mode = ArrayPresenter::MODE_EXCLUDE;

$presenter->schema = [
    '$.token',
    '$.tags.$',
    '4.name'
];

echo '<b>The transformaton schema (EXCLUDE mode):</b><pre>' . print_r($presenter->schema, true) . '</pre>';

$res = $presenter->toArray();

echo '<b>The result:</b><pre>' . print_r($res, true) . '</pre>';