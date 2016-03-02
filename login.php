<html>
<title>
Log In
</title>
<body>
<div align="center">
<form id="form1" name="form1" method="post" action="login.php">
User:<input type="text" name="uname" id="uname" /><br>
Pass:<input type="text" name="pass" id="pass" /><br>
<input type="submit" name="button" id="button" value="Submit" />
</form>

<a = href="<?php echo $_SERVER['PHP_SELF']."?a=0";?>">Log Out</a>

<?php
include('session_class.php');

if(isset($_POST['uname']) and isset($_POST['uname'])){
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	/* This is just a sample login form.  $_POST data needs to be validated and escaped.  
	Has just single user named user and password named pass.  It is for demostration purposes only.
	In real life after data is validated it would be compared to a database users table.
	*/
	if($uname=='user' && $pass == 'pass'){
				session_start();$_SESSION['a']=1;
				$host  = $_SERVER['HTTP_HOST'];
				$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$extra = 'app_index.php';
				header("Location: http://$host$uri/$extra");
				exit;
		}
	else{
		echo "too bad, soo sad";
		}	
}
?>

</div>
</body>
</html>


