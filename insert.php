<?php
@include 'dbData.php';


if(isset($_POST['submit'])){
    $user = $_SESSION['user'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $insert_query = mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$password') where type = '$user'") or die('query failed');

      header('location: login.php');
   echo 'Thank you for registration!';
};

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: login.php");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
    }
}
?>