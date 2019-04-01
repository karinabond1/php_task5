<?php
include_once 'iWorkData.php';
class Cookie implements iWorkData
{
    private $cookie;

    function __constract()
    {
        $this->cookie = array();
    }

    public function saveData($key, $val)
    {
        if($this->cookie[$key] = $val){
            return true;
        }else{
            return false;
        }
    }
    public function getData($key)
    {
        foreach($this->cookie as $key2=>$value){
            if($key2==$key){
                return $value;
            }
        }
    }
    public function deleteData($key)
    {
        foreach($this->cookie as $key2=>$value){
            if($key2==$key){
                unset($this->cookie[$key2]);
            }
        }
    }
}