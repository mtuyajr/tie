<?php include('../database/db.php');?>
<?php

  $querybus = "SELECT DISTINCT bName,done FROM `bus_info`";
  $resultbus = mysqli_query($conn, $querybus) or die(mysqli_error($conn));
  $countbus = mysqli_num_rows($resultbus);
?>

<!DOCTYPE html>
<html>
<head>
	<title>TOL-Admin| Bus Profile</title>
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
	<div id="controllPanel">Bus Profile</div>
	<div class="busProfileContainer">
		<ul>
			<?php while($bname = mysqli_fetch_assoc($resultbus)) : ?>
				<li> <?php echo ucfirst(strtolower($bname['bName'])); ?>  <span id="icon-show"class="<?php echo $bname['done'];?>">
					<i class="fa fa-check-circle-o"  aria-hidden="true"></i><span></li>
			<?php endwhile;?>
		</ul>
	</div>

</body>
</html>	