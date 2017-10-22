<?php include('session.php');?>
<?php include('msg_helper.php');?>
<?php 

 if (isset($_POST['submitsend'])) {
    $msges = mysqli_real_escape_string($connsms,$_POST['txtmsg']);
    $msges = htmlspecialchars($msges);

    $querysend = "INSERT INTO `sms` (`name`, `message`, `time`) VALUES ('$login_session', '$msges', CURRENT_TIMESTAMP);";
    $resultsend = mysqli_query($connsms, $querysend) or die(mysqli_error($connsms));
    
    if ($querysend) {
        header('location: messages.php');

    }
 }
 ?>