 <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   
    <div class=top>
      <img src="https://image3.mouthshut.com/images/imagesp/925888329s.jpg" width="80"height="80">;
      <h1>VISHNU SOCIETY</h1>
     <ul>
      <span><a href="index.php">Home</a></span>
      <span><a href="login.php">Login</a></span>
    </ul>
     </div>
     <div class=back>
    <center>
    <h2 style="color:#FDFF06;">Register</h2>
    </center>
	<div class=g>
	<form action="saveimage.php" enctype="multipart/form-data" method="post">

<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">

<tbody><tr>

<td>

<input name="uploadedimage" type="file">

</td>

</tr>

<tr>
<td>

<input name="Upload Now" type="submit" value="Upload Image">

</td>

</tr>

</tbody></table>

</form>
 <img src="https://pbs.twimg.com/profile_images/432285653624037376/7BsMQXuf.jpeg" height="200" width="200" align="right">
   </div>
	<?php
	    if(isset($_POST['register_btn'])){
			$username=stripslashes($_POST['username']);
            $email=stripslashes($_POST['email']);
            $password=stripslashes($_POST['password']);
            $password1=stripslashes($_POST['password1']);
			if($password == $password1){
				$query="select * from user where username='$username'";
				$sql=mysqli_query($con,$query);
				if(mysqli_num_rows($sql)>0){
					echo '<script type="text/javascript">alert("user already exists ....try another username")</script>';
					
				}else
				{
					$query="INSERT INTO user(username,email,password)VALUES('$username','$email','$password')";
					$sql=mysqli_query($con,$query);
					if($sql){
						echo '<script type="text/javascript">alert("user registered ...go to login page")</script>';
					}
					else{
						echo '<script type="text/javascript">alert("error")</script>';
					}
				}
         
		   }
		   else{
			   echo '<script type="text/javascript">alert("password and confirm password doesnot match")</script>';
		   }
	
		}
	?>
	</div>
</body>

</html>
