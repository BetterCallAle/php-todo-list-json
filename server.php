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

    file_put_contents('todo.json', json_encode($todo));
}

//if $_POST["taskToggle"] exist
if(isset($_POST["toggleIndex"])){

    $index = $_POST["toggleIndex"];
    $todo[$index]["done"] = !$todo[$index]["done"];
    file_put_contents('todo.json', json_encode($todo));
}

//make the array a json and share it
header('Content-Type: application/json');
echo json_encode($todo);
?>