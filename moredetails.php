<?php
	include 'navbar.php';
?>
<?php
	include("dbconnection.php");
	$value = $_GET["value"];

	$sql="SELECT * FROM jobs where jobid = '$value'";

	$result = mysqli_query($conn , $sql);

	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_assoc($result);
		
		
		$jobid=$row["jobid"];
		$jobtitle=$row['jobtitle'];
		$aboutcompany=$row["aboutcompany"];
		$companyname=$row["companyname"];
		$position=$row["position"];
		$jobtype=$row['jobtype'];
		$required = $row['required'];

		$salary=$row["salary"];
		$lastdate=$row["lastdate"];
		$quali =$row["quali"];
		$job_uplode_date=$row['job_uplode_date'];
		$status = $row['status'];

		$year =$row["year"];
		$eligibility=$row["eligibility"];
		$skills=$row["skills"];
		$bond=$row["bond"];
		$locations=$row["locations"];
		$branch=$row["branch"];
		$applylink=$row["applylink"];
		
        

		
	}

?>
<style type="text/css">
	.jobs
	{
		padding: 20px;
	}
	.jobs h1
	{
		font: sans-serif;
		font-style: bold;
		
	}
	.jobs li
	{
		font-style: oblique;
		letter-spacing: 1rpm;

	}
	.jobs mark
	{
		color: var(--p1);
		background-color: #cecece;
		padding: 0px;
		margin: 0px 20px 0px 0px;
	}
	body
	{
		font-family:Arial, Helvetica, sans-serif;
	}
	/*col-md-3 section*/
    .newupdates
    {
        padding: 2px;
        /*border:1px solid var(--p2);*/
        color: var(--p2);
        /*text-align: center;*/
    }
    .newupdates h4
    {
        border-bottom: dotted;
    }
    .newupdates p
    {
    	color: black;
    }

    
    /*End col-md-3*/
</style>
<body>
	<div class="container-fluid jobs">
		<div class="row">
			<div class="col-md-8">
				<article>
					<h1>Off Campus Drive From <?php echo " ".$companyname; ?>
					<h3 style="color: var(--p2); font-family: times-roman; "><?php echo "".$position; ?></h3>
					<div class="row">
						<div class="col-md-6">
							<!-- banner -->
						</div>
						<div class="col-md-6">
							<!-- banner -->
						</div>
					</div>
					<h4>About Company</h4>
					<article style="text-align: justify;">
					<p><?php echo"".$aboutcompany; ?></p>
					</article>
					<div class="row">
						<div class="col-md-6">
							<!-- Ads -->
						</div>
						<div class="col-md-6">
							<!-- ads -->
						</div>
					</div>
					<h4>More details</h4>
					<ul>
					
						<div class="row">
							<div class="col-md-5">
								<mark> Company Name</mark>
							</div>
							<div class="col-md-1">
								:
							</div>
							<div class="col-md-5">
								<?php echo "".$companyname; ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-5">
								<mark> Position</mark>
							</div>
							<div class="col-md-1">
								:
							</div>
							<div class="col-md-5">
								<?php echo "".$position; ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-5">
								<mark> Salary</mark>
							</div>
							<div class="col-md-1">
								:
							</div>
							<div class="col-md-5">
								<?php echo "".$salary; ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-5">
								<mark> Last Date</mark>
							</div>
							<div class="col-md-1">
								:
							</div>
							<div class="col-md-5">
								<?php echo "".$lastdate; ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-5">
								<mark> Qualification</mark>
							</div>
							<div class="col-md-1">
								:
							</div>
							<div class="col-md-5">
								<?php echo "".$quali; ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-5">
								<mark> Passout Years</mark>
							</div>
							<div class="col-md-1">
								:
							</div>
							<div class="col-md-5">
								<?php echo "".$year; ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-5">
								<mark> Who can Apply</mark>
							</div>
							<div class="col-md-1">
								:
							</div>
							<div class="col-md-5">
								<?php echo "".$eligibility; ?>
							</div>
						</div>

						<div class="row" style="text-align: justify;">
							<div class="col-md-5" >
								<mark> Required Skills</mark>
							</div>
							<div class="col-md-1">
								:
							</div>
							<div class="col-md-5">
								<?php echo "".$skills; ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-5">
								<mark> Bond</mark>
							</div>
							<div class="col-md-1">
								:
							</div>
							<div class="col-md-5">
								<?php echo "".$bond; ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-5">
								<mark> Locations</mark>
							</div>
							<div class="col-md-1">
								:
							</div>
							<div class="col-md-5">
								<?php echo "".$locations; ?>
							</div>
						</div>	 
					
						
					</ul>
					<div class="row">
						<div class="col-md-6">
							<!-- Apply Now banner aapla wala -->
						</div>
						<div class="col-md-6">
							<!-- Know More about it banner -->
						</div>
					</div>

					<div class="btn btn-sm btn-primary" >
						<a style="color:white;" href="<?php echo"".$applylink; ?>">Apply here</a>	
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<!-- Apply Now banner aapla wala -->
						</div>
						<div class="col-md-6">
							<!-- Know More about it banner -->
						</div>
					</div>

				</article>
			</div>
			<div class="col-md-4 newupdates">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<!-- Apply Youtube Channel Promotion -->
						</div>
						
					</div>
                	<h4>Latest Updates (<span style="font-size: 15px; color: red;">Don't Missed Apply ASAP* </span>)</h4>
                	<article>
                		<?php
                			$sql1 = "SELECT * FROM jobs where jobid!='$jobid' and status='active'
                			order by rand() limit 10 ";   

		                    $result1 = mysqli_query($conn,$sql1);
		                    if(mysqli_num_rows($result)>0)
		                    {
		                        while ($row1=mysqli_fetch_assoc($result1)) 
		                        {
		                            
		                            $jobid1 = $row1['jobid'];
		                            $jobtitle1=$row1['jobtitle'];
		                            $companyname1 = $row1['companyname'];
		                            $position1 = $row1['position'];
		                            $lastdate1 = $row1['lastdate'];
		                            $job_uplode_date1=$row1['job_uplode_date'];
		                            $salary1=$row1['salary'];



                		?>
                		<ul style="list-style: none;">
                			<li>
                				<a href="moredetails.php?value=<?php echo"".$jobid1; ?>">
                				<p style="color: var(--p1);"><?php echo "".$jobtitle1." | ".$companyname1." | ".$salary1;  ?></p>
                				</a>
                				<p style="color: var(--p2); font-style: italic; font-size: small;" ><?php echo"".$job_uplode_date1; ?></p>

                			</li>
                		</ul>
                		

                		<?php

                				}
                			}
                			else
                			{

                			}
                		?>	
                	</article>
            	</div>
			</div>
		</div>
	</div>

</body>

<?php
	include 'footer.php';
?>