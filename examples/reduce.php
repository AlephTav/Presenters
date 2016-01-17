<?php

use AlephTools\Data\Presenters\ArrayPresenter;

require_once(__DIR__ . '/../src/ArrayPresenter.php');

$a = require(__DIR__ . '/data.php');

echo '<b>The original array:</b><pre>' . print_r($a, true) . '</pre>';

$presenter = new ArrayPresenter($a);
$presenter->mode = ArrayPresenter::MODE_REDUCE;

$presenter->schema = [
    '$.id',
    '$.name',
    '$.date|date_string:m/d/Y',
    '$.tags|ignore|array'
];

echo '<b>The transformaton schema (REDUCE mode):</b><pre>' . print_r($presenter->schema, true) . '</pre>';

$res = $presenter->toArray();

echo '<b>The result:</b><pre>' . print_r($res, true) . '</pre>';