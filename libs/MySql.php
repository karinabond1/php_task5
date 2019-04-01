<?php
include_once 'iWorkData.php';
class MySql implements iWorkData
{
    private $mysql;

    function __constract()
    {
        if($this->mysql = array()){
            return true;
        }else{
            return false;
        }
    }

    public function saveData($key, $val)
    {
        $this->mysql[$key] = $val;
    }
    public function getData($key)
    {
        $str = "";
        foreach($this->mysql as $key1=>$value){
            if($key1==$key){
                $str = implode(' - ',$value);
            }
        }
        return $str;
    }
    public function deleteData($key)
    {
        foreach($this->mysql as $key2=>$value){
            if($key2==$key){
                unset($this->mysql[$key2]);
            }
        }
    }
}