<?php
// init session
if(!isset($_SESSION)) { 
    session_start();
}

// init functions
include_once('includes/autoload.php');

// init vars
$app['param'] = getConfig("dev");
$app['users'] = loadJson($app['param']['db_path_users']);
$app['pages'] = loadJson($app['param']['db_path_pages']);
$app['tasks'] = loadJson($app['param']['db_path_tasks']);
$app['trans'] = loadTranslation(getLang());

// get page
$page = getActualRoute();

// secure all pages
if($page != 'login' && !isConnected()) {
	redirect('login');
}

// load header
include_once('views/header.php');

// load content of page
try{
	loadPhpFileByPageName($page);
} catch (\Exception $e) {
	loadPhpFileByPageName("erreur");
}

// load footer
include_once('views/footer.php');