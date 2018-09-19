<?php

session_start();  //start the session
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

<!--img src="big.jpg" style="width:1279px;height:400px;"-->
<img src="images/bolt-landscape.jpg" style="width:1365px;height:400px;">
</body>
</html>