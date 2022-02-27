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
    <title>About</title>
    <link rel="stylesheet" href="css/about.css">
</head>
<?php include'header.php'?>
<body>
    <div class="aboutdiv">
        <div class="company" id="company">
            <div class="company-about">
                <h1>Company</h1>
                <p>At <i>XTREME</i>, we create pathways to connect millions of sellers and buyers in more than 100
                        markets around the world.
                        Our technology empowers our customers, providing everyone the opportunity to grow and thrive —
                        no matter who they
                        are or where they are in the world. And the ripple effect of our work creates waves of change
                        for our customers,
                        our company, our communities and our planet.</p>
                <img src="img/logo.png" alt="">
            </div>
            
        </div>
        <div class="team" id="team">
            <h1>Team</h1>
            <p>Meet the company team members, also feel free to contact them via their social media.</p>
            <div class="team-about">
                <div class="team1">
                    <div class="containe">
                        <div class="img-containe">
                            <img src="img/Ardian.jfif" alt="Photo profile">
                        </div>
                        <p class="full-name">Ardian Hoti</p>
                        <p class="role">UX/UI Developer</p>
                        <p class="description">
                            Hi there! I'am Ardian Hoti owner of the company, also UX/UI Developer.
                        </p>
                        <div class="social-containe">
                            <a href="https://www.facebook.com"><i class="icon ion-social-facebook"></i></a>
                            <a href="https://www.twitter.com"><i class="icon ion-social-twitter"></i></a>
                            <a href="https://www.instagram.com"><i class="icon ion-social-instagram"></i></a>
                            <a href="https://www.github.com"><i class="icon ion-social-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team2">
                    <div class="containe">
                        <div class="img-containe">
                            <img src="img/musli.jpeg" alt="Photo profile">
                        </div>
                        <p class="full-name">Musli Thaqi</p>
                        <p class="role">Photographer</p>
                        <p class="description">
                            Hi there! I'm Musli Thaqi Co-Owner of the company also a proffessional Photographer.
                        </p>
                        <div class="social-containe">
                            <a href="https://www.facebook.com"><i class="icon ion-social-facebook"></i></a>
                            <a href="https://www.twitter.com"><i class="icon ion-social-twitter"></i></a>
                            <a href="https://www.instagram.com"><i class="icon ion-social-instagram"></i></a>
                            <a href="https://www.github.com"><i class="icon ion-social-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="terms" id="terms">
            <div class="legacy-about">
                <h1>Terms&Condition</h1>
                <p>Terms of service are the legal agreements between a service provider and a person who wants to use that service. The person must agree to abide by the terms of service in order to use the offered service. Terms of service can also be merely a disclaimer, especially regarding the use of websites..</p>

            </div>
            
        </div>
    </div>
<body>
    
    <?php include'footer.php'?>
    <script src="main.js"></script>
</body>
</html>