<?php
include_once 'iWorkData.php';

class Json implements iWorkData
{
    private $json;

    function __constract()
    {
        if($this->json = array()){
            return true;
        }else{
            return false;
        }
    }

    public function saveData($key, $val)
    {
        $this->json[$key] = $val;
    }

    public function getData($key)
    {
        foreach($this->json as $key2=>$value){
            if($key2==$key){
                return json_encode($value);
            }
        }
    }

    public function deleteData($key)
    {
        foreach ($this->json as $key2 => $value) {
            if ($key2 == $key) {
                unset($this->json[$key2]);
            }
        }
    }
}