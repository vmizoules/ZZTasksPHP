<?php

include_once('includes/autoload.php');

class fileManagerTest extends PHPUnit_Framework_TestCase {
	
	private $trashFile;

	// set up global app var
	public function setUp() {
		// init global app var
		global $app;
		$app['param'] = getConfig("test");
		$app['users'] = loadJson($app['param']['db_path_users']);
		$app['pages'] = loadJson($app['param']['db_path_pages']);
		$app['tasks'] = loadJson($app['param']['db_path_tasks']);
		$app['trans'] = "testLang";

		$this->trashFile = 'tests/datas/trash/'.microtime().'.file';
	}
	
	public function testGetConfig() {
		// make sure is an array
		$this->assertTrue(is_array(getConfig("test")));

		// bad file -> expect exception ?
		$caught = false;
		try {
			getConfig("unknowConf");
		} catch (\Exception $e) {
			$caught = true;
		}
		$this->assertTrue($caught);
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

	public function testSaveTasks() {
		// save in Trash (will not break our future test !)
		global $app;
		$app['param']['db_path_tasks'] = $this->trashFile;

		// try to save
		$caught = false;
		try {
			saveTasks();
		} catch (\Exception $e) {
			$caught = true;
		}
		$this->assertFalse($caught);

		// try to load this file (see if json is correct)
		$caught = false;
		try {
			$fileDatas = loadJson($this->trashFile);
		} catch (\Exception $e) {
			$caught = true;
		}
		$this->assertFalse($caught);

		// test datas in file are good one
		$this->assertEquals($fileDatas, $app['tasks']);
	}
}
