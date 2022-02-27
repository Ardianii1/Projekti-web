<?php

require_once 'cartdb.php';

if(isset($_POST['submit']) && isset($_GET['id'])){
    $id = $_GET['id'];
    $image = $_POST['image'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $lloji = $_POST['lloji'];
    $update_query = mysqli_query($conn, "UPDATE `products` SET  image = '$image', title = '$title', description = '$description', price = '$price', lloji = '$lloji' WHERE id = '$id'");
    header('location: adminDashboard.php');
 }
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

<?php
         if(isset($_GET['id'])){
            $edit_id = $_GET['id'];
            $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
            if(mysqli_num_rows($edit_query) > 0){
               while($fetch_edit = mysqli_fetch_assoc($edit_query)){
         ?>
<div class="admin-product-form-container">
   <form action="" method="post">
      <h3>Update a product</h3>
      <input type="file" accept="image/png, image/jpeg, image/jpg" name="image" class="box" value="<?php echo $fetch_edit['image']; ?>">
      <input type="text" placeholder="Enter product name" name="title" class="box" value="<?php echo $fetch_edit['title']; ?>">
      <input type="text" placeholder="Enter product description" name="description" class="box" value="<?php echo $fetch_edit['description']; ?>">
      <input type="number" placeholder="Enter product price" name="price" class="box" value="<?php echo $fetch_edit['price']; ?>">
      <input type="text" placeholder="Enter product price" name="lloji" class="box" value="<?php echo $fetch_edit['lloji']; ?>">
      <input type="submit" class="btn" name="submit" value="Update">
      <a href="adminDashboard.php" class="btn">go back!</a>
   </form>

</div>

<?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>
