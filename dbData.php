<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "users_login";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}


//Data from database

// $user1 = array("name" => "Ardian", "email" => "ah54088@ubt-uni.net", "password" => "ardian123", "role" => 0);
// $admin = array("name" => "Admin", "email" => "admin.admin@ubt-uni.net", "password" => "admin123", "role" => 1);

// $allUsers = array($user1, $admin);
?>
