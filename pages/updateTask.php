<?php
// read global var $app
global $app;

// get id
if (!isset($_GET['id'])) {
    die("error"); // TODO faire un throw plus propre
}
$id = $_GET['id'];

$formError = false;
// check form is submitted
if (isset($_POST["submit"])) {
    $formError = true;
    // check all field given
    if (isset($_POST["category"]) && isset($_POST["title"]) && isset($_POST["affectedUser"]) && isset($_POST["description"])) {
        $formError = false;
        updateTask($_POST["category"], $_POST["title"], getUsername(), $_POST["affectedUser"], $_POST["description"], $id);
        redirect('listTask');
    }
}

// fill form with task datas
$task["category"] = $app["tasks"][$id]["category"];
$task["affectedUser"] = $app["tasks"][$id]["affectedUser"];
$task["title"] = $app["tasks"][$id]["title"];
$task["description"] = $app["tasks"][$id]["description"];

// include view
include_once('views/updateTaskForm.php');


