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
        //foreach($this->session as $key2=>$value){
            $this->session[$key] = $val;
        //}
    }
    public function getData($key)
    {
        foreach($this->session as $value){
            if($key2==$key){
                return $value;
            }
        }
    }
    public function deleteData($key)
    {
        foreach($this->session as $key2=>$value){
            if($key2==$key){
                unset($value);
            }
        }
    }
}