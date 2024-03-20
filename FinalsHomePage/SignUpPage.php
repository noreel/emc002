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

        <script defer src="script.js"></script>

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
            </ul>

        </nav>
        
        <div class="col-12" id="signUpPage">
            
                <div class="row justify-content-center">
                    <div class="col-6 my-5">
                        <form name="frmContact" method="post" id="form" action="signupProcess.php">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                            <br>
                            <br>
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" id="password" name="password" required>
                            <br>
                            <br>
                            <label for="cpassword" class="form-label">Confirm Password</label>
                            <input type="text" class="form-control" id="cpassword" name="cpassword" required>
                            <br>
                            <br>
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                            <br>
                            <br>
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                            <br>
                            <br>
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" required>
                            <br>
                            <br>
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                            <br>
                            <br>
                            <label for="email" class="form-label">email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                            <br>
                            <input class="btn btn-primary" type="submit" value="Enter" name="sub">
                            <div class="text-center">
                                <div id="error" style="color:white;"></div>
                            </div>
                            <div class="container text-center">
                                <?php 
                                    if(isset($_REQUEST["err"]))
                                        $msg="User with the same email exists";
                                ?>
                                <p style="color:white;">
                                    <?php if(isset($msg))
                                        {
                                    
                                            echo $msg;
                                        }
                                    ?>
                                    
                                </p>
                            </div>
                        </form>
                    </div>
                    
                </div>
            
        </div>

            <!-- <script>
                
                // form.addEventListener('submit',(e) => {
                //     let user = document.getElementById('username').value
                //     let user_length = user.length
                    
                //     let rpass = false;
                //     let ruser = false;
    
                //     let pass = document.getElementById('password').value
                //     let pass_length = pass.length
                    
                //     let cpass = document.getElementById('cpassword').value

                //     let Spec = /[^A-Za-z0-9]/;
                    
                //     // const special = /[`!@#$%^&*()+\-=\[\]{};':"\\|,.<>\/?~]/;
                    
    
    
                //     if(user_length == 0 || pass_length == 0)
                //     {
                //         window.alert("Please input proper username or password")
                //         return;
                    
                //     }
    
                //     if(user_length < 6)
                //     {
                //         window.alert("Username must be greater than 6 letters")
                //         return;
                //     }
    
                //     else if(user_length >= 6)
                //     {
                //         ruser = true;
                                             
                //     }
    
                //     if(pass_length < 8)
                //     {
                //         window.alert("Password must be more than 8")
                //         return;
                //     }
    
                //     else if(pass_length >= 8) 
                //     {
                //         rpass = true;
                //         // if(Num.test(pass) && Spec.test(pass)){
                //         //     rpass = true;
                //         //     return;
                //         // }
                //         // else{
                //         //     window.alert("Password must contain numbers and special characters")
                //         //     rpass = false;
                //         //     return;
                //         // }
                //     }
                    
                //     if(pass != cpass)
                //     {
                //         window.alert("Password do not match")
                //         rpass = false;
                //     }

                //     if(rpass != true && ruser != true)
                //     {
                //         e.preventDefault()
                //     }
                // })
            
            </script> -->
        
    </body>

</html>