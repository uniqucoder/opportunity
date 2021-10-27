<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</head>
<body>



</body>
</html>

<style type="text/css">
	
	:root {
      --p1: #AC3B61;
      --p2: #123C69;

      --s1:#cecece;
      --s2: #cecece;
    }

	.logincard
	{
		padding: 10px 20px;
		background-color: #cecece;
		width: 30%;
		margin: 0px 0px 0px 60%; 
		margin-top: 3%;
	}

	.mybtn
	{
		background-color: #cecece;
		padding: 10px 0px;
		letter-spacing: 2px;
		color:var(--p2);
		font-weight: 700;
	}
	.mybtn:hover
	{
		color: var(--p1);
		background-color:var(--s2);
	}
	.logincard label
	{	
		font-size: 18px;
		padding-top: 5px;
		text-align: left;
	}

	@media only screen and (max-width: 680px)
	{
		.logincard
		{
			padding: 20px 20px;
			background-color: rgba(255,255,255,0.7);
			width: 80%;
			margin: 50px auto 50px auto; 
		}
	}
	.logincard .logo
	{
		font-size:28px;
		font-weight: bold; 
		color: var(--p1);
		font-family: monospace;
		font-size: 5vh;
	}

</style>
<?php
	include ('navbar.php');
?>

<div class="backcover">  
	
	<div class="container-fluid">
		<div class="logincard card">
			<center>
				<label class="logo">Opportunity</label>
				<h3>LOGIN</h3>
			</center>
			<hr>
			<form action="login.php" method="POST" class="form" enctype="multipart/form-data">
				
				
				
				<label>Email</label><input type="email" name="email" class="form-control"  placeholder="Email">
				
				<label>Password </label><input type="password" name="password" class="form-control"  placeholder="Password">
				<br>
				<input type="submit" name="submit" value="LOGIN" class="btn mybtn btn-block">
				<a href="register.php" class="btn btn-block">Register Here</a>
				<a href="#forgotpass.php" class="btn btn-block" style="color: red">forgot Password ?</a>
			</form>
		</div>
	</div>

</div>
<br>
<?php
	include('footer.php');
?>
</html>	

<?php



include("dbconnection.php");

if(isset($_POST["submit"]))

{
	session_start();
	
	$email=$_POST["email"];
	$password=$_POST["password"];
	$_SESSION["email"]=$email;
	
	
	$select1 = "SELECT * FROM login WHERE email='$email' and password='$password'";
	$result1 = mysqli_query($conn , $select1);

	$select2 = "SELECT * FROM login WHERE email='$email'";
	$result2 = mysqli_query($conn , $select2);
	
	if(mysqli_num_rows($result2)>0)
	{
		if (mysqli_num_rows($result1)>0)
		{
			$row = mysqli_fetch_assoc($result1);
			echo "<script type='text/javascript'>
			
			window.location.href='welcome.php';</script>";
		}
		else
		{
			echo
				"	<script type='text/javascript'>
						alert('Your Password is Wrong');
					</script>
				";
		}
	}
	else
		{
			echo
				"	<script type='text/javascript'>
						alert('You Have Not register Yet Please register yourself');
						window.location.href = 'register.php';
					</script>
				";
		}
}
?>
