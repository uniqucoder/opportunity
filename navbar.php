<!DOCTYPE html>
<html>
<head>
	<title>Navbar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style type="text/css">
    :root {
      --p1: #AC3B61;
      --p2: #123C69;

      --s1:#cecece;
      --s2: #cecece;
    }
    body{
      text-decoration: none;
      
      -webkit-user-select: none;
    }
    .navbar li{
      padding: 0px 20px;
      text-align:center;

    }
    
    .navbar
    {
      
      background-color: var(--s2);
    }
    .navbar-brand
    {
      font-family: monospace;
      font-size: 5vh;
      color: var(--p1);
      
      font-variant: small-caps;
          
    }
    .navbar-brand:hover
    {
      
      color: var(--p1);
      
      
          
    }
    
    .nav-item 
    {
      margin: 1px;
    }
    
    .nav-link
    {
      color: var(--p1);
      padding: 0px;
      border: 2px ridge var(--p2);
      border-style: ridge;
      font-weight: 500;

    }

    .nav-link:hover
    {
      color: var(--p2);
      border: 2px ridge var(--s2);
      border-style: groove;
    }
    a:visited 
    { 
     text-decoration: none; 
     /*color: var(--p2); */
    }

    #navbarTogglerDemo02{
      text-decoration-style: none;
      border-style: none;
    }
    .navbar-toggler 
    {
      
      border: none;
    } 
    .navbar-toggler:focus 
    {
      outline: none;
    }
    .navbar-toggler-icon
    {
      border-style: hidden;
      text-decoration: none;
    }



</style>


	<nav class="navbar navbar-expand-lg navbar ">
  <a class="navbar-brand" href="#">Opportunity</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ><i class="fa fa-bars" aria-hidden="true"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mt-2 mx-auto mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jobs.php">Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="internship.php">Internship</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fresher.php">Fresher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="experience.php">Experience Openings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog/">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="login.php"><span><i class="fa fa-user" ></i></span> Login</a>
      </li> -->

      
    </ul>
    
  </div>
</nav>



</html>