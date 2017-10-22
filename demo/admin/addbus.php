<?php
	$info= $_GET['info'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>TOL-Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jqueryform.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body id="bodyW">
	<div class="headTitle"><i class="fa fa-bus"  aria-hidden="true"></i> TIE ADMINSTRATOR
	<span id="Logout"><a href="index.php"> Back </a></span></div>
	<div id="controllPanel">Add New Bus</div>
	<div class="containerMainW">
		<div class="addform">
			<form autocomplete="off" action="insertbus.php" method="POST" id="myForm">
				<table>
					<tr>
						<td>
							<input type="text" name="busname" placeholder="Bus name" required>
						</td>

					</tr>
					<tr>
						<td>
							<input type="text" name="from" placeholder="From" id="from" required> <i class="fa fa-bus"  aria-hidden="true"></i><input type="text" name="to" placeholder="To" id="to" required>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="price" placeholder="Price" id="price" required>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="Atime" placeholder="Arrival Time" id="Atime" required>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="Dtime" placeholder="Departure Time" id="Dtime" required>
						</td>
					</tr>
					<tr>
						<td>
							<textarea name="description" placeholder="Bus Type" id="textarea" required="true"></textarea>
						</td>
					</tr>
					<tr>
						<td id="btnright">
							<input type="reset" name="reset" value="Reset" id="reset">
							<input type="submit" name="submit" value="Submit" id="sub">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<div class="notification"><?php echo $info; ?></div>
</body>
</html>	