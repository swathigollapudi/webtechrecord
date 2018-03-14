<?php
     require 'config.php';
?>

<!DOCTYPE html>
<html>

 <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   
    <div class=top>
      <img src="https://image3.mouthshut.com/images/imagesp/925888329s.jpg" width="80"height="80">
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
	
    <form method="post" action="reg.php" >
        <table >
                <tr>
                 <td>Username :</td>
                 <td><input  type="text" name="username" class="textinput" ></td>
                 </tr>
                 <tr>
                 <td>Email :</td>
                 <td><input  type="email" name="email" class="textinput" ></td>
                 </tr>
                 <tr>
                 <td>Password : </td>
                 <td><input  type="password" name="password" class="textinput" ></td>
                 </tr>
                 <tr>
                 <td>Confirm Password :</td>
                 <td><input type="password" name="password1" class="textinput" ></td>
                 </tr>
				 <tr>
               <td>  <input  type="submit" value="register" name="register_btn" class="Register"> </td>
                 </tr>
                  <p>Already a member<a href="login.php">Sign in</a></p>
        </table>
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
