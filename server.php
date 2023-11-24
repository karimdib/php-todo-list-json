<?php

$todos = [
    [
    'text' => 'Fare la spesa',
    'done' => true
    ],
    [
    'text' => 'Andare a lavoro',
    'done' => true
    ],
    [
    'text' => 'Andare in palestra',
    'done' => true
    ],
    [
    'text' => 'Studiare',
    'done' => true
    ]
];

$response = [
  'done' => true,
  'results' => $todos,
];

header('Content-Type: application/json');

echo json_encode($response) ;

?>
