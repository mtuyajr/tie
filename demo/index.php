<?php require('database/db.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.css">
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="css/jquery-ui.js"></script>
  </head>
  <body>
    <div class="modal">
      <div class="table">
      <div class="titlehead">TIE BUS TICKETING</div>
        <form method="POST" action="processing.php" autocomplete="off">
          <table width="100%">
            <tr>
              <td>
                <input type="text" name="from" placeholder="From" id="inputRegion" required>
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" name="to" placeholder="To" id="inputRegionTo" required>
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" name="date" id="datepicker" placeholder="Date" required>
              </td>
            </tr>
            <tr>
              <td>
                <input type="submit" name="submit" value="Submit">
              </td>
            </tr>
          </table>
        </form>
        <div class="loginRegister"><a href="login_page.php"> login | Register </a></div>
    </div>
    <div class="regions">
      <ul>
        <li id="listValcancel">cancel</li>
        <li class="ValDar">Dar Es Salaam</li>
        <li class="valMwanza">Mwanza</li>
        <li class="valMoro">Morogoro</li>
        <li class="valTanga">Tanga</li>
        <li class="valArusha">Arusha</li>
        <li class="valShinyanga">Shinyanga</li>
        <li class="valTunduma">Tunduma</li>
        <li class="valTuriani">Turiani</li>
        <li class="valMtwara">Mtwara</li>
        <li class="valSingida">Singida</li>
        <li class="valMbeya">Mbeya</li>
      </ul>
    </div>
    <div class="regionsTo">
      <ul>
        <li id="listValcancelTo">cancel</li>
        <li class="ValDarTo">Dar Es Salaam</li>
        <li class="valMwanzaTo">Mwanza</li>
        <li class="valMoroTo">Morogoro</li>
        <li class="valTangaTo">Tanga</li>
        <li class="valArushaTo">Arusha</li>
        <li class="valShinyangaTo">Shinyanga</li>
        <li class="valTundumaTo">Tunduma</li>
        <li class="valTurianiTo">Turiani</li>
        <li class="valMtwaraTo">Mtwara</li>
        <li class="valSingidaTo">Singida</li>
        <li class="valMbeyaTo">Mbeya</li>
      </ul>
    </div>



    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>