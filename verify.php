<?php

//first start the session

session_start();
include 'config.php';  //import the database connection



//now fetch the data from the form
$username = $_POST['username'];
$password = $_POST['pwd'];
$flag = 'true';


//now create a result obj
$result = $mysqli->query("SELECT id,email,password,fname,lname,type FROM users ORDER BY id ASC");




//create a function to redirect the page

function redirect(){

	echo "<center><h1>invalid login !   Redirecting......</h1></center>";
	header("Refresh: 3;url=first.php");
}

//if there is no result then just simply die
if (!$result) {
	die("no result found");
}
//now if find the data
if ($result) {
	//create a loop for feathing data
	while ($obj = $result->fetch_object()) {
		//echo $obj->email;
		//echo $obj->lname;
		//echo $obj->fname;
		//echo $obj->password;


		//now we get the data lets compare it

		if ($obj->email==$username && $obj->password == $password) {
			//echo "found it";
			//if mathch found send it to the session 
			$_SESSION['username'] = $username;

			//its an interesting peace of code 
			//we donnt send the password we varify it and if it is 
			//varifie we send the username and account type
			// the first.php and the session we catch it and it gives 
			// additional funtionality



			$_SESSION['type'] = $obj->type;
			$_SESSION['id'] = $obj->id;
			$_SESSION['fname'] = $obj->fname;
			header("location:first.php");

		}
		else{
			redirect();
		}
	}
}


?>