<?php
// require_once 'dbData.php';
//  session_start(); 
// $host = "localhost";
// $user = "root";
// $password = "";
// $db = "users_login";

// $data= mysqli_connect($host,$user,$password,$db);
// if($data===false){
//     die("Connection error");
// }

// $select_user = mysqli_query($conn, "SELECT * FROM `users`");

// if($_SERVER["REQUEST_METHOD"] == "post"){
//         $email=$_POST["email"];
//         $password=$_POST["password"];

//         $sql="SELECT * FROM users where email = '".$email."' AND password = '".$password."' ";
//         $result = mysqli_query($data,$sql);
//         $row = mysqli_fetch_array($result);
        // if($row["type"]=="user"){
        //     //
        // }elseif($row["type"]=="admin"){
        //     //
        // }else{
        //     echo "Email or password incorrect";
        // }
    // }

    
        // $user= mysqli_type($allUsers, $type);
        
        //     if($user['email'] == $email && $user['password'] == $password){
        //         $_SESSION['type'] = $user['type'];
        //         return true;
        //     }
        
        // return false;
    // }
    
?>
<?php
@include 'cartdb.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="register.js"></script>
</head>
<header class="header">
    <nav class="navbar fixed-top navbar-light" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
        &nbsp;
        <a href="index.php"><img src="img/logo.png" alt="Logo" width="150px" height="40px"></a>


        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="products.php">Products</a>
        <a href="contact.php">Contact</a>
        <a href="services.php">Services</a>

        <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
        <a href="cart.php" class="cart" style=""><span>🛒<?php echo $row_count; ?></span></a>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search.." aria-label="Search">
            <!-- <button class="btn " type="submit"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button> -->
        </form>
        <!-- <div class="dropdown-show" >
                <a class="btn dropdown-toggle" href="#"  data-bs-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg></a>

                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div> -->
        <?php
        if (isset($_SESSION['type']) && $_SESSION['type'] == "admin") {

        ?>
        <a href="admin/admin.php">Dashboard</a>
        <?php
        }
        ?>
        <a href="logout.php">Logout</a>
        &nbsp;

    </nav>

    <!-- <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="Logo" width="150px" height="40px"></a>
    </div> -->

    <!-- <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category"> -->

</header>

<body>

    <script src="main.js"></script>
</body>

</html>