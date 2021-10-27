<?php
	include"navbar.php";	
?>

<body>
	<div class="container jobtable">
    <div class="row">
        <div class="col-md-9">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Job Id</th>
                        <th>Company Name</th>
                        <th>Position</th>
                        <th>Lastdate</th>
                        <th>Apply</th>
                    </tr>

                </thead>
                <?php
                    include("dbconnection.php");



                    $sql = "SELECT * FROM jobs where status='Active' order by job_uplode_date DESC limit 15";  
                    // $sql ="SELECT value from jobs"   

                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        while ($row=mysqli_fetch_assoc($result)) 
                        {
                            
                            $jobid = $row['jobid'];
                            $companyname = $row['companyname'];
                            $position = $row['position'];
                            $lastdate = $row['lastdate'];
                            $quali= $row['quali'];
                            $newquali = explode(",", $quali);

                            if(in_array("BCA", $newquali))
                            {

                                

                                
                ?>
                <tbody>
                    <tr>
                        <td><?php echo"$jobid" ?></td>
                        <td><?php echo"$companyname" ?></td>
                        <td><?php echo"$position" ?></td>
                        <td><?php echo"$lastdate" ?></td>
                        
                        <td><a href="moredetails.php?value=<?php echo $jobid;?>" class="btn btn-info">View</a></td>
                                        

                    </tr>
                </tbody>
            
            <?php
                }
            }
            ?>    
            </table>
            

        </div>
        <?php
        }
        else
        {
            echo "<br>RECORD NOT FOUND";
        }
        ?>
        <div class="col-md-3">
        	<div class="row justify-content-center">
        		<h5 style="color: var(--p2); padding: 5px; text-align: center;">MCA Job Opportunity </h5>
        	</div>
        	<hr>
            <div class="row">
            	<?php
	            	$sql = "SELECT jobid,companyname FROM jobs where status='Active' order by companyname limit 10";   

	                $result = mysqli_query($conn,$sql);
	                $i=0;
	            	if(mysqli_num_rows($result)>0 && $i<5)
	                {	
	                    while ($row=mysqli_fetch_assoc($result)) 
	                    {
	                            
	                        $jobid = $row['jobid'];
	                        $companyname = $row['companyname'];
	                            
	                            
            	?>
            	<div class="col-md-6">
            		<p style="color: black;"><?php echo "".$companyname; ?> <img src="img/blinking.gif"></p>
            	</div>
            	<div class="col-md-6">
            		<a href="moredetails.php?value=<?php echo $jobid;?>">Apply Now</a>
            	</div>
            	<hr>
            	<?php
            		$i++;
            	}
            	?>
            	
            	
            	<?php
            			
            		}
            	?>
            </div>
        </div>
        
    </div>

</div>


</body>
<?php
	include"footer.php";
?>