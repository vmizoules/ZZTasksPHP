<?php

include_once('includes/autoload.php');

class translationTest extends PHPUnit_Framework_TestCase
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

        // init session
        global $_SESSION;
        $_SESSION = array();
    }

    public function testLoadTranslation()
    {
        // count there is 2 word
        $this->assertEquals(count(loadTranslation("testLang")), 2);
        // test word MonMot
        $this->assertEquals(loadTranslation("testLang")["TEST_WORD"], "MonMot");
    }

    public function testGetLang()
    {
        //test get default testLang
        $this->assertEquals(getLang(), "testLang");
        //test with
        $_SESSION['lang'] = "sessionTestLang";
        $this->assertEquals(getLang(), "sessionTestLang");
    }

    public function testSetLang()
    {
        // set default lang
        setLang("");
        $this->assertEquals(getLang(), "testLang");

        //set lang testLang2
        setLang("testLang2");
        $this->assertEquals(getLang(), "testLang2");
    }

    public function testGetDefaultLang()
    {
        //test get default testLang
        $this->assertEquals(getDefaultLang(), "testLang");
    }

    public function test_t()
    {
        // load translation
        global $app;
        $app['trans'] = loadTranslation("testLang");

        // try with good words
        $this->assertEquals(_t("TEST_WORD"), "MonMot");
        $this->assertEquals(_t("TEST_WORD2"), "MonMot2");

        //try with bad word
        $this->assertEquals(_t("BadWord"), "#errorTrans:'BadWord'#");
    }
}
