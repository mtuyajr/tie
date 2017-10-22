<?php  
	include('session.php');?>

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
			<div class="maincontainerHeader">Cancelled Requests</div>
		</div>
	</div>
</body>
</html>