<?php

$formError = false;
// check form is submitted
if (isset($_POST["submit"])){
	$formError = true;
	// check all field given
	if(isset($_POST["category"]) && isset($_POST["title"]) && isset($_POST["affectedUser"]) && isset($_POST["description"])){
		// check fields not empty
		if(strlen($_POST["title"]) > 0 ){
			$formError = false;
			createTask ($_POST["category"], $_POST["title"], getUsername(), $_POST["affectedUser"], $_POST["description"]);
			die("Ok"); // remplacer par un redirect TODO
		}
	}
}
include_once('views/createTaskForm.php');