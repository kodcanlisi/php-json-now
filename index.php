<?php
//header('Content-Type: application/json');
require('JsonNow.php');

$conf = [
    'prop' => [
        'id',
        'name',
        'age',
    ],
    'settings' => [
        'minAge' => 1,
        'maxAge' => 10,
        'upper' => ['name'],
        'lower' => ['name']
    ]
];

try {
    $example1 = JSONX::size(100)->config($conf)->json();
    $example2 = JSONX::size(100)->addProp('id', 'age')->json();
    echo $example1;
} catch (Exception $e) {
    echo $e->getMessage();
}
