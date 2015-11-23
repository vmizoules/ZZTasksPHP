<?php

// return an array containing configuration (can be setted by environment)
function getConfig($env='default') {
	return loadJson("datas/config/parameters_".$env.".json");
}

// read file and return array
function loadJson($path='') {
	// throw exception if file doesn't exist
	if(!file_exists($path)) {
		throw new Exception("File '". $path ."'' doesn't exists!");
	}

	$string = file_get_contents($path);
	$json_array = json_decode($string, true);

	// throw exception for json parsing error
	if ($json_array === null && json_last_error() !== JSON_ERROR_NONE) {
		throw new Exception("Parsing Error in " . $path);
	}

	return $json_array;
}

// use this function to read php file
function loadPhpFileByPageName($pageName) {
	$file = getPhpFile($pageName);

	if(file_exists($file)) {
		include_once($file);
	} else {
		throw new Exception("File '". $file ."'' doesn't exists!");
	}
}

// save tasks into file
function saveTasks() {
	// read global var $app
	global $app;

	// convert array to pretty json string
	$json = json_encode($app['tasks'], JSON_PRETTY_PRINT);
	$tasks = str_replace("\\/", "/", $json);

	// open file and store tasks into
	$file = fopen($app['param']['db_path_tasks'], 'w');
	fwrite($file, $tasks);
	fclose($file);
}
