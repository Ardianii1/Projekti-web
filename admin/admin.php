<?php
session_start();
if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
    header("location: ../login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="products/style2.css">
</head>
<style>
    .links {
        display: flex;
        justify-content: center;
        align-items: center;
        /* text-align: center; */
    }
    .links a{
        color: black;
        
    }
    .btn{
        display: flex;
        justify-content: center;
        align-items: space-between;
    }

</style>
<body>
    <!-- <?php include '../heasder.php'?> -->
    <div class="links">
        <a href="../" class="btn"><i class="bi bi-arrow-return-left"></i>Go back</a>
        <a href="products/adminDashboard.php" class="btn">Products</a>
        <a href="contactform/menuDashboard.php" class="btn"><i class="bi bi-person-lines-fill"></i>Contactform</a>
    </div>
</body>
</html>