<?php

include_once('includes/autoload.php');

class authenticationTest extends PHPUnit_Framework_TestCase {
	
	public function testIsConnected() {
		// TODO
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

	public function testHashPassword (){
		// empty value
		$this->assertEquals(hashPassword('',''),'202cb962ac59075b964b07152d234b70');
		
		// credible value
		$this->assertEquals(hashPassword("test","test"), '03698509376aacc7c2c4c7a8e4e77ea2');

	}

}
