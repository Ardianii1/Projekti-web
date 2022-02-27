<?php
@include 'dbData.php';
$sql = mysqli_query($conn, "SELECT * FROM `users` ") or die('query failed');
$row = mysqli_fetch_assoc($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="text" name="password" value="<?php echo $row?>">
<?php
    echo $row;
    ?>
</body>
</html>