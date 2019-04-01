<?php

include_once 'libs/iWorkData.php';

function saveData(iWorkData $obj, $key, $val)
{
    if($obj->saveData($key, $val)){
        return true;
    }else{
        return false;
    }
}

function getData(iWorkData $obj, $key)
{
    $result = $obj->getData($key);
    return $result;
}

function deleteData(iWorkData $obj, $key)
{
    if($obj->deleteData($key)){
        return true;
    }else{
        return false;
    }
}


?>