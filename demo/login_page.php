<?php include 'database/login_db.php';
		session_start();
	   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      
      $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM lg_info WHERE uname = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['Active'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: private_area/index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>TIE | LOGIN</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="login_modal">
	<div class="loginTable">
		<form method="post" action="login_page.php">
			<table width="100%">
				<tr>
					<td>
						<label>Username:</label><br>
						<input type="text" name="uname" placeholder="Username" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Password:</label><br>
						<input type="password" name="password" placeholder="Password"required>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Signin">
					</td>
				</tr>
			</table>
		</form>
		<div class="errorHandler"><?php echo $error ?></div>
	</div>
	</div>
</body>
</html>