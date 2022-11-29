<?php 
//take the json file from todo.json
$json_in_string = file_get_contents("todo.json");

//transform the json from a string to a PHP array
$todo = json_decode($json_in_string);

//make the array a json and share it
header('Content-Type: application/json');
echo json_encode($todo);
?>