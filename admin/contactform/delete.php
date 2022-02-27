<?php
require_once 'database.php';

if(isset($_GET['id'])){
    $delete_id = $_GET['id'];
    $delete_query = mysqli_query($conn, "DELETE FROM `contactform` WHERE id = $delete_id ") or die('query failed');
    if($delete_query){
       header('location: menuDashboard.php');
       $message[] = 'Form has been deleted';
    }else{
       header('location:menuDashboard.php');
       $message[] = 'Form could not be deleted';
    };
 };
?>