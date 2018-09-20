<?php

//first start the session to start the communication
//betwen pages
session_start(); //session start 
//if find any thing redirect
if (isset($_SESSION['username'])) {
    header("location:first.php");
}
//else{
//  header("location:first.php");
//}

?>



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
        <form class="form-horizontal"  method="POST" action="mail.php">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>contact Us</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-6">

                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">Name</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            Enter Name &nbsp;&nbsp;
                            <input type="text" name="name" class="form-control" id="email"
                                   placeholder="your name" required autofocus>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"></i> 
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="email">Email</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>Enter Email &nbsp;&nbsp;
                            <input type="text" name="email" class="form-control" id="password"
                                   placeholder="email" required>
                        </div>
                    </div>
                </div>

               
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        <!-- Put password error message here -->    
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" style="padding-top: .35rem">
                    <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                        <label class="form-check-label">
                           
                           
                        </label>
                    </div>
                </div>
            </div>
             <div class="col-md-3">
                    <div class="form-group">
                        <label class="sr-only" for="password">Your comment</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div><h3>Your Comment</h3>
                            <textarea name="comment" placeholder="enter comment" rows="4" cols="50"></textarea>
                        </div>
                    </div>
                </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Submit</button>
                    
            </div>
        </form>
    </div>
    </center>
</body>
</html>