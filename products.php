<?php
    @include 'admin/products/cartdb.php';
    session_start();
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
        header("location: login.php");
      }
    // $menu = new MenuController;
    // if(isset($_POST['submit'])){
    //     $menu->insert($_POST);
    // }
    if(isset($_POST['submit'])){

        $image = $_POST['image'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $quantity = 1;
     
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE title = '$title'");

     
        if(mysqli_num_rows($select_cart) > 0){
           $message[] = 'product already added to cart';
        }else{
           $insert_product = mysqli_query($conn, "INSERT INTO `cart`(image, title, price, quantity) VALUES('$image', '$title', '$price', '$quantity')");
           $message[] = 'product added to cart succesfully';
        }
     
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/products.css">
    <script src="storecart.js" async></script>
</head>
<body>
    <?php include'header.php'?>
    <div class="productdiv">
        <div class="samsung" id="samsung">
            <h1>Samsung</h1>
            <h6>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non quis dicta sed placeat consectetur sint at illo aperiam molestias, veniam corrupti repudiandae repellat, voluptates omnis amet harum maxime deleniti optio!</h6>
            <div class="samsung-product">
                <?php
                 $select_products = mysqli_query($conn, "SELECT * FROM `products` where lloji = 'samsung'");
                 if(mysqli_num_rows($select_products) > 0){
                    while($fetch_product = mysqli_fetch_assoc($select_products)){
                 ?>
                 <form action="" method="post">
                    <div class="card1 shop-item">
                        <div class="product1-img"><img src="images/<?php echo $fetch_product['image']; ?>" name="image" alt=""><input type="hidden" name="image" value="<?php echo $fetch_product['image']; ?>"></div>
                            <div class="product-detail1">
                            <span class="shop-item-title" name=""><?php echo $fetch_product['title']; ?></span><input type="hidden" class="shop-item-title" name="title" value="<?php echo $fetch_product['title']; ?>">
                                <div class="rating1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </div>
                                <p name="description" value=""><?php echo $fetch_product['description']; ?></p>
                                <div class="buttons1">
                                    <div class="price1 shop-item-price"  name="price" value="">$<?php echo $fetch_product['price']; ?> <input type="hidden" name="price" value="<?php echo $fetch_product['price']; ?>"> </div>
                                    <!-- <input type="submit" class="cart1 bttn" name="submit" value="Add to cart"> -->
                                    <button class="cart1 bttn" type="submit" name="submit" >Add to cart</button>
                                    <button class="favourite1 bttn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                    </div>
                 </form>
                 <?php
                    };
                };
                ?>
                
            </div>
        </div>

        <div class="lenovo" id="lenovo">
            <h1>Lenovo</h1>
            <h6>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non quis dicta sed placeat consectetur sint at illo aperiam molestias, veniam corrupti repudiandae repellat, voluptates omnis amet harum maxime deleniti optio!</h6>
            <div class="lenovo-product">
            <?php
                 $select_products = mysqli_query($conn, "SELECT * FROM `products` where lloji = 'lenovo'");
                 if(mysqli_num_rows($select_products) > 0){
                    while($fetch_product = mysqli_fetch_assoc($select_products)){
                 ?>
                 <form action="" method="post">
                    <div class="card1 shop-item">
                        <div class="product1-img"><img src="images/<?php echo $fetch_product['image']; ?>" name="image" alt=""><input type="hidden" name="image" value="<?php echo $fetch_product['image']; ?>"></div>
                            <div class="product-detail1">
                            <span class="shop-item-title" name=""><?php echo $fetch_product['title']; ?></span><input type="hidden" class="shop-item-title" name="title" value="<?php echo $fetch_product['title']; ?>">
                                <div class="rating1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </div>
                                <p name="description" value=""><?php echo $fetch_product['description']; ?></p>
                                <div class="buttons1">
                                    <div class="price1 shop-item-price"  name="price" value="">$<?php echo $fetch_product['price']; ?> <input type="hidden" name="price" value="<?php echo $fetch_product['price']; ?>"> </div>
                                    <!-- <input type="submit" class="cart1 bttn" name="submit" value="Add to cart"> -->
                                    <button class="cart1 bttn" type="submit" name="submit" >Add to cart</button>
                                    <button class="favourite1 bttn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                    </div>
                 </form>
                 <?php
                    };
                };
                ?>
                
            </div>
        </div>
        <div class="apple" id="apple">
            <h1>Apple</h1>
            <h6>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non quis dicta sed placeat consectetur sint at illo aperiam molestias, veniam corrupti repudiandae repellat, voluptates omnis amet harum maxime deleniti optio!</h6>
            <div class="apple-product">
            <?php
                 $select_products = mysqli_query($conn, "SELECT * FROM `products` where lloji = 'apple'");
                 if(mysqli_num_rows($select_products) > 0){
                    while($fetch_product = mysqli_fetch_assoc($select_products)){
                 ?>
                 <form action="" method="post">
                    <div class="card1 shop-item">
                        <div class="product1-img"><img src="images/<?php echo $fetch_product['image']; ?>" name="image" alt=""><input type="hidden" name="image" value="<?php echo $fetch_product['image']; ?>"></div>
                            <div class="product-detail1">
                            <span class="shop-item-title" name=""><?php echo $fetch_product['title']; ?></span><input type="hidden" class="shop-item-title" name="title" value="<?php echo $fetch_product['title']; ?>">
                                <div class="rating1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </div>
                                <p name="description" value=""><?php echo $fetch_product['description']; ?></p>
                                <div class="buttons1">
                                    <div class="price1 shop-item-price"  name="price" value="">$<?php echo $fetch_product['price']; ?> <input type="hidden" name="price" value="<?php echo $fetch_product['price']; ?>"> </div>
                                    <!-- <input type="submit" class="cart1 bttn" name="submit" value="Add to cart"> -->
                                    <button class="cart1 bttn" type="submit" name="submit" >Add to cart</button>
                                    <button class="favourite1 bttn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                    </div>
                 </form>
                 <?php
                    };
                };
                ?>
                
            </div>
        </div>
        <div class="hp" id="hp">
            <h1>Hp</h1>
            <h6>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non quis dicta sed placeat consectetur sint at illo aperiam molestias, veniam corrupti repudiandae repellat, voluptates omnis amet harum maxime deleniti optio!</h6>
            <div class="hp-product">
            <?php
                 $select_products = mysqli_query($conn, "SELECT * FROM `products` where lloji = 'hp'");
                 if(mysqli_num_rows($select_products) > 0){
                    while($fetch_product = mysqli_fetch_assoc($select_products)){
                 ?>
                 <form action="" method="post">
                    <div class="card1 shop-item">
                        <div class="product1-img"><img src="images/<?php echo $fetch_product['image']; ?>" name="image" alt=""><input type="hidden" name="image" value="<?php echo $fetch_product['image']; ?>"></div>
                            <div class="product-detail1">
                            <span class="shop-item-title" name=""><?php echo $fetch_product['title']; ?></span><input type="hidden" class="shop-item-title" name="title" value="<?php echo $fetch_product['title']; ?>">
                                <div class="rating1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </div>
                                <p name="description" value=""><?php echo $fetch_product['description']; ?></p>
                                <div class="buttons1">
                                    <div class="price1 shop-item-price"  name="price" value="">$<?php echo $fetch_product['price']; ?> <input type="hidden" name="price" value="<?php echo $fetch_product['price']; ?>"> </div>
                                    <!-- <input type="submit" class="cart1 bttn" name="submit" value="Add to cart"> -->
                                    <button class="cart1 bttn" type="submit" name="submit" >Add to cart</button>
                                    <button class="favourite1 bttn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                    </div>
                 </form>
                 <?php
                    };
                };
                ?>
                
            </div>
        </div>
        <div class="dell" id="dell">
            <h1>Dell</h1>
            <h6>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non quis dicta sed placeat consectetur sint at illo aperiam molestias, veniam corrupti repudiandae repellat, voluptates omnis amet harum maxime deleniti optio!</h6>
            <div class="dell-product">
            <?php
                 $select_products = mysqli_query($conn, "SELECT * FROM `products` where lloji = 'dell'");
                 if(mysqli_num_rows($select_products) > 0){
                    while($fetch_product = mysqli_fetch_assoc($select_products)){
                 ?>
                 <form action="" method="post">
                    <div class="card1 shop-item">
                        <div class="product1-img"><img src="images/<?php echo $fetch_product['image']; ?>" name="image" alt=""><input type="hidden" name="image" value="<?php echo $fetch_product['image']; ?>"></div>
                            <div class="product-detail1">
                            <span class="shop-item-title" name=""><?php echo $fetch_product['title']; ?></span><input type="hidden" class="shop-item-title" name="title" value="<?php echo $fetch_product['title']; ?>">
                                <div class="rating1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </div>
                                <p name="description" value=""><?php echo $fetch_product['description']; ?></p>
                                <div class="buttons1">
                                    <div class="price1 shop-item-price"  name="price" value="">$<?php echo $fetch_product['price']; ?> <input type="hidden" name="price" value="<?php echo $fetch_product['price']; ?>"> </div>
                                    <!-- <input type="submit" class="cart1 bttn" name="submit" value="Add to cart"> -->
                                    <button class="cart1 bttn" type="submit" name="submit" >Add to cart</button>
                                    <button class="favourite1 bttn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                    </div>
                 </form>
                 <?php
                    };
                };
                ?>
                
            </div>
            
        </div>
    </div>
    <!-- <?php include'footer.php'?> -->
    <script src="main.js"></script>
</body>
</html>