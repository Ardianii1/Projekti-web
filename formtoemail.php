<?php

if(isset($_POST['submit'])){
  $mailto = "ardianhoti662@gmail.com";
  $name = $_POST['username'];
  $lastname = $_POST['lastname'];
  $fromEmail = $_POST['email'];
  $phone = $_POST['number'];
  $textarea = $_POST['textarea'];

  $message = "Client Name: " . $name . "\n"
  . "Last Name: " . $lastname . "\n" 
  . "Email: " . $fromEmail . "\n"
  . "Number: " . $phone . "\n"
  . "Message: " . $textarea . "\n"


  $headers = "From: " . $fromEmail;

  $result = mail($mailto, $message, $headers);

}
?>
