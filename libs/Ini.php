<?php
include_once 'iWorkData.php';
class Ini implements iWorkData
{
    private $ini;

    function __constract()
    {
        $this->ini = array();
    }

    public function saveData($key, $val)
    {
        foreach($this->ini as $key2=>$value){
            $this->ini[$key] = $val;
        }
    }
    public function getData($key)
    {
        foreach($this->ini as $key2=>$value){
            if($key2==$key){
                return $value;
            }
        }
    }
    public function deleteData($key)
    {
        foreach($this->ini as $key2=>$value){
            if($key2==$key){
                unset($value);
            }
        }
    }
}