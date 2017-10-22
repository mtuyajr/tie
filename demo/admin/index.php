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
<body>
	<div class="headTitle"><i class="fa fa-bus"  aria-hidden="true"></i> TIE ADMINSTRATOR
	<span id="Logout"><a href="##"> logout </a></span></div>
	<div id="controllPanel">Control Panel</div>
	<div class="containerMain">
	<div class="table">
		<table width="100%">
			<tr>
				<td onclick="show('#modal-addBus')" id="buslink"><a href="addbus.php?info=loading... ">
				<i class="fa fa-bus" aria-hidden="true"></i><br>Add Bus</td></a>
				<td onclick="show('#modal-editBus')" id="editbus"><a href="editbus.php ">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i><br>Edit Bus</td></a>
				<td onclick="show('#modal-removeBus')" id="busprofile"><a href="busprofile.php">
				<i class="fa fa-rss" aria-hidden="true"></i><br>Bus Profile</a></td>
			
			</tr>
			<tr>
				<td onclick="show('#modal-addUser')"><a href="www.google.com">
				<i class="fa fa-user-plus" aria-hidden="true"></i><br>Add User</td>
				
				<td onclick="show('#modal-removeUser')">
				<i class="fa fa-user-times" aria-hidden="true"></i><br>Remove User</td>
				<td onclick="show('#modal-editUser')">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i><br>Edit User</a></td>
			</tr>
			<tr>
				<td>
				<i class="fa fa-gear" aria-hidden="true"></i><br>Tie Settings</td>
				<td class="aboutshow">
				<i class="fa fa-exclamation-circle" aria-hidden="true"></i><br>About</td>
				<td onclick="show('#modal-logout')">
				<i class="fa fa-chain-broken" aria-hidden="true"></i><br>LogOut</td>
			</tr>
		</table>
	</div>
	<div class="aboutModal">
		<div class="headerAbout">Tie</div>
		<div class="footerAbout">Online Ticketing 1.0</div>
		<div class="close">close</div>
	</div>
	</div>
	</div>
</body>
</html>	