<?php

include("connection.php");

if(isset($_POST["username"]) && isset($_POST["password"]))
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	$phone=$_POST["phone"];

	$select = "SELECT * FROM login";

	$result= mysqli_query($connection, $select);
	$present=0;
	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_assoc($result)) 
		{
			$dbusername=$row["username"];//$dbusername=abc@gmail.com
	
			if($dbusername == $username)
			{
				$present=0;
				echo
				"	<script type='text/javascript'>
						alert('You Have Already Registered. PLease Login..');
						window.location.href = 'login.php';
					</script>
				";
				break;
			}
			else
			{
				$present=1;
			}
		}
	}
	

	if($present == 1 || mysqli_num_rows($result)==0)
	{
		$insert= "INSERT INTO login (username , password , phone) VALUES ('$username' , '$password' , '$phone')";

		$result=mysqli_query($connection, $insert);

		if($result)
		{
			

			echo
		"	<script type='text/javascript'>
				alert('Registered Successfully please Login...');
				window.location.href = 'login.php';
			</script>
		";

		}
		else
		{
			
			echo
		"	<script type='text/javascript'>
				alert('Something Went Wrong<br>Please try again');
				
			</script>
		";
		}
	}
}

?>