<?php
include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array(
    "users_name" => "malik",
    "users_email" => "malik@gmail.com",
    "users_phone" => "123456789",
    "users_verifycode" => "12345",
   
);
$count = insertData($table , $data);