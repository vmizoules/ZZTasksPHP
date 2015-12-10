<?php

// give the name of php file associated with routename
function getPhpFile($routeName='') {
	// read global var $app
	global $app;

	// check if page exists in file
	if(array_key_exists($routeName, $app['pages'])) {
		$file = $app['pages'][$routeName];
	} else {
		throw new Exception("Error processing getPhpFile($routeName)", 1);
	}
	
	return $file;
}

// return actual routeName
function getActualRoute() {
	// if route not defined
	if(!isset($_GET['p'])) {
		// equivalent to homepage
		$page = 'accueil';
	} else {
		// given page
		$page = $_GET['p'];
	}
	return $page;
}

// redirect user to given routeName
function redirect($routeName='') {
	// redirect to generate url
	redirectUrl(generateUrl($routeName));
}

// redirect user to given routeName
function redirectUrl($url) {
	// redirect to generate url
	header('Location:' . $url );
}

// generate url by routeName
function generateUrl($routeName=''){
	$url = 'index.php';
	if($routeName != '' && !is_null($routeName)){
		// concate get variable
		$url = $url . '?p=' . $routeName;
	}
	return $url;
}
