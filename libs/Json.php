<?php
include_once 'iWorkData.php';
class Json implements iWorkData
{
    private $json;

    function __constract()
    {
        $this->json = array();
    }

    public function saveData($key, $val)
    {
        foreach($this->json as $key2=>$value){
            $this->json[$key] = $val;
        }
    }
    public function getData($key)
    {
        foreach($this->json as $key2=>$value){
            if($key2==$key){
                return $value;
            }
        }
    }
    public function deleteData($key)
    {
        foreach($this->json as $key2=>$value){
            if($key2==$key){
                unset($value);
            }
        }
    }
}