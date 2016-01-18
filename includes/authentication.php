<?php

function getUserList() {
	// read global var $app
	global $app;

	return array_keys($app['users']);
}

function isConnected(){
	$rep = false;
	// check if connected
	if(array_key_exists("auth", $_SESSION) && $_SESSION['auth'] == true){
		$rep = true;
	}
	return $rep;
}

// user connection 
function connectUser($username){
	$_SESSION['username'] = $username;
	$_SESSION['auth'] = true;
}

// user disconnection 
function disconnectUser(){
	$_SESSION['auth'] = false;
}

function getUsername() {
	$res = NULL;
	if(isset($_SESSION['username'])){
		$res = $_SESSION['username'];
	}
	return $res;
}

function checkUserPassword($username, $givenPassword){
	$rep=false;
	if(isset($username) && isset($givenPassword)){
		if(checkUserExists($username)){
			if(getPassword($username)==hashPassword($username, $givenPassword)){
				$rep=true;
			}
		}
	}
	return $rep;
}

function hashPassword($username, $password) {
	return md5($username . "123" . $password);
}

function checkUserExists($username){
	// read global var $app
	global $app;
	$rep=false;
	// if username exists in the database  
	if(array_key_exists($username, $app['users'])){
		$rep=true;
	}
	return $rep;
}

function getPassword($user){
	// read global var $app
	global $app;
	return $app['users'][$user]['password'];
}

// à tester 
function checkUserPermission ($username, $permission){
	// read global var $app
	global $app;
	$rep=false;
	// check user permission exists 
	if(array_key_exists('permissions', $app['users'][$username])){
		// check if the user has this permission
		if(in_array($permission, $app['users'][$username]['permissions'])){
			$rep=true;
		}
	}
	return $rep;
}

