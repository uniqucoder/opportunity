<!DOCTYPE html>
<html>

<style type="text/css">
	
    .contact
    {
    	
    }
    .contactf
    {
    	/*background-color: var(--s1);*/
    	/*opacity: 0.4;*/
    	/*border: 1px solid black;*/
    	padding: 40px;

    }
    .contact
    {
    	padding: 10px;
    }
</style>

<body>
<?php
	include 'navbar.php';
?>


<div class="container-fluid contact">

	<div class="row pt-3">
		<div class="col-md-6">
			
		</div>
		<div class="col-md-6 contactf">
			<div class="col-md-12 contact">
				<center><h4 style="color: var(--p1);">Contact Us</h4></center>
			<form class="form" action="insertcontact.php" method="POST">

				<div class="row">
					<div class="col-md-12">
						<label>Name</label>
						<input class="form-control" type="text" name="name" placeholder="Enter Your Name">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label>Email</label>
						<input class="form-control" type="email" name="email" placeholder="Enter Your Email">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label>For</label>
						<select class="form-control" name="service" >
							<option>Select..</option>
							<option>Interview</option>
							<option>Personal Guidance</option>
							<option>Feedback</option>
							<option>Complain</option>
						</select>		
					</div>
					<div class="col-md-6">
						<label>Mobile Number</label>
						<input class="form-control" type="number" name="mnum" placeholder="Enter Your Mobile Number">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label>Details</label>
						<textarea  class="form-control" rows="6" name="details" style="color: black;" >
							
						</textarea>
					</div>
				</div>
				<br>
				<input type="submit" name="submit" style="float: right;" class="btn btn-info">
			</form>
			</div>
		</div>
		
	</div>
	
</div>

<?php
	
	include 'footer.php';

?>
</body>
</html>