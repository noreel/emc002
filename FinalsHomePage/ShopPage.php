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
            
            <label class="logo">
                Ronaldo
            </label>
            
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

        </nav>
        <div class="container">
            <div class="col-12" i>
                <h1>
                    this is the order page
                </h1>
            </div>
        </div>
        
        <div class="container" style="margin: 20px auto 20px;">
            <!-- <div class="grid"> -->
                <div class="row gx-5 gy-5">
                    
                    <?php
                        $con = mysqli_connect('localhost', 'root', '','online_store');

                        $select_products = mysqli_query($con, "SELECT * FROM `products`") or die('query failed');
                        if(mysqli_num_rows($select_products) > 0){
                            while($fetch_products = mysqli_fetch_assoc($select_products)){
                    ?>
                        <div class="col-12 col-md-6 col-lg-3">
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
            <!-- </div> -->
        </div>
            
        <script>
            
        </script>

    </body>

</html>