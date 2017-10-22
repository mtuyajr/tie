<?php

$busname = $_GET['bname'];
$description = $_GET['description'];
$price = $_GET['price'];
$dtime = $_GET['dTime'];
$atime = $_GET['aTime'];
$date = $_GET['date'];



?>
<!DOCTYPE html>
<html>
<head>
  <title>Booking</title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/hint.css">
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
</head>
<body id="bookingbody">
  <header>
    <div class="bookingheader">
      TIE BOOKING
    </div>
  </header>
  <content>
    <div class="selectSeat">
      <div id="booktitle" data-balloon="Whats up!" data-balloon-pos="up"> Please Choose Seat ( Max 5 ) </div>
      <div class="busseat">
        <table id="busseat" width="100%">
          <tr>
            <td id="rotate"> <img src="image/driver.png" alt="w" id="image"></td>

            <td data-balloon="A1" data-balloon-pos="up">
              <label>
                <div>
                <input type="checkbox" id="1" name="checkbox" >
                <span></span>
              </div>
              </label>
            </td>

            <td data-balloon="A2" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="2" name="checkbox" disabled>
                <span></span>
              </label>
            </td>

            <td data-balloon="A3" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="3" name="checkbox" disabled>
                <span></span>
              </label>
            </td>

            <td data-balloon="A4" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="4" name="checkbox" disabled>
                <span></span>
              </label>
            </td>

            <td data-balloon="A5" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="5" name="checkbox" disabled>
                <span></span>
              </label>
            </td>

            <td data-balloon="A6" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="6" name="checkbox">
                <span></span>
              </label>
            </td>

            <td data-balloon="A7" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="7" name="checkbox">
                <span></span>
              </label>
            </td>

            <td data-balloon="A8" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="8" name="checkbox">
                <span></span>
              </label>
            </td>

            <td data-balloon="A9" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="9" name="checkbox" disabled>
                <span></span>
              </label>
            </td>

            <td data-balloon="A10" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="10" name="checkbox">
                <span></span>
              </label>
            </td>

            <td data-balloon="A11" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="11" name="checkbox">
                <span></span>
              </label>
            </td>
            
            
          </tr>
          <tr>
            <td id="whitecolor"> 0 </td>

            <td data-balloon="B1" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="12" name="checkbox" disabled>
                <span></span>
              </label>
            </td>

            <td data-balloon="B2" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="13" name="checkbox" disabled>
                <span></span>
              </label>
            </td>

            <td data-balloon="B3" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="14" name="checkbox" >
                <span></span>
              </label>
            </td>

            <td data-balloon="B4" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="15" name="checkbox" disabled>
                <span></span>
              </label>
            </td>

            <td data-balloon="B5" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="16" name="checkbox" >
                <span></span>
              </label>
            </td>

            <td data-balloon="B6" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="17" name="checkbox">
                <span></span>
              </label>
            </td>

            <td data-balloon="B7" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="18" name="checkbox">
                <span></span>
              </label>
            </td>

            <td data-balloon="B8" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="19" name="checkbox">
                <span></span>
              </label>
            </td>

            <td data-balloon="B9" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="20" name="checkbox">
                <span></span>
              </label>
            </td>

            <td data-balloon="B10" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="21" name="checkbox" >
                <span></span>
              </label>
            </td>

            <td data-balloon="B11" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="22" name="checkbox">
                <span></span>
              </label>
            </td>
          </tr>
          <tr>
            <td id="whitecolor"> C </td>
            <td id="whitecolor"> C </td>
            <td id="whitecolor"> C </td>
            <td id="whitecolor"> C </td>
            <td id="whitecolor"> C </td>
            <td id="whitecolor"> C </td>
            <td id="whitecolor"> C </td>
            <td id="whitecolor"> C </td>
            <td id="whitecolor"> C </td>
            <td id="whitecolor"> C </td>
            <td id="whitecolor"> C </td>
            <td data-balloon="C1" data-balloon-pos="left">
              <label>
                <input type="checkbox" id="23" name="checkbox" >
                <span></span>
              </label>
            </td>
          </tr>
          <tr>
            <td id="whitecolor"> 0 </td>

            <td data-balloon="D1" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="24" name="checkbox" disabled>
                <span></span>
              </label>
            </td>
            
            <td data-balloon="D2" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="25" name="checkbox" disabled>
                <span></span>
              </label>
            </td>
            
            <td data-balloon="D3" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="26" name="checkbox" disabled>
                <span></span>
              </label>
            </td>
            
            <td data-balloon="D4" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="27" name="checkbox" disabled>
                <span></span>
              </label>
            </td>
            
            <td data-balloon="D5" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="28" name="checkbox">
                <span></span>
              </label>
            </td>
            
            <td data-balloon="D6" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="29" name="checkbox">
                <span></span>
              </label>
            </td>
            
            <td data-balloon="D7" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="30" name="checkbox">
                <span></span>
              </label>
            </td>
            
            <td data-balloon="D8" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="31" name="checkbox">
                <span></span>
              </label>
            </td>
            
            <td data-balloon="D9" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="32" name="checkbox" >
                <span></span>
              </label>
            </td>
            
            <td data-balloon="D10" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="33" name="checkbox">
                <span></span>
              </label>
            </td>
            
            <td data-balloon="D11" data-balloon-pos="up">
              <label>
                <input type="checkbox" id="34" name="checkbox">
                <span></span>
              </label>
            </td>
          </tr>
          <tr>
            <td id="whitecolor"> 0 </td>
            <td data-balloon="E1" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="35" name="checkbox" disabled>
                <span></span>
              </label>
            </td>
            <td data-balloon="E2" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="36" name="checkbox" disabled>
                <span></span>
              </label>
            </td>
            <td data-balloon="E3" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="37" name="checkbox" disabled>
                <span></span>
              </label>
            </td>
            <td data-balloon="E4" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="38" name="checkbox" disabled>
                <span></span>
              </label>
            </td>
            <td data-balloon="E5" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="39" name="checkbox" disabled>
                <span></span>
              </label>
            </td>
            <td data-balloon="E6" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="40" name="checkbox">
                <span></span>
              </label>
            </td>
            <td data-balloon="E7" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="41" name="checkbox">
                <span></span>
              </label>
            </td>
            <td data-balloon="E8" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="42" name="checkbox">
                <span></span>
              </label>
            </td>
            <td data-balloon="E9" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="43" name="checkbox">
                <span></span>
              </label>
            </td>
            <td data-balloon="E10" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="44" name="checkbox">
                <span></span>
              </label>
            </td>
            <td data-balloon="E11" data-balloon-pos="down">
              <label>
                <input type="checkbox" id="45" name="checkbox">
                <span></span>
              </label>
            </td>
          </tr>

      </table>
    </div>
    <div class="selectedSeat"> Book <span id="book"> 0 </span> Seat(s)</div>
  </content>
  <section>
    <div class="businfomation">
     <div class="businfomationH">
       Booking information
     </div>
     <div class="businfomationT">
       <table width="100%">
         <tr>
           <td class="less">Bus:</td>
           <td><?php echo $busname; ?></td>
         </tr>
         <tr>
           <td class="less">Bus Type:</td>
           <td><?php echo $description; ?></td>
         </tr>
         <tr>
           <td class="less">Price/Ticket:</td>
           <td id="priceF"><?php echo $price; ?></td>
         </tr>
         <tr>
           <td class="less">Departure:</td>
           <td><?php echo $dtime; ?></td>
         </tr>
         <tr>
           <td class="less">Arrival:</td>
           <td><?php echo $atime; ?></td>
         </tr>
         <tr>
           <td class="less">Date:</td>
           <td><?php echo $date; ?></td>
         </tr>
       </table>
     </div>
     <div class="goHome"><a href="index.php">Cancell booking</a></div>
    </div>
  </section>
  <section>
    <div class="paymentinfomation">
      <div class="paymentinfomationH">
         Payment infomation
         <div class="paymentinfomationT">
          <table width="100%">
            <tr>
              <td>
                <input type="text" name="tprice" id="tprice" value="0" disabled>
              </td>
            </tr>
            <tr>
              <td>
                Total Price
              </td>
            </tr>
          </table>
      </div>
        </div>
        <div class="seatSelection">
          <div class="seatSelectionH">Selected Seats</div>
          <div class="Selected">
            <ul id="ul">            


          </ul>
          </div>
        </div>
    </div>
  </section>
  <section>
    <div class="finishing">
      <div class="finishingH">
        Fill out The Following Information: <span id="posRight" data-balloon="close" data-balloon-pos="left">x</span>
      </div>
      <div class="finishingF">
        <form id="formF" autocomplete="off">
          <div class="phonenumber">
            Your Phone:  <input type="phone" name="phone" placeholder="eg +255">
          </div>
          <table width="100%" id="tableF">
             

        </table>
        <div class="sbtn">
          <input type="submit" name="submitform" id="submitform" value="Submit">
        </div>
        </form>
      </div>
    </div>
  </section>
<script type="text/javascript" src="js/bus.js"></script>
</body>
</html>
