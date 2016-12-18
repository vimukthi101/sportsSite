<?php
include('links.php');
?>
		  <nav class="navbar navbar-default">
  				<div class="container-fluid"> 
  					<div class="navbar-header">
  						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                        </button>             
  						<a class="navbar-brand" href="../src/home.php">
                        <img class="img-responsive" src="../images/logo.jpg" style="height:35px;"/>
                        </a>						
				  </div>
                        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
  							<ul class="nav navbar-nav">
					            <li><a href="../src/home.php">Home <span class="sr-only">(current)</span></a></li>
					            <li><a href="../src/aboutus.php">About Us</a></li>
                                <li><a href="../src/athleteRegistration.php">Athlete Registration</a></li>
                                <li><a href="../src/clubRegistration.php">Club Registration</a></li>					
					            <li><a href="../src/contactus.php" class="last">Contact Us</a></li>                         
                                 
								<?php  
									if($_SESSION['role'] == "admin"){ ?>
										<li><a href="../src/admin.php" class="last">My Profile</a></li>  
                                        	<li><a href="../src/logout.php" class="last">Log Out</a></li>  
								<?php	} else if($_SESSION['role'] == "Club Officer"){ ?>
										<li><a href="../src/club.php" class="last">My Profile</a></li>  
                                        	<li><a href="../src/logout.php" class="last">Log Out</a></li>  
								<?php	} else if($_SESSION['role'] == "Athlete"){ ?>
										<li><a href="../src/user.php" class="last">My Profile</a></li>
                                        	<li><a href="../src/logout.php" class="last">Log Out</a></li>    
								<?php	} else { ?>
									<li><a href="../src/login.php" class="last">Log In</a></li>
								<?php }
								
								?>
                              
					        </ul>
  						</div>
  					</div>
  				</nav>