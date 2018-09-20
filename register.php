<?php  
//start the session 
session_start();

//if already a username in session redirect
if (isset($_SESSION["username"])) {
	header("location:first.php");

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
</head>
<body>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>


<!-- navbar starts here -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="index.php">Widget Online Shopping</a>

    <!-- Links -->

    <ul class="navbar-nav" >
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cart.php">View Cart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="orders.php">My Orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dev.php">Developer</a>
        </li>



<!-- navbar ends here-->

<?php
//if the user is logged in and the session saved the action starts here
//we will give 4 option extra
if (isset($_SESSION['username']))
{
    //echo '<ul class="navbar-nav" >';
    //echo '<li class="nav-item">';
    echo '<a class="nav-link" href="account.php">My Account</a>';
    echo '<a class="nav-link" href="logout.php">logout</a>';
    //echo '</li>';
    //echo '</ul>';
}

else{  //else it will two more option


    //echo '<ul class="navbar-nav" >';
    //echo '<li class="nav-item">';
    echo '<a class="nav-link" href="login.php">Log In</a>';
    echo '<a class="nav-link" href="register.php">Register</a>';
    //echo '</li>';
    //echo '</ul>';
}

?>


    </ul>


</nav>
<center>


        <div class="container">
        <form class="form-horizontal"  method="POST" action="insert.php">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <b><h2>Please Register</h2></b>
                    <hr>
                </div>
            </div>

            
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>First Name &nbsp;
                            <input type="text" name="fname" class="form-control" 
                                   placeholder="your first name" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>Last Name &nbsp;
                            <input type="text" name="lname" class="form-control" 
                                   placeholder="your last name" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>Address  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="address" class="form-control" 
                                   placeholder="your name" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="city" class="form-control" 
                                   placeholder="your name" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>Pin Code &nbsp;&nbsp;&nbsp;
                            <input type="text" name="pin" class="form-control" 
                                   placeholder="Pin Code" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>Email  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="email" class="form-control" 
                                   placeholder="your email" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>Password  &nbsp;&nbsp;
                            <input type="password" name="pwd" class="form-control" 
                                   placeholder="your password" required autofocus>
                        </div>
                    </div>
                </div>
                
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Register</button>
                    
            </div>
</form>
</div>
</center>
</body>
</html>