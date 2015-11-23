<?php

// if user isn't connected
if(!isConnected()){
	$loginError = false;
 	// if form submitted
	if(isset($_POST["login"]) && isset($_POST["password"])) {
		// check credentials
		if(checkUserPassword($_POST["login"], $_POST["password"])){
			// connect user and redirect
			connectUser($_POST["login"]);
			redirect('accueil');
		}
		// notice view there is an error in login
		$loginError = true;
	}

	// include view
	include_once('views/loginForm.php');
} else {
	// user already connected
	redirect('accueil');
}

