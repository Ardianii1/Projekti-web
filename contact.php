<?php
    require_once 'admin/contactform/database.php';
    session_start();
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
      header("location: login.php");
    }
    // $menu = new MenuController;
    // if(isset($_POST['submit'])){
    //     $menu->insert($_POST);
    // }

    if(isset($_POST['submit'])){

      $username = $_POST['username'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $textarea = $_POST['textarea'];
   
      // $select_contact = mysqli_query($conn, "SELECT * FROM `contactform`");
      // if(empty($_POST['username']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['number']) || empty($_POST['textarea'])){
      //   echo 'Please fill all';
      // }else{
      //   $message[] = 'Form sent succesfully!!';
        
      // }
      
      // if(mysqli_num_rows($select_contact) > 0){
        //    $message[] = 'Form already sent!';
        // }else{
          // }
          
  }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="icon" href="img/call.png">
    <style>
    .error {
        color: #FF0000;
    }
    </style>
</head>

<body>
    <?php

$error = ""; $error1 = ""; $error2 = ""; $error3 = ""; $error4 = ""; $error5 = ""; $error6 = "";
$name = $lastname = $email = $number = $textarea = "";
$succsessMessage = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["username"])) {
    $error1 = "Username is required";
  } else {
    $name = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $error1 = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["lastname"])) {
    $error2 = "Lastname is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
      $error2 = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $error3 = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error3 = "Invalid email format";
    }
  }
  if (empty($_POST["number"])) {
    $error4 = "Number is required";
  } else {
    $number = test_input($_POST["number"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/",$number)) {
      $error4 = "Number is invalid Example: +0123456789";
    }
  }
  if (empty($_POST["textarea"])) {
    $error6 = "Textarea is required";
  } else {
    $textarea = test_input($_POST["textarea"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$textarea)) {
      $error6 = "Only letters and white space allowed";
    }
  }
  
  if(empty($_POST["username"]) || empty($_POST["lastname"]) || empty($_POST["email"]) || empty($_POST["number"]) || empty($_POST["textarea"])){
    echo 'Please fill all';
  }else{
    $insert_contact = mysqli_query($conn, "INSERT INTO `contactform`(username, lastname, email, number, textarea) VALUES('$username', '$lastname', '$email', '$number', '$textarea')");
    header('Location: contact.php');
    $succsessMessage = "Thank you for your respond ";
  }
    
  }

      // if($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
      //   $error5 = "Email Adrres is invalid";
      // }
      // if($error1 != "" || $error2 != "" || $error3 != "" || $error4 != ""){
      //   $error = "<strong>Danger!</strong> There were error(s)";
      // }else{
      //   $emailto = "ardianhoti662@gmail.com";
      //   $subject = $_POST['textarea'];
      //   $headers = "From: ".$_POST['email'];
      // }
    
    ?>
    <?php include'header.php'?>
    <div class="div1">
        <h5 class="error"> <?php echo $succsessMessage; ?></h5>
        <div class="kontainer">

            <div class="contactinfo">
                <div>
                    <h2 class="h2">Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span><img src="img/location.png" alt="1"></span>
                            <span>Prishtine.</span>
                        </li>
                        <li>
                            <span><img src="img/mail.png" alt="2"></span>
                            <span>info@xtreme.com</span>
                        </li>
                        <li>
                            <span><img src="img/call.png" alt="3"></span>
                            <span>+0123456789</span>
                        </li>
                    </ul>
                </div>
                <ul class="sci">
                    <li><a href="https://www.facebook.com"><img src="img/1.png" alt="5"></a></li>
                    <li><a href="https://www.twitter.com"><img src="img/2.png" alt="4"></a></li>
                    <li><a href="https://www.instagram.com"><img src="img/3.png" alt="3"></a></li>
                    <li><a href="https://www.linkedin.com"><img src="img/5.png" alt="1"></a></li>
                </ul>
            </div>
            <form class="contactForm" method="POST"  onsubmit="sendEmail()">
                <h2 class="h2">Send a Message</h2>
                <span class="error">* required field</span>
                <div class="formBox">

                    <div class="inputBox w50">
                        <input type="text" name="username" id="username" placeholder="Username"
                            value="<?php echo $name?>">
                        <!-- <span class="span">First Name</span> -->
                        <p id="usererror" class="text-danger font-weight-bold"></p>
                        <span class="error">* <?php echo $error1; ?></span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="lastname" id="lastname" placeholder="Lastname"
                            value="<?php echo $lastname?>">
                        <!-- <span class="span">Lastname</span> -->
                        <p id="lastnameerror" class="text-danger font-weight-bold"></p>
                        <span class="error">* <?php echo $error2; ?></span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="email" id="email" placeholder="Email address"
                            value="<?php echo $email?>">
                        <!-- <span class="span">Email</span> -->
                        <p id="emailerror" class="text-danger font-weight-bold"></p>
                        <span class="error">* <?php echo $error3; ?></span>
                    </div>
                    <div class="inputBox w50">
                        <input type="tel" name="number" id="number" placeholder="Phone number"
                            value="<?php echo $number?>">
                        <!-- <span class="span">Number</span> -->
                        <p id="numbererror" class="text-danger font-weight-bold"></p>
                        <span class="error">* <?php echo $error4; ?></span>
                    </div>
                    <div class="inputBox w100">
                        <textarea name="textarea" id="textarea" placeholder="How we can help you?"></textarea>
                        <span class="error">* <?php echo $error6; ?></span>
                    </div>
                    <div class="inputBox w100">
                        <button type="submit" name="submit" value="Submit">Send</button>
                    </div>

                    <?php
          
          ?>


                    <div>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
    function sendEmail() {
        Email.send({
            // SecureToken: "a1c35a23-6ff8-47a2-82e6-80cc0d049989",
            Host : "smtp.gmail.com",
            Username : "ah54088@ubt-uni.net",
            Password : "EB0DB5EBECF0215EB956CC95B916DC220EE9",
            To: "ardianhoti662@gmail.com",
            From: document.getElementById("email").value,
            Subject: "New contact form",
            Body: "Name" + document.getElementById("username").value
                + "<br> Last name:" + document.getElementById("lastname").value
                + "<br> Email:" + document.getElementById("email").value
                + "<br> Number:" + document.getElementById("number").value
                + "<br> Message:" + document.getElementById("textarea").value

        }).then(
            message => alert("Form sent succsessfully!")
        );
    }
    </script>
    <?php include'footer.php'?>


</body>
<!-- EB0DB5EBECF0215EB956CC95B916DC220EE9 -->
</html>