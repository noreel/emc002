<?php 
session_start ();
if(!isset($_SESSION["login"]))

	header("location:LoginPage.php"); 
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

    </head>

    <body>
        
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
        
        <div class="col-12">
            <div class="col-12" id="introPage">
                <div id="over">
                </div>
                <div class="" id="logoNCat">
                    <h1 class="logo">
                        Ronaldo's <br> Kitchen
                    </h1>

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
        

        <footer>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            
        </script>

    </body>

</html>