<?php
include('session_class.php');
session_start();

//Logout sends back to home page
if(isset($_GET['a']) and $_GET['a']==0){
	$_SESSION['a']=0;
	$session->log_out();
}

if(isset($_SESSION['a']) and $_SESSION['a']==1){
	/* You have sucessfully logged in*/	
	echo 'welcome to the jungle';
}
else{/* Not logged in redirect to home page */
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'login.php';
	header("Location: http://$host$uri/$extra");
	exit;
}

?>
