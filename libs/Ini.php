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
        //print_r($val);
        //echo $key."\n".implode('-',$val);
        file_put_contents(INI_FILE,$key."\n".implode(' = ',$val)."\n",FILE_APPEND | LOCK_EX);
    }
    public function getData($key)
    {
        $arr = parse_ini_file(INI_FILE,true);
        foreach($arr as $key2=>$value){
           // echo $key;
            //print_r($value);
            if($key2==$key){
                foreach ($value as $key3=>$value3){
                    return $key3.' = '.$value3;
                }

            }
        }
    }
    public function deleteData($key)
    {
        $arr = parse_ini_file(INI_FILE,true);
        //print_r($arr);
        foreach($arr as $key2=>$value){
            // echo $key;
            //print_r($value);
            if($key2==$key){
                unset($arr[$key2]);
//                foreach ($value as $key3=>$value3){
//                    return $key3.' = '.$value3;
//                }

            }
        }
        foreach ($arr as $key2=>$value2){
            foreach ($value2 as $key3=>$value3) {
                file_put_contents(INI_FILE,'['.$key2.']'."\n".$key3.' = '.$value3."\n");
            }

        }

    }
}