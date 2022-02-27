<?php
session_start();
if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/index.css">

</head> 

<body>
    <?php include'header.php'?>
    <div class="kryesor">
        <div class="divv1">
            <h2><i>Welcome to XTREME</i> </h2>
            <div class="maindiv">
            </div>
        </div>
        <div class="div3">
            <div class="div3-1" id="div3.1">
                <div class="div3img"  width="280px" height="196px">
                    <img src="img/pc.jpg" alt="1">
                </div><a href="#">
                    <h4><em>Computers</em></h4>
                </a>
                &nbsp;
                <p>Coming soon</p>
            </div>
            <div class="div3-2">
                <div class="div3img" >
                    <img src="img/laptop.jpg" alt="2">
                </div>
                <a href="products.php">
                    <h4><em>Laptops</em></h4>
                </a>
                &nbsp;
                <p>Buy best and chepaest laptops on the market.</p>
            </div>
            <div class="div3-3">
                <div class="div3img" width="280px" height="196px">
                    <img src="img/motherboard.jpg" alt="3" >
                </div><a href="#">
                    <h4><em>PC/LAPTOPS PARTS</em></h4>
                </a>
                &nbsp;
                <p>Coming soon</p>
            </div>
        </div>
    </div>

    
    <script src="main.js"></script>
</body>
<?php include'footer.php'?>
</html>