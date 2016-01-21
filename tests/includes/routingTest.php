<?php

include_once('includes/autoload.php');

class routingTest extends PHPUnit_Framework_TestCase {

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

	public function testGetPhpFile() {
		// TODO
	}
	
	public function testGetActualRoute() {
		// no parameters setted -> should return "accueil"
		$this->assertEquals(getActualRoute(), 'accueil');

		// set parameter to null
		$_GET['p'] = null;
		$this->assertEquals(getActualRoute(), 'accueil');

		// set parameter to a credible value
		$_GET['p'] = 'abc';
		$this->assertEquals(getActualRoute(), 'abc');
	}

	public function testGenerateUrl() {
		// null value
		$this->assertEquals(generateUrl(), 'index.php');

		// empty value
		$this->assertEquals(generateUrl(''), 'index.php');

		// credible value
		$this->assertEquals(generateUrl("abcd"), 'index.php?p=abcd');
	}
	
}