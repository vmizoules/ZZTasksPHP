<?php

include_once('includes/autoload.php');

class authenticationTest extends PHPUnit_Framework_TestCase {
	
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

	public function testGetUserList() {
		// count there is 7 users
		$this->assertEquals(count(getUserList()), 7);

		// test some username
		$this->assertEquals(getUserList()[0], "user_with_allPermissions");
		$this->assertEquals(getUserList()[1], "user_with_listtaskpermission");
		// test the last username
		$this->assertEquals(getUserList()[6], "user_with_nonepermissions");
	}

	public function testIsConnected() {
		// Not possible to test because of $_SESSION
	}

	public function testConnectUser() {
		// TODO
	}
	
	public function testDisconnectUser() {
		// TODO
	}

	public function testGetUsername() {
		// TODO
	}

	public function testCheckUserPassword(){
		// TODO
	}

	public function testCheckUserExists(){
		// TODO
	}

	public function testGetPassword(){
		// TODO
	}

	public function testCheckUserPermission (){
		// TODO
	}

}
