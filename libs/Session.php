<?php

include_once 'iWorkData.php';

class Session implements iWorkData
{
    private $session;

    function __constract()
    {
        $this->session = array();
    }

    public function saveData($key, $val)
    {
            if($this->session[$key] = $val){
                return true;
            }else{
                return false;
            }
    }
    public function getData($key)
    {
        foreach($this->session as $key2=>$value){
            if($key2==$key){
                return $value;
            }
        }
    }
    public function deleteData($key)
    {
        foreach($this->session as $key2=>$value){
            if($key2==$key){
                unset($this->session[$key2]);
            }
        }
    }
}