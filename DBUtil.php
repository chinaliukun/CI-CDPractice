<?php
class DB
{
    public $host = "mysql";
    public $username = "msgboard";
    public $passwd = "msgboard";
    public $dbname = "msgboard";
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
    public function add($a,$b){
        return $a+$b;
    }
    public function addPlus($a=0,$b=0,$c=0){
        return $a+$b+$c;
    }
}
?>