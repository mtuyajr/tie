 <?php include('msg_helper.php');?>
 <?php 
	$queryreceive = "SELECT * FROM `sms`";
  	$receivedResponse = mysqli_query($connsms,$queryreceive) or die(mysqli_error($connsms));

 ?>

 <?php while($rowRe = mysqli_fetch_assoc($receivedResponse)) : ?>
						<li>
							<span id="name"><?php echo $rowRe['name']; ?>:</span><span id="time"><?php echo $rowRe['time']; ?></span><br>
							<?php echo $rowRe['message']; ?>
						</li>
						<?php endwhile;?>