<?php include('session.php');?>
<?php include('msg_helper.php');?>

 <?php 
	$queryreceive = "SELECT * FROM `sms`";
  	$receivedResponse = mysqli_query($connsms,$queryreceive) or die(mysqli_error($connsms));

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Private Area</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</head>
<body>
<div id="result"></div>
	<header>
		<div class="header" id="result">
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
			<div class="maincontainerHeader">Messages</div>
			<div class="msgbox" id="textd">
			<div class="convorsations">
				<div class="messages" >
					<ul>
						<div id="ajaxText" >
							
						</div>
					</ul>
				</div>
				</div>
			</div>
			<div class="controller">
				<div class="divmsg">
				<form autocomplete="off" id="myForm" action="messagesSend.php" method="post" >
					<table width="100%">
						<tr>
							<td><i class="fa fa-meh-o" aria-hidden="true"></i></td>
							<td><input type="text" id="messageN" name="txtmsg" placeholder="Type message..."></td>
							<td><input type="submit" id="submit" value="send" name="submitsend"></td>
						</tr>
					</table>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$("#myForm").submit(function(e){
			alert("Messaging is Disabled by The Adminstrator: call: 0714746920 for Help");
			$("#messageN").trigger("reset");
			return false;
		})
	</script>
</body>
</html>