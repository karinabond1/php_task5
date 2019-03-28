<?php

include_once 'libs/iWorkData.php';

function saveData(iWorkData $obj, $key, $val)
{
    $obj->saveData($key, $val);
}

function getData(iWorkData $obj, $key)
{
    $result = $obj->getData($key);
    return $result;
}

function deleteData(iWorkData $obj, $key)
{
    $obj->deleteData($key);
}


?>