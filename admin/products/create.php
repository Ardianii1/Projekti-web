<?php
    require_once 'cartdb.php';

    if(isset($_POST['submit'])){
       $p_name = $_POST['title'];
       $p_description = $_POST['description'];
       $p_price = $_POST['price'];
        $p_image = $_POST['image'];
        $p_lloji = $_POST['lloji'];
        $insert_query = mysqli_query($conn, "INSERT INTO `products`(image, title, description, price, lloji) VALUES('$p_image', '$p_name', '$p_description', '$p_price', '$p_lloji')") or die('query failed');
         header('location: menuDashboard.php');
      
     };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
   <div class="admin-product-form-container">
      <form action="" method="post">
         <h3>add a new product</h3>
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="image" class="box">
         <input type="text" placeholder="Enter product name" name="title" class="box">
         <input type="text" placeholder="Enter product description" name="description" class="box">
         <input type="number" placeholder="Enter product price" name="price" class="box">
         <input type="text" placeholder="Enter product mark" name="lloji" class="box">
         <input type="submit" class="btn" name="submit" value="Add product">
         <a href="adminDashboard.php" class="btn">go back!</a>
      </form>
   </div>
</div>
</body>
</html>
