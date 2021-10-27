<?php

    include("dbconnection.php");

    if(isset($_POST['name']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $service=$_POST['service'];
        $mnum=$_POST['mnum'];
        $details=$_POST['details'];


        $sql = "INSERT INTO contact(name,email,service,mnum,details)values('$name','$email','$service','$mnum','$details')";

        if(mysqli_query($conn,$sql))
        {
            echo"
                <script type='text/javascript'>
                    alert('Record Inserted');
                    window.location.href=('index.php');
                </script>
            ";
        }
        else
        {
            echo"
                <script type='text/javascript'>
                    alert('Record Not Inserted');
                    window.location.href=('index.php');
                </script>
            ";
        }



    }



?>