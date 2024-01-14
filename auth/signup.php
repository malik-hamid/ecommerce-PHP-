<?php

include "../connect.php";

$username = filterRequest("username");
$passwoed = sha1($_POST['password']);
$email = filterRequest("email");
$phone = filterRequest("phone");
$verifycode = rand(10000 , 99999);

$stmt = $con->prepare("SELECT * FROM users WHERE users_email = ? OR users_phone = ? ");
$stmt->execute(array($email,$phone));
$count = $stmt->rowCount();
if ($count > 0) {
    printFailure("phone or email");
}else{
    $data = array(
        "users_name" => $username,
        "users_password" => $passwoed,
        "users_email" => $email,
        "users_phone" => $phone,
        "users_verifycode" => $verifycode,


    );
    insertData("users", $data);
}
