<?php
// require_once '../../dbData.php';
require_once 'cartdb.php';

session_start();
if(isset($_SESSION['type']) && $_SESSION['type'] == "user"){
    header("location: ../../login.php");
  }else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminDashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="style2.css">
</head>
<style>
* {
    font-family: sans-serif;
    text-align: center;
}

.content-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    width: 100%;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.content-table th,
.content-table td {
    padding: 12px 15px;
    width: 430px;
    overflow: hidden;
}

.link {
    text-decoration: none;
    color: red;
    font-size: 17px;
}

.first-link {
    color: black;
    font-size: 22px;
    padding-left: 50%;
    position: relative;
    top: 20px;
}

.top-links {
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
h1{
    text-align: center;
}
.description{
    width: 430px;
}
</style>

<body>
    <a href="../admin.php" class="btn"><i class="bi bi-arrow-left"></i>Go back</a>
<div class="product-display">
    <h1>SAMSUNG</h1>
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product description</th>
            <th>product price</th>
            <th>action</th>
         </tr>
         </thead>
         <?php
         
         $select_products = mysqli_query($conn, "SELECT * FROM `products` where lloji = 'samsung'");
         if(mysqli_num_rows($select_products) > 0){
            while($row = mysqli_fetch_assoc($select_products)){
      ?>
         <tr>
            <td><img src="images/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['title']; ?></td>
            <td width="380px"><?php echo $row['description']; ?></td>
            <td>$<?php echo $row['price']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i>Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i>Delete</a>
            </td>
        </tr>
        <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
    </table>
    <a href="create.php" class="btn-add"><i class="bi bi-plus-circle"></i>Add new</a>
</div>

<div class="product-display">
    <h1>LENOVO</h1>
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product description</th>
            <th>product price</th>
            <th>action</th>
         </tr>
         </thead>
         <?php
         
         $select_products = mysqli_query($conn, "SELECT * FROM `products` where lloji = 'lenovo'");
         if(mysqli_num_rows($select_products) > 0){
            while($row = mysqli_fetch_assoc($select_products)){
      ?>
         <tr>
            <td><img src="images/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['title']; ?></td>
            <td width="380px"><?php echo $row['description']; ?></td>
            <td>$<?php echo $row['price']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i>Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i>Delete</a>
            </td>
        </tr>
        <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
    </table>
    <a href="create.php" class="btn-add"><i class="bi bi-plus-circle"></i>Add new</a>
</div>

<div class="product-display">
    <h1>APPLE</h1>
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product description</th>
            <th>product price</th>
            <th>action</th>
         </tr>
         </thead>
         <?php
         
         $select_products = mysqli_query($conn, "SELECT * FROM `products` where lloji = 'apple'");
         if(mysqli_num_rows($select_products) > 0){
            while($row = mysqli_fetch_assoc($select_products)){
      ?>
         <tr>
            <td><img src="images/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['title']; ?></td>
            <td width="380px"><?php echo $row['description']; ?></td>
            <td>$<?php echo $row['price']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i>Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i>Delete</a>
            </td>
        </tr>
        <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
    </table>
    <a href="create.php" class="btn-add"><i class="bi bi-plus-circle"></i>Add new</a>
</div>

<div class="product-display">
    <h1>HP</h1>
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product description</th>
            <th>product price</th>
            <th>action</th>
         </tr>
         </thead>
         <?php
         
         $select_products = mysqli_query($conn, "SELECT * FROM `products` where lloji = 'hp'");
         if(mysqli_num_rows($select_products) > 0){
            while($row = mysqli_fetch_assoc($select_products)){
      ?>
         <tr>
            <td><img src="images/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['title']; ?></td>
            <td width="380px"><?php echo $row['description']; ?></td>
            <td>$<?php echo $row['price']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i>Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i>Delete</a>
            </td>
        </tr>
        <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
    </table>
    <a href="create.php" class="btn-add"><i class="bi bi-plus-circle"></i>Add new</a>
</div>

<div class="product-display">
    <h1>DELL</h1>
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product description</th>
            <th>product price</th>
            <th>action</th>
         </tr>
         </thead>
         <?php
         
         $select_products = mysqli_query($conn, "SELECT * FROM `products` where lloji = 'dell'");
         if(mysqli_num_rows($select_products) > 0){
            while($row = mysqli_fetch_assoc($select_products)){
      ?>
         <tr>
            <td><img src="images/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['title']; ?></td>
            <td width="380px"><?php echo $row['description']; ?></td>
            <td>$<?php echo $row['price']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i>Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i>Delete</a>
            </td>
        </tr>
        <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
    </table>
    <a href="create.php" class="btn-add"><i class="bi bi-plus-circle"></i>Add new</a>
</div>

</body>

</html>
<?php
  }
  ?>