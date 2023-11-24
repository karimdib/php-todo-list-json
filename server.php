<?php

$todo_file_json = file_get_contents('./data.json');
$todos = json_decode($todo_file_json, true);

/*
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
*/



$response = [
  'results' => $todos,
];

header('Content-Type: application/json');

echo json_encode($response) 

?>
