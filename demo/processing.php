<?php require('database/db.php');

if (isset($_POST['submit'])) {

  $from = $_POST['from'];
  $to = $_POST['to'];
  $date = $_POST['date'];

//input to upper case
  $from = ucfirst($from);
  $to   = ucfirst($to);
  $date = $date;

//input validating
  $from = trim($from);
  $from = stripslashes($from);
  $from = htmlspecialchars($from);
  $to = trim($to);
  $to = stripslashes($to);
  $to = htmlspecialchars($to);
  $date = trim($date);
  $date = stripslashes($date);
  $date = htmlspecialchars($date);

  //converting to uppercases
  $from = strtoupper($from);
  $to = strtoupper($to);
    $from = trim($from);
  $to = trim($to);




  //GETTING FIRST AND LAST CHARACTER OF THER USER INPUTS
  /*
  $fromCharF = substr($from, 0,1);
  $lengthString = strlen($from);
  $fromChar_lastIndex = $lengthString - 1;
  $fromCharL = $from[$fromChar_lastIndex];


  $toCharF = substr($from, 0,1);
  $lengthString = strlen($from);
  $fromChar_lastIndex = $lengthString - 1;
  $fromCharL = $from[$fromChar_lastIndex];
*/


  $query = "SELECT * FROM `bus_info` WHERE bFrom LIKE '$from' and bTo='$to'";
  $resultbus = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $count = mysqli_num_rows($resultbus);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $from." to ".$to;?></title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
  <header>
    <div class="header">
      <div class="headerTable">
        <table width="100%">
          <tr>
            <td id="tietitle">BOOKING ROUTE:</td>
            <td id="aftertie"><?php echo strtoupper($from);?><span id="route"> TO </span id="route"><?php echo strtoupper($to);?></td>
              <td>Available Buses (<span id="count"> <?php echo $count;?> </span>)</td>
          </tr>
        </table>
      </div>
    </div>
    <content>
      <div class="resultsdiv">
        <?php while($fetch = mysqli_fetch_assoc($resultbus)): ?>
          <div class="bus">
            <div id="bustable">
            <table width="100%">
              <tr>
                <td id="td">
                  <span id="busname"><?php echo strtoupper($fetch['bName']);?></span><br>
                  <span id="busdescription"><?php echo $fetch['description'];?></span><br><br>
                  <span id="rate"><?php echo $fetch['ratings'];?>/5</span> (4 ratings)
                </td>
                <td id="td">
                  <span id="atime"><?php echo $fetch['aTime'];?></span><br>
                  <span id="boarding">ArrivalTime</span><br><br>
                  <span> </span>
                </td>
                <td id="td">
                  <span id="dtime"><?php echo $fetch['dTime'];?></span><br>
                  <span id="drop">DepartureTime</span><br><br>
                  <span> </span>
                </td>
                <td id="td">
                  <span id="price"><?php echo $fetch['price'];?></span><br>
                  <span id="seats">35 Seats</span><br><br>
                  <span> </span>
                </td>
                <td id="td">
                  <a href="booking.php?bname=<?php echo strtoupper($fetch['bName']);?> & aTime=<?php echo $fetch['aTime'];?> & dTime=<?php echo $fetch['dTime'];?> & price=<?php echo $fetch['price'];?> & description=<?php echo $fetch['description'];?> & date=<?php echo $date;?>">
                    <div id="button">Select</div></a>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <?php endwhile;?>
      </div>
    </content>
  </header>
  <div class="nobus">
    ! Sorry No Bus Found In Your Route for the Date <?php echo $date; ?> Try Again Later 
      <div class="buttonback"><a href="index.php">Try Again</a></div>
  </div>
   <script type="text/javascript">
      var count = document.getElementById("count");
      var count = count.innerHTML;
      if(count == 0){
        $(".nobus").css("display","block");
      }
    </script>
</body>
</html>
