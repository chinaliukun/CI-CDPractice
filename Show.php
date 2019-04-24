<?php
require_once 'DBUtil.php';
    $sql="SELECT * FROM msg ORDER BY createdTime DESC LIMIT 6";
    $DB = new DB;
    $result = $DB->Query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>留言板</title>
<link rel="stylesheet" href="style.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
</head>
<body>
    <div class="msg-container">
        <h1 class="msg-title">欢迎使用留言板</h1>
        <div class="msg-list">
            <?php 
                foreach($result as $value){
                    echo "<div class='msg-pannel'>".$value[1]."</div>";
                }
            ?>
        </div>
        <div  class="msg-form-box">
            <form class="msg-form" action="add.php" method="POST">
                <input class="msg-input" type="text" name="msg" value="" placeholder="请输入你的留言"/>
                <input class="msg-button" type="submit" value="提交"/>
            </form>
        </div>
    </div>
<body>
<html>