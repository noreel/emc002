<?php

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:LoginPage.php');
}
?>

<!DOCTYPE html>

    <head>
        
        <title>
            Ronaldo's Kitchen
        </title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon"
        href="https://www.wordstream.com/wp-content/uploads/2023/10/Free-Website-Grader-Sidebar-Promo-Oct2023.webp">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="styleSheet.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </head>

    <body id="shopPage">
        
    <nav>
            
            <div class="float-start">
                <img src="prodpic/lugo.png" alt="Ronaldos's Kitchen" class="img-fluid" style="width: 95px;height: 80px;">
            </div>
            
            <input type="checkbox" id="check">

            <label for="check" class="checkbtn"> 
                <i class="fa fa-bars"></i>
            </label>

            <ul>
                <li>
                    <a href="homePage.php">
                        Home
                    </a>
                </li>
                <li>
                    <a href="AboutPage.php">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="ShopPage.php">
                        Order Now
                    </a>
                </li>
                <!-- <li>
                    <a href="LogInPage.php">
                        Log in
                    </a>
                </li> -->
                <li>
                    <a href="SignUpPage.php">
                        Sign Up
                    </a>
                </li>
                <li>
                <div class="container">
                        <button class="btn btn-success btn-md dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            user
                        </button>
                        <ul class="dropdown-menu">
                            <?php
                                $con = mysqli_connect('localhost', 'root', '','online_store');

                                // $select_profile_number = mysqli_query($con, "SELECT * FROM `profile` WHERE user_id = '$user_id'") or die('query failed');
                                // $cart_rows_number = mysqli_num_rows($select_profile_number); 
                            ?>
                            
                            <p>Username: <span><?php echo $_SESSION['username']; ?></span></p>
                        
                            <p>Email: <span><?php echo $_SESSION['email']; ?></span></p>
                        
                            <a href="logout.php" class="delete-btn">LOGOUT</a>
                            
                        </ul>
                    </div>
                </li>
            </ul>

            <!-- <div class="icons">
                <div id="user-btn" class="fas fa-user"></div>
                <?php
                    $con = mysqli_connect('localhost', 'root', '','online_store');

                    $select_cart_number = mysqli_query($con, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                    $cart_rows_number = mysqli_num_rows($select_cart_number); 
                ?>
                <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
            </div>

            <div class="user-box">
                <p>Name: <span><?php echo $_SESSION['user_name']; ?></span></p>
                <p>Email: <span><?php echo $_SESSION['user_email']; ?></span></p>
                <a href="logout.php" class="delete-btn">LOGOUT</a>
            </div> -->

        </nav>

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="prodpic/slide1.jpg" class="d-block w-100 h-200" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Have a taste of flavorful dishes</h2>
                    
                </div>
                </div>
                <div class="carousel-item">
                <img src="prodpic/slide2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Coming Soon!</h2>
                    
                </div>
                </div>
                <div class="carousel-item">
                <img src="prodpic/slide3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Coming Soon!</h2>
                    
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h1 class="text-center my-5">
            What We Serve
        </h1>
        
        <div class="container" style="margin: 20px auto 20px;">
            
            <div class="row gx-5 gy-5">
                
                <?php
                    $con = mysqli_connect('localhost', 'root', '','online_store');

                    $select_products = mysqli_query($con, "SELECT * FROM `products`") or die('query failed');
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_products = mysqli_fetch_assoc($select_products)){
                ?>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="image">
                                <img src="prodpic\<?php echo $fetch_products['image']; ?>" class="card-img-top" alt="<?php echo $fetch_products['image']; ?>">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $fetch_products['itemname']; ?></h5>
                                <p class="card-text"><?php echo $fetch_products['description']; ?></p>
                                <p class="card-text"><?php echo $fetch_products['price']; ?></p>
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>    
                <?php
                        }
                    }else{
                        echo '<p class="empty">.....</p>';
                    }
                ?>    
                
                
            </div>
            
        </div>

        <footer >
            <ul>
                <li>
                    Follow us to catch the latest news on our new dishes!
                </li>
                <li>
                    fb.com
                </li>
                <li>
                    instagram.com
                </li>
                <li>
                    twitter.com
                </li>
            </ul>

            <h2>
                Thank you for your visit!
            </h2>
        </footer>
            
        <script>
            
        </script>

    </body>

</html>