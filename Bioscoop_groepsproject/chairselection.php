<?php require('header.php'); ?>
<?php require('login_systeem/config.php') ?>
<?php
    $sql    = "SELECT seatID from seats"; // select column , * = all , from what table?, | -- string
    $query  = $db->query($sql); // db == database, -> prompt, save to query
    $stoelen  = $query->fetchall(PDO::FETCH_ASSOC); // fetch (ASSOCIATIVE ARRAY) data
?>
<link rel="stylesheet" href="css/style.css">

  <main> <!-- MAIN START -->
    <div class="background-top-title"></div>
    <div class="wrapper no-flex">
        <div class="title flex">
            <?php
            echo $_SESSION['startTime'];
            ?>
            <a class="go-back" href="movie.php">Go Back</a>
        </div>
        <div class="progress">
            <a href="tickets.php">
                <div class="bar">1. CHOSING TICKETS</div>
            </a>
            <a href="chairselection.php">
                <div class="bar selected">2. SELECTING CHAIRS</div>
            </a>
            <a href="ordering.php">
                <div class="bar">3. ORDERING</div>
            </a>
            <a href="#">
                <div class="bar">4. PAYOUT</div>
            </a>
        </div>
        <div class="text-center">
          <h2>Plaatsen selecteren</h2>
        </div>
        <form action="chairController.php" method="POST">
            <table class="chair-selection">
                <tbody>
                    <tr>
                      <?php
                        $a = 1;
                        $seatNumber = 1;
                        $seatcounter = 0;
                          for ($i=1; $i < 67 ; $i++) {
                            if ( $stoelen[$seatcounter]['seatID'] == $seatNumber) {
                                // IF THE COUNTER IS 11 MAKE A NEW ROW
                                if ( $i == 1 || $i == 10 || $i == 19 || $i == 28 || $i == 37 || $i == 46 || $i == 53 || $i == 60) {
                                    echo '<tr>';
                                }
                                // IF THE COUNTER IS A CERTAIN NUMBER SET THE ROWNUMBER
                                if ( $i == 1 || $i == 10 || $i == 19 || $i == 28 || $i == 37 || $i == 46 || $i == 53 || $i == 60) {
                                    echo '<td class="nmber"><h4>' . $a . '.</h4></td>';

                                }
                                // IF THE COUNTER IS 5 SET A SPACING
                                if ( $i == 4 || $i == 7 || $i == 13 || $i == 16 || $i == 22 || $i == 25 || $i == 31 || $i == 34 || $i == 40 || $i == 43 || $i == 46 || $i == 48 || $i == 51 || $i == 53 || $i == 53 || $i == 55 || $i == 58 || $i == 60 || $i == 62 || $i == 65 ) {
                                    echo '<td class="spacing"></td>';
                                }
                                // MAKE THE TD WITH THE CLASS SEAT AND ECHO THE INPUT WITH OR WTHOUT CHECK
                                echo "<td class='seat'>";
                                echo "<input type='checkbox' name='seats[]' value='" . $seatNumber . "' id='" . $seatNumber . "'";
                                echo "disabled readonly />";
                                // SETS THE LABEL WITH THE CORRECT SEAT
                                echo "<label for=" . $seatNumber . ">" . $seatNumber . "</label>";
                                echo "</td>";
                                // EXTRA TD'S FOR FIXING BOTTOM RIGHT
                                if ( $i == 52 || $i == 59 || $i == 66) {
                                    echo '<td></td>';
                                }
                                // IF THE COUNTER IS A CERTAIN NUMBER SET THE ROWNUMBER
                                if ( $i == 9 || $i == 18 || $i == 27 || $i == 36 || $i == 45 || $i == 52 || $i == 59 || $i == 66) {
                                    echo '<td class="nmber"><h4>' . $a . '.</h4></td>';
                                    $a++;
                                }
                                // IF THE COUNTER IS A CERTAIN NUMBER START A NEW ROW
                                if ($i == 9 || $i == 18 || $i == 27 || $i == 36 || $i == 45 || $i == 52 || $i == 59) {
                                    echo '</tr>';
                                }
                            }
                            else {
                                // IF THE COUNTER IS 11 MAKE A NEW ROW
                                if ( $i == 1 || $i == 10 || $i == 19 || $i == 28 || $i == 37 || $i == 46 || $i == 53 || $i == 60) {
                                    echo '<tr>';
                                }
                                // IF THE COUNTER IS A CERTAIN NUMBER SET THE ROWNUMBER
                                if ( $i == 1 || $i == 10 || $i == 19 || $i == 28 || $i == 37 || $i == 46 || $i == 53 || $i == 60) {
                                    echo '<td class="nmber"><h4>' . $a . '.</h4></td>';

                                }
                                // IF THE COUNTER IS 5 SET A SPACING
                                if ( $i == 4 || $i == 7 || $i == 13 || $i == 16 || $i == 22 || $i == 25 || $i == 31 || $i == 34 || $i == 40 || $i == 43 || $i == 46 || $i == 48 || $i == 51 || $i == 53 || $i == 53 || $i == 55 || $i == 58 || $i == 60 || $i == 62 || $i == 65 ) {
                                    echo '<td class="spacing"></td>';
                                }
                                // MAKE THE TD WITH THE CLASS SEAT AND ECHO THE INPUT WITH OR WTHOUT CHECK
                                echo "<td class='seat'>";
                                echo "<input type='checkbox' name='seats[]' value='" . $seatNumber . "' id='" . $seatNumber . "'";
                                echo "/>";
                                // SETS THE LABEL WITH THE CORRECT SEAT
                                echo "<label for=" . $seatNumber . ">" . $seatNumber . "</label>";
                                echo "</td>";
                                // EXTRA TD'S FOR FIXING BOTTOM RIGHT
                                if ( $i == 52 || $i == 59 || $i == 66) {
                                    echo '<td></td>';
                                }
                                // IF THE COUNTER IS A CERTAIN NUMBER SET THE ROWNUMBER
                                if ( $i == 9 || $i == 18 || $i == 27 || $i == 36 || $i == 45 || $i == 52 || $i == 59 || $i == 66) {
                                    echo '<td class="nmber"><h4>' . $a . '.</h4></td>';
                                    $a++;
                                }
                                // IF THE COUNTER IS A CERTAIN NUMBER START A NEW ROW
                                if ($i == 9 || $i == 18 || $i == 27 || $i == 36 || $i == 45 || $i == 52 || $i == 59) {
                                    echo '</tr>';
                                }
                            }
                            if ( $seatcounter != count($stoelen) - 1){
                                $seatcounter++;
                            }
                            $seatNumber++;
                          }
                      ?>
                    </tr>
                </tbody>
            </table>
            <div class="screen"><h3>scherm</h3></div>
              <input type="submit" name="type" style="background:#FFC426; border:none; font-size: 1.3rem;" class="btn btn-primary btn-block btn-large" value="STEP 3: CONFIRMATION">
        </form>
    </div> <!-- WRAPPER END -->
  </main> <!-- MAIN END -->
  <footer>
    <?php require('footer.php'); ?>
  </footer>
