<?php

require("../model/UserModel.php");

$Data = new UserModel();

$Data->name = "vincent laser";
$Data->email = "test@yahoo.com";
$Data->username = "toring12";
$Data->password ="test123";
echo"Case1: Inserting record  RESULT :";
var_dump($Data->insert());


$Data->password = "123";
$Data->id = 40;
echo "Case2 updating record RESULT :";
var_dump($Data->update());


echo "Case3 Read all record RESULT";
var_dump($Data->readAll());

$Data->id = "1";
echo"Case4 Delete record RESULT ";
var_dump($Data->delete());

echo"Case5: Inserting record with 3 missing fields  RESULT :";
var_dump($Data->insertC5());


$Data->password = "1";
$Data->id = "eweq";
echo"Case6: Updating record with a non-existing ID RESULT: ";
var_dump($Data->update());

$Data->id = "ewqwe";
echo"Case7 Deleting record with a non-existing ID ";
var_dump($Data->delete());

?>