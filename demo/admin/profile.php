<?php include('../database/db.php');?>
<?php

  $querybus = "SELECT * FROM `bus_info` WHERE bName = 'Hood'";
  $resultbus = mysqli_query($conn, $querybus) or die(mysqli_error($conn));
  $countbus = mysqli_num_rows($resultbus);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bus Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/busprofile.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="image-container">
			<ul class="slideShow">
			  <li><img src="images/image2.jpeg" /></li>
			  <li><img src="images/image3.jpeg" /></li>
			</ul>
		<div class="busname">Abood Bus</div>
		</div>
		<div class="btn-image">view images</div>
		<div class="about-container">
			<div class="aboutH"><i class="fa fa-bus"  aria-hidden="true"></i> About This Bus</div>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, 

			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
		</div>
		<div class="background">
		<div class="contacts-container">
			<div class="contactH">Contacts</div>
			Dar Es Salaam: 0712345768| Mbeya :07236475889 | Dodoma : 0712345678 | Main Office 094877373 Morogoro Tanzania
			
		</div>
		<div class="routes-container">
			<div class="routesH">Routes</div>
			<ul>
				<?php while($results = mysqli_fetch_assoc($resultbus)) : ?>
					<li><?php echo $results['bFrom'];?>-<?php echo $results['bTo'];?></li>
				<?php endwhile;?>
			</ul>
		</div>
	</div>
		<div class="tieinformation">
			Tie footer | Alright Reserved | 2017
		</div>	
<script type="text/javascript" src="js/book.js"></script>
</body>
</html>