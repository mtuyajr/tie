
<?php 
//connection to database
include('database.php'); ?>


<?php 
//inserting data
$description = $_POST['description'];

if (isset($_POST['submit'])) {
	
	$busname = $_POST['busname'];
	$from = $_POST['from'];
	$to = $_POST['to'];
	$Atime = $_POST['Atime'];
	$Dtime = $_POST['Dtime'];
	$price = $_POST['price'];


	$busname = ucfirst($busname);
	$from = ucfirst($from);
	$to = ucfirst($to);
	$Atime = ucfirst($Atime);
	$Dtime = ucfirst($Dtime);

	$busname = trim($busname);
	$from = trim($from);
	$to = trim($to);
	$Atime = trim($Atime);
	$Dtime = trim($Dtime);

	


	$sql = " INSERT INTO `bus_info` (`bName`, `bFrom`, `bTo`, `price`,`aTime`, `dTime`, `description`) VALUES ('$busname', '$from', '$to','$price', '$Atime', '$Dtime', '$description')";

	//getting results
	$result = mysqli_query($conn,$sql);

	if ($result) {
		header('Location: addbus.php?info= Buss Added Successfull!');
	}else
	header('Location: addbus.php?info= Failed, Try Again!');
}


?>