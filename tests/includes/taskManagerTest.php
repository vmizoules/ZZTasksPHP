<?php

include_once('includes/autoload.php');

class taskManagerTest extends PHPUnit_Framework_TestCase {
	
	// set up global app var
	public function setUp() {
		// init global app var
		global $app;
		$app['param'] = getConfig("test");
		$app['users'] = loadJson($app['param']['db_path_users']);
		$app['pages'] = loadJson($app['param']['db_path_pages']);
		$app['tasks'] = loadJson($app['param']['db_path_tasks']);
		$app['trans'] = "testLang";
	}

	public function testCreateTask() {
		// TODO
	}
}
