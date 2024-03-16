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
        
        <div class="col-12" id="signUpPage">
            <h2>
                This is a signUpPage
            </h2>
            <div class="container">
                <div class="row justify-content-center my-5">
                    <div class="col-12">
                        <form name="frmContact" method="post" action="signupProcess.php">
                            <label for="usrname" class="form-label">Username</label>
                            <input type="text" class="form-control" id="uname" name="uname" required>
                            <br>
                            <br>
                            <label for="psw" class="form-label">Password</label>
                            <input type="text" class="form-control" id="password" name="password" required>
                            <br>
                            <br>
                            <label for="cpsw" class="form-label">Confirm Password</label>
                            <input type="text" class="form-control" id="cpassword" name="cpassword" required>
                            <br>
                            <br>
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname">
                            <br>
                            <br>
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname">
                            <br>
                            <br>
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="text" class="form-control" name="mobile" id="mobile">
                            <br>
                            <br>
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address">
                            <br>
                            <br>
                            <label for="email" class="form-label">email</label>
                            <input type="text" class="form-control" name="email" id="email">
                            <br>
                            <input class="btn btn-primary" type="submit" value="Enter" onclick="validateForm()" name="sub">
                        </form>
                    </div>
                </div>
            </div>
            
            <script>
                
                function validateForm() {
                    let user = document.getElementById('user').value
                    let user_length = user.length
                    
                    let rpass = false;
                    let ruser = false;
    
                    let pass = document.getElementById('psw').value
                    let pass_length = pass.length
                    
                    let Spec = /[^A-Za-z0-9]/;
                    
                    const special = /[`!@#$%^&*()+\-=\[\]{};':"\\|,.<>\/?~]/;
                    
    
    
                    if(user_length == 0 || pass_length == 0)
                    {
                        window.alert("please input proper username or password")
                        return;
                    
                    }
    
                    if(user_length < 6)
                    {
                        window.alert("username must be greater than 6")
                        return;
                    }
    
                    else if(user_length >= 6)
                    {
                        ruser = true;
                                             
                    }
    
                    if(pass_length < 8)
                    {
                        window.alert("password must be more than 8")
                    }
    
                    else if(pass_length >= 8) 
                    {
                        
                        if(Num.test(pass) && Spec.test(pass)){
                            rpass = true;
                            return;
                        }
                        else{
                            window.alert("password must contain numbers and special characters")
                            rpass = false;
                            return;
                        }
                    }
    
                    if(rpass == true && ruser == true)
                    {
                        
                    }
                }
            
            </script>
        
    </body>

</html>