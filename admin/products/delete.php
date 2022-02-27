<?php
require_once 'cartdb.php';

if(isset($_GET['id'])){
    $delete_id = $_GET['id'];
    $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
    if($delete_query){
       header('location:adminDashboard.php');
       $message[] = 'product has been deleted';
    }else{
       header('location:adminDashboard.php');
       $message[] = 'product could not be deleted';
    };
 };

?>