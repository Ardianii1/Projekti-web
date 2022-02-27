<?php
require_once 'database.php';
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
</head>
<style>
* {
    font-family: sans-serif;
}
.btn{
   display: block;
   width: 70px;
   height: 10px;
   cursor: pointer;
   border-radius: .5rem;
   margin-top: 1rem;
   font-size: 0.9rem;
   padding:1rem 3rem;
   background: #27ae60;
   color:var(--white);
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
    border-bottom: 1px solid black;
    font-size: 1rem;
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
</style>

<body>
<a href="../admin.php" class="btn"><i class="bi bi-arrow-return-left"></i>Go back</a>

    <div>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Message</th>
                    <!-- <th>Edit</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
         
         $select_contact = mysqli_query($conn, "SELECT * FROM `contactform`");
         if(mysqli_num_rows($select_contact) > 0){
            while($row = mysqli_fetch_assoc($select_contact)){
      ?>
                <tr>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['textarea']; ?></td>
                    <!-- <td><a href="edit.php?id=<?php echo $row['id']?>">Edit</a></td> -->
                    <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
                </tr>
                
            </tbody>
            <?php
            };    
            }else{
            //    echo "<div class='empty'>no product added</div>";
            };
         ?>
        </table>
        <!-- <a href="../contact.php">create</a> -->
    </div>
</body>

</html>
<?php
  }
  ?>