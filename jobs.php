<?php
	include 'navbar.php';
?>
<style type="text/css">
    .jobtable
    {
        padding: 10px;

    }

</style>

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



                    $sql = "SELECT * FROM jobs ";   

                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        while ($row=mysqli_fetch_assoc($result)) 
                        {
                            
                            $jobid = $row['jobid'];
                            $companyname = $row['companyname'];
                            $position = $row['position'];
                            $lastdate = $row['lastdate'];
                            

                                
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
            
        </div>
        
    </div>

</div>




</body>
<?php
    include"footer.php";
?>

