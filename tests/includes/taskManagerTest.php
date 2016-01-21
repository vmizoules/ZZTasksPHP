<?php

include_once('includes/autoload.php');

class taskManagerTest extends PHPUnit_Framework_TestCase
{

    // set up global app var
    public function setUp()
    {
        // init global app var
        global $app;
        $app['param'] = getConfig("test");
        $app['users'] = loadJson($app['param']['db_path_users']);
        $app['pages'] = loadJson($app['param']['db_path_pages']);
        $app['tasks'] = loadJson($app['param']['db_path_tasks']);

        // preserve task database
        $this->trashFile = 'tests/datas/trash/' . microtime() . '.file';
        $app['param']['db_path_tasks'] = $this->trashFile;
    }

    public function testCheckFields()
    {
        $goodCategory = 'todo';
        $badCategory = 'unknowcategory';

        $goodUser = 'user_with_allPermissions';
        $badUser = 'unknow user';

        // check good values
        $this->assertTrue(checkFields($goodCategory, 'mybesttitle', $goodUser, $goodUser, 'desc'));

        // check bad category
        $this->assertFalse(checkFields($badCategory, 'mybesttitle', $goodUser, $goodUser, 'desc'));

        // check bad title
        $this->assertFalse(checkFields($goodCategory, '', $goodUser, $goodUser, 'desc'));

        // check bad user
        $this->assertFalse(checkFields($goodCategory, 'mybesttitle', $badUser, $badUser, 'desc'));
    }

    public function testCreateTask()
    {
        global $app;

        $userWithPerm = 'user_with_allPermissions';
        $userWithoutPerm = 'user_with_nonepermissions';

        $goodCategory = 'todo';
        $badCategory = 'unknow_cat';

        // check with good values BUT user without permission
        // -> exception
        $caught = false;
        try {
            createTask($goodCategory, 'mybesttitle', $userWithoutPerm, 'user_with_nonepermissions', 'desc');
        } catch (\Exception $e) {
            $caught = true;
        }
        $this->assertTrue($caught);

        // check with bad value BUT user with permission
        // -> exception
        $caught = false;
        try {
            createTask($badCategory, 'mybesttitle', $userWithPerm, 'user_with_nonepermissions', 'desc');
        } catch (\Exception $e) {
            $caught = true;
        }
        $this->assertTrue($caught);

        // check with good values and good user permissions
        // -> should work !
        $this->assertEquals(count($app['tasks']), 1); // 1 task
        $caught = false;
        try {
            createTask($goodCategory, 'mybesttitle', $userWithPerm, 'user_with_nonepermissions', 'desc');
        } catch (\Exception $e) {
            $caught = true;
        }
        $this->assertFalse($caught);
        $this->assertEquals(count($app['tasks']), 2); // 2 task
    }

    public function testUpdateTask()
    {
        global $app;

        $id = 0;

        $userWithPerm = 'user_with_allPermissions';
        $userWithoutPerm = 'user_with_nonepermissions';

        $goodCategory = 'todo';
        $badCategory = 'unknow_cat';

        // check with good values BUT user without permission
        // -> exception
        $caught = false;
        try {
            updateTask($goodCategory, 'mybesttitle', $userWithoutPerm, 'user_with_nonepermissions', 'desc', $id);
        } catch (\Exception $e) {
            $caught = true;
        }
        $this->assertTrue($caught);

        // check with good values and user with permission BUT bad id
        // -> exception
        $caught = false;
        try {
            updateTask($goodCategory, 'mybesttitle', $userWithoutPerm, 'user_with_nonepermissions', 'desc', 99);
        } catch (\Exception $e) {
            $caught = true;
        }
        $this->assertTrue($caught);

        // check with bad value BUT user with permission
        // -> exception
        $caught = false;
        try {
            updateTask($badCategory, 'mybesttitle', $userWithPerm, 'user_with_nonepermissions', 'desc', $id);
        } catch (\Exception $e) {
            $caught = true;
        }
        $this->assertTrue($caught);

        // check with good values and good user permissions
        // -> should work !
        $this->assertEquals(count($app['tasks']), 1); // 1 task
        $caught = false;
        try {
            updateTask($goodCategory, 'mybesttitle', $userWithPerm, 'user_with_nonepermissions', 'desc', $id);
        } catch (\Exception $e) {
            $caught = true;
        }
        $this->assertFalse($caught);
        $this->assertEquals(count($app['tasks']), 1); // 2 task
    }

    public function testDeleteTask()
    {
        global $app;

        $goodId = 0;
        $badId = 58;

        $userWithPerm = 'user_with_allPermissions';
        $userWithoutPerm = 'user_with_nonepermissions';

        // check with good id BUT user without permission
        // -> exception
        $caught = false;
        try {
            deleteTask($goodId, $userWithoutPerm);
        } catch (\Exception $e) {
            $caught = true;
        }
        $this->assertTrue($caught);

        // check with bad id BUT user with permission
        // -> exception
        $caught = false;
        try {
            deleteTask($badId, $userWithPerm);
        } catch (\Exception $e) {
            $caught = true;
        }
        $this->assertTrue($caught);

        // check with good values and good user permissions
        // -> should work !
        $this->assertEquals(count($app['tasks']), 1); // 1 task
        $caught = false;
        try {
            deleteTask($goodId, $userWithPerm);
        } catch (\Exception $e) {
            $caught = true;
        }
        $this->assertFalse($caught);
        $this->assertEquals(count($app['tasks']), 0); // 2 task
    }
}
