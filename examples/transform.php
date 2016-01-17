<?php

use AlephTools\Data\Presenters\ArrayPresenter;

require_once(__DIR__ . '/../src/ArrayPresenter.php');

$a = require(__DIR__ . '/data.php');

echo '<b>The original array:</b><pre>' . print_r($a, true) . '</pre>';

$presenter = new ArrayPresenter($a);
$presenter->mode = ArrayPresenter::MODE_TRANSFORM;
$presenter->preservePartlyExistingElements = true;

$presenter->schema = [
    '$.id=>id'           => '@name.*=>@token',
    '$.tags.$pos|ignore' => 'tags.@.$pos=>$',
    '$.name=>name'       => '@id.name',
    '$.date'             => '@id.date|date_string',
    '$.token=>token'     => '@id.tokens.*'
];

echo '<b>The transformaton schema (TRANSFORM mode):</b><pre>' . print_r($presenter->schema, true) . '</pre>';

$res = $presenter->toArray();

echo '<b>The result:</b><pre>' . print_r($res, true) . '</pre>';