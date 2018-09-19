<?php
//destroy all session 
//and unset all the data
session_start();
session_unset();
session_destroy();
header("location:first.php");
exit();



?>