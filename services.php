<?php
    session_start();

if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>
<?php include'header.php' ?>

<body>
    <div class="service">
        <div class="title">
            <h1>Our services</h1>
        </div>
        <div class="services">

            <div class="card">
                <i class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                        class="bi bi-cart3" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg></i>
                <h1>Online Shopping</h1>
                <div class="content">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias ex quisquam temporibus minima
                        maiores quas? Consectetur rerum praesentium impedit deleniti!</p>
                    <p style="text-align: center;">
                        <a href="products.php" class="button">Shop</a>

                    </p>
                </div>
            </div>

            <div class="card">
                <i class="icon fa fa-wrench fa-4x" aria-hidden="true"></i>
                <h1>Repair & Upgrade</h1>
                <div class="content">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias ex quisquam temporibus minima
                        maiores quas? Consectetur rerum praesentium impedit deleniti!</p>
                    <p style="text-align: center;">
                        <a href="#" class="button">Read more</a>

                    </p>
                </div>
            </div>

            <div class="card">
                <i class="icon fa fa-exchange fa-4x" aria-hidden="true"></i>
                <h1>Second hand</h1>
                <div class="content">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias ex quisquam temporibus minima
                        maiores quas? Consectetur rerum praesentium impedit deleniti!</p>
                    <p style="text-align: center;">
                        <a href="" class="button">Read more</a>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="service">
		<div class="cardd">
			<div>
				<h1>Online Shopping</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, facere.</p>
			</div>
			<div>
				<img src="" alt="">
			</div>
		</div>
		<div class="cardd">
			<div>
				<h1></h1>
				<p></p>
			</div>
			<div>
				<img src="" alt="">
			</div>
		</div>
		<div class="cardd">
			<div>
				<h1></h1>
				<p></p>
			</div>
			<div>
				<img src="" alt="">
			</div>
		</div>
    </div> -->

    <?php include'footer.php' ?>
</body>

</html>