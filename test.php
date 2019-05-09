<?php
use PHPUnit\Framework\TestCase;

class DBUtilTest extends TestCase{
    public $db;
    /**
     * @expectedException PHPUnit\Framework\Error
     * @medium
     */
    public function testQuery(){
        $db = new DB();
        $this->assertInstanceOf();
        $this->expectException();
        $db->Query("show tables");
    }
}