<?php
use PHPUnit\Framework\TestCase;
require_once("DBUtil.php");
class DBUtilTest extends TestCase{
    public function testAdd(){
        $db = new DB();
        $this->assertEquals($db->add(1,2),3);
        unset($db);
    }
    /**
     * @expectedException InvalidArgumentException
     */
    public function testAddArgument(){
        $db = new DB();
        $this->assertEquals($db->add(1,2,3),6);
        unset($db);
    }
}