<?php
$new_todo = $_POST['todo'] ?? '';
$text = 'ciao';
$todo = [ 
    'done' => true, 
    'text' => $new_todo,
];

if($new_todo === ''){
    return  null;
}else{
    $get_file = file_get_contents('./data.json');
    $array_decode = json_decode($get_file, true); 

    array_push($array_decode['todos'], $todo);

    $response = [
       'results'=> $array_decode['todos'],
    ];

    $get_file = json_encode($array_decode); 

    file_put_contents('./data.json', $get_file);

    header('Content-type: application/json');
    echo json_encode($response); 
}



?>