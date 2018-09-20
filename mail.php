<?php
$to="ornobtanvir.git@gmail.com";
if (isset($_POST['submit'])) {
	//create the mesg
	$email = $_POST['email'];
	$msg = "Name: ".$_POST["name"]."\n"."Email: ".$_POST["email"]. "\n"."Comment :".$_POST["comment"];
	
	if(mail($to,"Contact from your site",$msg."From: $email")){
		header("location:contact.php");}

	
	else{
		echo "configure your stmp server";
		header("Refresh: 3;url=contact.php");
	}
	
}
?>
