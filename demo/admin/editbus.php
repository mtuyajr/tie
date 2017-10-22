<?php include('../database/db.php');?>
<?php

  $querybus = "SELECT * FROM `bus_info`";
  $resultbus = mysqli_query($conn, $querybus) or die(mysqli_error($conn));
  $countbus = mysqli_num_rows($resultbus);
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>TOL-Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquerytable.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
</head>
<body id="bodyW">
	<div class="headTitle"><i class="fa fa-bus"  aria-hidden="true"></i> TIE ADMINSTRATOR
	<span id="Logout"><a href="index.php"> Back </a></span></div>
	<!--codes from w3 search table-->
<div class="editable">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for bus name..">

<table id="myTable">
  <tr class="header">
  	<th width="2%">ID</th>
    <th>Bus Name</th>
	<th>From</th>
	<th>Destination</th>
	<th>Arival</th>
	<th>Departure</th>
	<th>Price</th>

  </tr>
  <?php while($rowbus = mysqli_fetch_assoc($resultbus)) : ?>
	<tr>
		<td><?php echo $rowbus['ID']?></td>
	<td><?php echo ucfirst(strtolower($rowbus['bName'])) ?></td>
	<td><?php echo ucfirst(strtolower($rowbus['bFrom']))?></td>
	<td><?php echo ucfirst(strtolower($rowbus['bTo']))?></td>
	<td><?php echo $rowbus['aTime']?></td>
	<td><?php echo $rowbus['dTime']?></td>
	<td><?php echo $rowbus['price']?></td>
	</tr>
 <?php endwhile;?>
</table>
</div>

<script type="text/javascript" src="js/table.js"></script>
</body>
</html>	
