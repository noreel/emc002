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

        </nav>

        <div class="col-12">
            <div class="col-12" id="introPage">
                <div id="over">
                </div>
                <div class="container-md-5 text-center" id="logoNCat">
                    <img class="logo" src="prodpic/lugo.png" alt="Ronaldos's Kitchen">

                    <h3 class="catchPhrase">
                        Where every flavor tells a story
                    </h3>
                </div>
            </div>
            
        </div>

            <br>
            <br>        
            <div class="container-fluid text-center" >
                <h2>
                    Our Philosophy
                </h2>
                <p id="text1">
                    At Ronaldo’s Kitchen, we believe that food is more than sustenance—it’s an art form. Our mission is to create memorable dining experiences by infusing every dish with passion, flavor, and authenticity. Whether you’re a seasoned foodie or a curious beginner, our kitchen welcomes you to explore a world of taste sensations
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

    </body>

</html>