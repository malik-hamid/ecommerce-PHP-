<?php

include "../connect.php";


$passwoed = sha1("passwoed");
$email = filterRequest("email");


$stmt = $con->prepare("SELECT * FROM users WHERE users_email = ? and users_password = ? ");
$stmt->execute(array($email,$passwoed));
$count = $stmt->rowCount();
result($count);