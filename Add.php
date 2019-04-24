<?php
require_once "DBUtil.php";
if(isset($_POST['msg'])){
}else{
    return;
}
$sql = "INSERT INTO msg(msg,createdTime) VALUE('".$_POST['msg']."',NOW())";
$DB = new DB;
$ret = $DB->Query($sql,0);
header("Location: Show.php");
return;
?>