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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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
                </li>
                <li>
                    <a href="SignUpPage.php">
                        Sign Up
                    </a>
                </li> -->
            </ul>

            
        </nav>
        
        <div class="col-12" id="logInPage">
            <br>
            <div class="container my-5">
                <h1 style="color: white;">
                    Log in now
                </h1>
            </div>
            
            <div class="justify-content-center">
                <div class="container-sm my-5" style="width:70vw;">
                    <form action="loginprocess.php" method="POST">
                        <label for="user" style="color: white;">Username</label>
                        <input class="form-control" type="text" id="user" name="username" required>
                        <br>
                        <br>
                        <label for="psw" style="color: white;">Password</label>
                        <input class="form-control" type="text" id="psw" name="password" required>
                        <br>
                        <br>
                        <input class="btn btn-primary btn-lg" type="submit" value="Enter" name="log">
                            
                        </button>
                    </form>
                    <div class="text-center">
                        <a href="SignUpPage.php" style="color:white;">
                            No Account? Create one
                        </a>
                    </div>
                </div>
                <br>
                
                <div class="container text-center">
                    <?php 
                        if(isset($_REQUEST["err"]))
                            $msg="Invalid username or Password";
                    ?>
                    <p style="color:#66545e;">
                        <span style=" background-color:white; padding:10px; border-radius:10px;">
                            <?php if(isset($msg))
                                {
                            
                                    echo $msg;
                                }
                            ?>
                        </span>
                    </p>
                </div>

            </div>
        </div>
            
    </body>

</html>