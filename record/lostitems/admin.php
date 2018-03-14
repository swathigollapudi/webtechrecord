<?php 
include "config.php";
session_start();
     if(isset($_POST['login'])){
		$username=($_POST['username']);
		$password=($_POST['password']);
		$query="select * from admin where username='$username' AND password ='$password'";
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
    </ul>
     </div>
    <h2 style="color:#FDFF06;">Admin</h2>

    <form method="post" action="missitems.php" >
 <label style="color:#FDFF06;">UserName : </label>
<input type="text" name="username"><br><br>
<label style="color:#FDFF06;">Password : </label>
<input type="password" name="password"><br><br>
<button  style="padding:10px;"type="submit" name="submit">LOG IN</button>
</center>
</form>
</body>
</html>
