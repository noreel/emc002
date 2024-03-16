<?php

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){

    $user_id = null;
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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="styleSheet.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </head>

    <body>
        
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
                <li>
                    <a href="LogInPage.php">
                        Log in
                    </a>
                </li>
                <li>
                    <a href="SignUpPage.php">
                        Sign Up
                    </a>
                </li>
            </ul>

            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <a href="search_page.php" class="fas fa-search"></a>
                <div id="user-btn" class="fas fa-user"></div>

                <?php
                    $con = mysqli_connect('localhost', 'root', '','online_store');

                    $select_cart_number = mysqli_query($con, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                    $cart_rows_number = mysqli_num_rows($select_cart_number); 
                ?>
                <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
            </div>

            <div class="user-box">
                <p>Name: <span><?php 
                if($user_id != null){
                    echo $_SESSION['user_name']; 
                }
                else{
                    echo '<p class="empty">.....</p>';
                }
                ?></span></p>

                <p>Email: <span><?php
                if($user_id != null){
                echo $_SESSION['user_email'];
                }
                else{
                    echo '<p class="empty">.....</p>';
                } ?></span></p>

                <a href="logout.php" class="delete-btn">LOGOUT</a>
            </div>

        </nav>
        
        <div class="col-12">
            <div class="col-12" id="introPage">
                <div id="over">
                </div>
                <div class="container-md-5 text-center" id="logoNCat">
                    <img class="img-fluid" src="prodpic/lugo.png" alt="Ronaldos's Kitchen">

                    <h3 class="catchPhrase">
                        Where every flavor tells a story
                    </h3>
                </div>
            </div>
            <div class="col-12" id="introContent">
                <p id="text1">
                    Ronaldo’s Kitchen is your go-to destination for delicious food delivered right to your doorstep. Whether you’re craving comfort classics or exploring exotic flavors, we’ve got you covered. 
                </p>
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