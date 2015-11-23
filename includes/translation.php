<?php

function loadTranslation($lang){
	// read global var $app
	global $app;

	// load good json file
	return loadJson($app['param']['db_path_trans'] . $lang . ".json");
}

function getLang(){
	// get default
	$res = getDefaultLang();

	// load another if setted
	if(isset($_SESSION['lang'])){
		$res = $_SESSION['lang'];
	}
	return $res;
}

function setLang($lang){
	// read global var $app
	global $app;

	// check if given lang exists
	if(in_array($lang, $app['param']['available_trans'])) {
		$_SESSION['lang'] = $lang;	
	} else {
		// set the default language
		$_SESSION['lang'] = getDefaultLang();
	}
}

function getDefaultLang() {
	// read global var $app
	global $app;

	return $app['param']['available_trans'][0];
}

// translate text given in parameter
function _t($text){
	// read global var $app
	global $app;

	if(isset($app['trans'][$text])) {
		$trans = $app['trans'][$text];
	} else {
		$trans = "#errorTrans:'$text'#";
	}

	return $trans;
}