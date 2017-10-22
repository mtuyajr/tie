<?php include('session.php');?>
<?php include('busHelper.php');?>
<?php include('msg_helper.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Private Area</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
	<header>
		<div class="header">
			<i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo " ".ucfirst($login_session) ?>
		</div>
	</header>
	<div class="container">
		<div class="leftMenu">
			<div class="leftMenuHeader"> 
				<div class="tie">TIE</div>
			</div>
			<div class="itemMenu">
			<ul>
				<a href="index.php"><li><i class="fa fa-tachometer" aria-hidden="true"></i><br>Dashboard</li></li></a>
				<a href="customerR.php"><li><i class="fa fa-users" aria-hidden="true"></i><br>Customer Requests</li></a>
				<a href="pendingR.php"><li><i class="fa fa-ticket" aria-hidden="true"></i><br>Pending Request</li></a>
				<a href="cancelled.php"><li><i class="fa fa-trash-o" aria-hidden="true"></i><br>Cancelled Tickets</li></a>
				<a href="paidR.php"><li><i class="fa fa-handshake-o" aria-hidden="true"></i><br>Paid Requests</li></a>
				<a href="messages.php"><li><i class="fa fa-envelope-o" aria-hidden="true"></i><br> Messages</li></a>
				<a href="avbuses.php"><li><i class="fa fa-bus" aria-hidden="true"></i><br> Available Buses</li></a>
				<a href="logout.php"><li>Logout</li></a>
			</ul>
			</div>
		</div>
		<div class="maincontainer">
			<div class="maincontainerHeader">Dashboard</div>
			<div class="maincontainerContents">
				<div class="maincontainerContentsTable">
					<table>
						<tr>
							<td><a href="customerR.php">Customer Requests<br><br> 0 </a></td>
							<td><a href="pendingR.php">Pending Requests<br><br> 0 </a></td>
							<td><a href="cancelled.php">Cancelled Requests<br><br> 0 </a></td>
						</tr>
						<tr>
							<td><a href="paidR.php">Paid Requests<br><br> 0 </a></td>
							<td><a href="messages.php">Messages<br><br> <?php echo $countsms ?> </a></td>
							<td><a href="avbuses.php">Buses<br><br> <?php echo $countbus ?> </a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>