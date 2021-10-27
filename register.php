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

</html>

<style type="text/css">
	
	/*.backcover
	{
		background-image: 
	}*/
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
				<label  class="logo">Opportunity</label>
				<h4>REGISTER</h4>
			</center>
			<hr>
			<form action="register.php" method="POST" class="form" enctype="multipart/form-data">
				
				<label>Name</label><input type="text" name="name" class="form-control"  placeholder="Name">
				
				<label>Email</label><input type="email" name="email" class="form-control"  placeholder="Email">
				
				<label>Password </label><input type="password" name="password"  id="password" class="form-control"  placeholder="Password">
				<label>Confirm Password <span id="error"></span></label> 
				<input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password" onkeyup="passwordcheck(this.value);">
				
				
				<br>
				<input type="submit" name="submit" value="REGISTER"  class="btn mybtn btn-block">
				<a href="login.php" class="btn btn-block">Login Here</a>
			</form>
		</div>
	</div>

	<script type="text/javascript">
				function passwordcheck( pass2) 
				{
					var pass1 = document.getElementById("password").value;

					if(pass1 == pass2)
					{
						document.getElementById("error").innerHTML=("<span style='color: green;'>Correct</span>");
					}
					else
					{
						document.getElementById("error").innerHTML=("<span style='color: red;'> X Wrong </span>");	
					}
				}
			</script>

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
	$myname=$_POST['name'];
	$myemail=$_POST["email"];
	$password=$_POST["password"];
	$cpassword=$_POST["cpassword"];

	
	$select = "SELECT * FROM login WHERE email='$myemail' ";

	$result1= mysqli_query($conn, $select);
	
	if (mysqli_num_rows($result1)>0) 
	{
		
		echo
			"	<script type='text/javascript'>
					alert('You Have Already Registered Please Login');
					window.location.href = 'login.php';
				</script>
			";
	}
	else
	{
		if($password==$cpassword)
		{

		  	$sql = "INSERT INTO login(name,email,password)values('$myname','$myemail','$password' )";

		  	$result2 =mysqli_query($conn,$sql);

	        	if($result2)
				{

					
					require 'PHPMailer/PHPMailer.php';
					require 'PHPMailer/SMTP.php';
					require 'PHPMailer/Exception.php';

					$mail = new PHPMailer\PHPMailer\PHPMailer();
					$mail->IsSMTP();
					$mail->SMTPDebug = 0;
					$mail->SMTPAuth = true;
					$mail->SMTPSecure = 'ssl';
					$mail->Host = "smtp.gmail.com";
					$mail->Port = 465;
					$mail->IsHTML(true);
					$mail->Username = "chaitanyat2704@gmail.com";
					$mail->Password = "88Chaitanya#1432";

					$mail->SetFrom("chaitanyat2704@gmail.com","Chaitanya Tupsamudre");
					
					$mail->Subject = 'Registration Successful chaitya';
					$mail->Body =
					'
						<h1> Dear '.$myemail.',  </h1>
						<h4> Thank you for registration. We will get back to you shortly.</h4>
						

						<p> Thank you</p>
					';
					$mail->AddAddress( $myemail  );

					if($mail->Send()) 
					{
						echo
					"	
					<script type='text/javascript'>
						alert('Mail send');
						window.location.href = 'login.php';	
					</script>
					";
					}
					else 
					{
						echo
						"	
						<script type='text/javascript'>
							alert('Mail fails');
							window.location.href = 'login.php';	
						</script>
						";
					}
					echo
					"	
					<script type='text/javascript'>
						alert('Registered Successfully please Login...');
						window.location.href = 'login.php';	
					</script>
					";
				}
				else
				{
					
					echo
						"	<script type='text/javascript'>
								alert('Something Went Wrong Please Try Again');
							</script>
						";
				}
	            echo"
	                <script type='text/javascript'>
	                    alert('Registration Successfull');
	                    window.location.href=('login.php');
	                </script>
	            ";
	    }
	        
		else
		{
			echo
			"	<script type='text/javascript'>
					alert('Password Missmatched');
				</script>
			";
		}
	
	}
}
?>