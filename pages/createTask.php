<?php

$formError = false;
// check form is submitted
if (isset($_POST["submit"])){
	$formError = true;
	// check all field given
	if(isset($_POST["title"]) && isset($_POST["taskUser"]) && isset($_POST["taskText"])){
		// check fields not empty
		if(strlen($_POST["title"]) > 0 ){
			$formError = false;
			createTask (getUsername(), $_POST["title"], $_POST["taskUser"], $_POST["taskText"], array());

			exit(); // remplacer par un redirect TODO
		}
	}
}
include_once('views/createTaskForm.php');
