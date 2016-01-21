<?php

include_once('includes/autoload.php');

class fileManagerTest extends PHPUnit_Framework_TestCase {
	
	public function testGetConfig() {
		// TODO

	}

	public function testLoadJson() {
		// bad file -> exception
		$datas = null;
		$caught = false;
		try {
			$datas = loadJson('unknowFile');
		} catch (\Exception $e) {
			$caught = true;
		}
		$this->assertTrue($caught);

		// good file -> should work
		$caught = false;
		try {
			$datas = loadJson('tests/datas/test1.json');
		} catch (\Exception $e) {
			$caught = true;
		}
		$this->assertFalse($caught);
		$this->assertTrue(is_array($datas));
		$this->assertTrue(count($datas) > 0);
	}
	
	public function testLoadPhpFileByPageName() {
		/*
		// bad file -> exception
		$caught = false;
		try {
			//loadPhpFileByPageName('unknowPage');
		} catch (\Exception $e) {
			$caught = true;
		}
		$this->assertTrue($caught);

		
		// good routename -> should work
		$testVar = false;
		try {
			// testLoadFile -> tests/datas/testLoadPhpFile.json
			//loadPhpFileByPageName('testLoadFile');
		} catch (\Exception $e) {
			$caught = true;
		}
		$this->assertFalse($caught);
		*/
	}
}
