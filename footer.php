<!DOCTYPE html>
<html>


<style type="text/css">
	:root {
      --p1: #AC3B61;
      --p2: #123C69;

      --s1:#cecece;
      --s2: #cecece;
    }
    body{
      text-decoration: none;
      
    }
    footer
    {
    	/*position: relative;*/
    	/*text-align: center;*/
    }
	.page-footer .logo
	{
		font-family: monospace;
	    font-size: 5vh;
	    color: var(--p1);
	    text-decoration: none; 
	    font-variant: small-caps;
	}
	.page-footer .logo:hover
	{
		font-family: monospace;
	    font-size: 5vh;
	    color: var(--p1);
	     text-decoration: none;
	    font-variant: small-caps;
	}
	.page-footer .slogan
	{
		color: var(--p2);
		font-size:3vh;
		font-variant-caps: small-caps;

	}
	.page-footer
	{
		background-color: var(--s1);
	}
	.page-footer .footer-links h5
	{
		color: var(--p1);
		font-family: monospace;
		font-size: 3vh;
		padding: 0px;
		

	}
	.page-footer .footer-links a
	{
		color: var(--p2);
		font-family: monospace;
		font-size: 15px;
		text-decoration: none;
		justify-content: right;
		display: inline-block;
	}
	.page-footer .footer-copyright span
	{
		font-family: monospace;
		font-size: 15px;
		color: var(--p2);
		font-weight: bold;
	}
	.page-footer .footer-copyright a
	{
		color: var(--p1);
		font-family: monospace;
		font-size: 20px;
		font-weight: 500;
		font-variant-caps: small-caps;
		text-decoration: none;

	}

	@media only screen and (max-width: 577px) 
	{
		.footer-links 
		{
			margin: 0 auto;

			
	
		}
		.page-footer .footer-links li
		{
			text-align: left;


		}
	  	.footer-links h5
	  	{
	  		display: none;
	  	}
	}
	
	.col-sm-6
	{
		text-align: left;
		padding-left: 30px; 


	}
	.footer1 
	{
		text-align: center;
	}
</style>

<footer class="page-footer pt-4">
	<div class="container-fluid footer1 text-center text-md-left">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<a class="logo" href="#">Opportunity</a>
				<p class="slogan">"Opportunity grab it instantly" </p>
			</div>
		

			<div class="footer-links col-md-3 col-sm-6 col-6">
				<h5>Quick Links</h5>
				<ul class="list-unstyled">
		          <li>
		            <a href="#"><span><i class='fas fa-home'></i></span> Home</a>
		          </li>
		          <li>
		            <a href="jobs.php" target="_blank"><span><i class='far fa-bell'></i></span> Jobs</a>
		          </li>
		          <li>
		            <a href="pum.html" target="_blank"><span><i class='fa fa-cog'></i></span> Services</a>
		          </li>
		          
		        </ul>
			</div>
			<div class="footer-links col-md-3 col-sm-6 col-6">
				<h5>Important Links</h5>
				<ul class="list-unstyled">
		          <li>
		            <a href="blog/" target="_blank"><span><i class='fas fa-pencil-alt'></i></span> Blog</a>
		          </li>
		          <li>
		            <a href="contact.php" target="_blank" ><span><i class='fas fa-comment'></i></span> Contact us</a>
		          </li>
		          <li>
		            <!-- <a href="#!"><span><i class='fa fa-user'></i></span> login</a> -->
		          </li>
		          
		        </ul>
			</div>
			
			
			 
		</div>
		<hr>
		<div class="footer-copyright text-center">
			<span>© 2021 Copyright:</span>
		    <a href="https://mdbootstrap.com/"> Opportunity.in</a>
		</div>
	
	</div>			


</footer>



</html>