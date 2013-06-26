<?php
require_once 'PHPUnit/Framework/TestCase.php';
require_once("SplClassLoader.php");
$classLoader = new \SplClassLoader();
$classLoader->register();

use SecretStringDB\Model\SecretStringDBString;

class SecretStringDBStringTest extends PHPUnit_Framework_TestCase
{

    private $secretStringDbString;

    public function setUp(){
        parent::setUp();
    }
    public function tearDown(){
        parent::tearDown();
    }

    /**
     * @dataProvider provider
     */
     public function testGetData($data, $create, $expire, $status, $id){

        $secretstringdbstring = new SecretStringDBString($data,
                                                        $create,
                                                        $expire,
                                                        $status,
                                                        $id);
        $this->assertEquals($data, $secretstringdbstring->getData());
        $this->assertEquals($create, $secretstringdbstring->getCreate());
        $this->assertEquals($expire, $secretstringdbstring->getExpire());
        $this->assertEquals($status, $secretstringdbstring->getStatus());
        $this->assertEquals($id, $secretstringdbstring->getId());

//          $this->assertTrue(FALSE);
    }

    public function provider(){
        return array(
                array("datastring",
                    new DateTime("2013-06-27T00:00:00+09:00"),
                    new DateTime("2013-06-28T00:00:00+09:00"),
                    true,
                    1),
                array("",
                    new DateTime("1700-06-27T00:00:00+09:00"),
                    new DateTime("2013-06-28T00:00:00+09:00"),
                    false,
                    684513210),
                array("e8r4451yh2r3t1h6dr4h15rhserpg0u34900^26:]3;et:",
                    new DateTime("2013-06-27T00:00:00+09:00"),
                    new DateTime("2013-06-28T00:00:00+09:00"),
                    true,
                    0),
                array("asdpf0wumpvtuwqepovt7q-340utv34986^02346-72[4]721@7\5:k36:po;lkjretwert",
                    new DateTime("2013-06-27T00:00:00+09:00"),
                    new DateTime("2013-06-28T00:00:00+09:00"),
                    false,
                    9999999999999),
        );
    }
}
