<?php include "header.php"; ?> 
<body>
	
	<!-- Start All Pages -->
	<div>
		<div>
			<div class="row">
				<div class="col-lg-12" style="margin-top: 200px;">
					<center><h1> REGISTRATION US </h1></center>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
	 
      <table cellpadding="10" cellspacing="12" align="center">
     <form action="" method="POST"> 

  <tr>
  	<td>
  <input type="text" name="uid" value="" placeholder="Enter user id" required=""style="padding: 10px; width: 300%"> <br>  </td>
    </tr>
   
   <tr>	
 <td> <input type="password" name="pass" value="" placeholder=" Enter Your password" required="" style="padding: 10px; width: 300%"> <br> </td>
   </tr>

  <tr>  
 <td> <input type="email" name="email" value="" placeholder="Enter Your Email Address" required="" style="padding: 10px; width: 300%">  <br> </td>
</tr>
         
      <tr>   
<td align="center"> <input type="submit" name="sb" value="Registration Now" style="color:black; background: orange; font-size: 1.3em; font-family: times new roman">  <br> </td>
   </tr>
    	
    </form>
 </table>


					<?php
					if(isset($_POST['sb']))
					{
						
						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$email = $_POST['email'];
						include "connect.php";
						mysqli_query($con,"insert into registration(userid, password,email) values('$uid','$pass','$email')");
						echo "<script>alert('Registration SuccessFully');</script>";
						echo "<center>Registration SuccessFully ... Click to <a href='login.php'>login</a></center>";
					}	

					?>





				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
