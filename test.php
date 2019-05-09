<?php
use PHPUnit\Framework\TestCase;

class DBUtilTest extends TestCase{
    public $db;
    /**
     * @medium
     */
    public function testDBConnectionOutTime(){
        $db = new DB();
        $db->Query("show tables");
        unset($db);
    }
    /**
     * @expectedException PHPUnit\Framework\Error
     */
    public function testDBConnectionError(){
        $db= new DB();
        $db->Query("show tables");
    }
}