<?php

require_once 'database.php';

if(isset($_POST['submit']) && isset($_GET['id'])){
    $id = $_GET['id'];
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $textarea = $_POST['textarea'];
    $update_query = mysqli_query($conn, "UPDATE `contactform` SET  username = '$username', lastname = '$lastname', email = '$email', number = '$number', textarea = '$textarea' WHERE id = '$id'");
    header('location: menuDashboard.php');
 }
?>


<?php
    if(isset($_GET['id'])){
    $edit_id = $_GET['id'];
    $edit_query = mysqli_query($conn, "SELECT * FROM `contactform` WHERE id = $edit_id");
    if(mysqli_num_rows($edit_query) > 0){
    while($fetch_edit = mysqli_fetch_assoc($edit_query)){
?>
<form method="POST">
    Username:
    <input type="text" name="username" value="<?php echo $fetch_edit['username'];?>">
    <br>
    Lastname:
    <input type="text" name="lastname" value="<?php echo $fetch_edit['lastname'];?>">
    <br>
    Email:
    <input type="text" name="email" value="<?php echo $fetch_edit['email'];?>">
    <br>
    Number:
    <input type="number" name="number" value="<?php echo $fetch_edit['number'];?>">
    <br>
    Message:
    <input type="text" name="textarea"  value="<?php echo $fetch_edit['textarea'];?>">
    <input type="submit" name="submit" value="Update">
</form>
<?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>
