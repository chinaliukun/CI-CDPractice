<?php
class DB
{
    public $host = "localhost";
    public $username = "root";
    public $passwd = "liukun2015";
    public $dbname = "mesgboard";
    public function Query($sql,$type=1){
        $db = new mysqli($this->host,$this->username,$this->passwd,$this->dbname);
        $r = $db->query($sql);
        if($type == "1"){
            return $r->fetch_all();
        }
        else{
            return $r;
        }
    }
}
?>