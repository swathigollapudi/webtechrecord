<?php
        session_start();
        require 'config.php';
?>
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
       <span><a href="admin.php">Admin</a></span>
    </ul>
     </div>
   
    <h2 style="color:#FDFF06;">Login</h2>
  
    <div class=g>
    <form action= "missitems.php" method="POST">
     username:  <input type="text" name="username"/><br/>
     <br>
     password:  <input type="password" name="password"/><br/>
     <input type="submit" value="login" name="login"/><br>
   </form>
     <img src="https://pbs.twimg.com/profile_images/432285653624037376/7BsMQXuf.jpeg" height="200" width="200" align="right">
   <?php
   if(isset($_POST['login'])){
		$username=($_POST['username']);
		$password=($_POST['password']);
		$query="select * from user where username='$username' AND password ='$password'";
		$sql=mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
			$_SESSION['username']=$username;
			header("location: missitems.php");
		}
		else{
			echo '<script type="text/javascript">alert("invalid credentials")</script>';
		}
   }
   ?>
   </div>
  </body>
</html>
