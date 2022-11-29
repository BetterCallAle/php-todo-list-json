<?php 
//take the json file from todo.json
$json_in_string = file_get_contents("todo.json");

//transform the json from a string to a PHP array
$todo = json_decode($json_in_string, true);

//if $_POST["userToDo"] exist
if(isset($_POST["userToDo"])){
    
    // Create an array with text = $_POST["userToDo"] and done = false
    $user_to_do = [
        "text" => $_POST["userToDo"],
        "done" => false
    ];

    //Copy the array in the main one
    $todo[] = $user_to_do;

    //write it in the json file
    file_put_contents('todo.json', json_encode($todo));
}

//if $_POST["taskToggle"] exist
if(isset($_POST["toggleIndex"])){
    //create an index variable
    $index = $_POST["toggleIndex"];

    //take the done key in the array element in the index sent by front-end and toggle its boolean value
    $todo[$index]["done"] = !$todo[$index]["done"];

    //write it in the json file
    file_put_contents('todo.json', json_encode($todo));
}

if(isset($_POST["deleteIndex"])){
    $delete_index = $_POST["deleteIndex"];

    $temp_array = $todo;

    array_splice($todo, $delete_index, 1);

    file_put_contents('todo.json', json_encode($todo));
}

//make the array a json and share it
header('Content-Type: application/json');
echo json_encode($todo);
?>