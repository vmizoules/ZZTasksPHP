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
		// Not possible to test because of $_SESSION
	}
	
	public function testDisconnectUser() {
		// Not possible to test because of $_SESSION
	}

	public function testGetUsername() {
		// Not possible to test because of $_SESSION
	}

	public function testCheckUserPassword(){
		// bad user and password
		$this->assertEquals(checkUserPassword("badUser","baduser"),false);
		// good user and password all permission
		$this->assertEquals(checkUserPassword("user_with_allPermissions","allPermissions"),true);
	}

	public function testCheckUserExists(){
		//empty value 
		$this->assertEquals(checkUserExists(''),false);
		// bad value
		$this->assertEquals(checkUserExists("baduser"),false);
		// good value
		$this->assertEquals(checkUserExists("user_with_allPermissions"),true);
	}

	public function testGetPassword(){
		// test some username
		$this->assertEquals(getPassword("user_with_listtaskpermission"),"listtaskpermission");
		$this->assertEquals(getPassword("user_with_createtaskpermission"),"createtaskpermission");
		// last username
		$this->assertEquals(getPassword("user_with_nonepermissions"),"nonepermissions");

	}

	public function testCheckUserPermission (){
		// no permission 
		$this->assertEquals(checkUserPermission("user_with_nonepermissions","removeTask"), false);
		
		// permission create task
		$this->assertEquals(checkUserPermission("user_with_createtaskpermission","createTask"), true);
		// permission edit task
		$this->assertEquals(checkUserPermission("user_with_edittaskpermission","editTask"), true);
		// permission list task
		$this->assertEquals(checkUserPermission("user_with_listtaskpermission","listTask"), true);
		// permission comment task
		$this->assertEquals(checkUserPermission("user_with_commenttaskpermission","commentTask"), true);
		// permission remove task
		$this->assertEquals(checkUserPermission("user_with_removetaskpermission","removeTask"), true);

	}

	public function testHashPassword (){
		// empty value
		$this->assertEquals(hashPassword('',''),'202cb962ac59075b964b07152d234b70');
		
		// credible value
		$this->assertEquals(hashPassword("test","test"),'03698509376aacc7c2c4c7a8e4e77ea2');

	}

}
