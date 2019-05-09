<?php
use PHPUnit\Framework\TestCase;
require_once("DBUtil.php");
class DBUtilTest extends TestCase{
    /**
     * @medium
     */
    public function testDBConnectionError(){
        $db = new DB();
        $db->Query("show tables");
        unset($db);
    }
}