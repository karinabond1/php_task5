<?php
include_once 'iWorkData.php';
class MySql implements iWorkData
{
    private $mysql;

    function __constract()
    {
        $this->mysql = array();
    }

    public function saveData($key, $val)
    {
        foreach($this->mysql as $key2=>$value){
            $this->mysql[$key] = $val;
        }
    }
    public function getData($key)
    {
        foreach($this->mysql as $key2=>$value){
            if($key2==$key){
                return $value;
            }
        }
    }
    public function deleteData($key)
    {
        foreach($this->mysql as $key2=>$value){
            if($key2==$key){
                unset($value);
            }
        }
    }
}