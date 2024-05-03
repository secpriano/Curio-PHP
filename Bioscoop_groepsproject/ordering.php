<?php
    require('header.php');
    require('php/dbconnect.php');
    $sql    = "SELECT startTime from rooster WHERE movie = 2"; // select column , * = all , from what table?, | -- string
    $query  = $db->query($sql); // db == database, -> prompt, save to query
    $tijden  = $query->fetchall(PDO::FETCH_ASSOC); // fetch (ASSOCIATIVE ARRAY) data
?>
<link rel="stylesheet" href="css/style.css">

<main>
    <div class="background-top-title"></div>
    <div class="wrapper no-flex">
        <div class="title flex">
          <?php
          echo $_SESSION['startTime'];
          ?>
            <a class="go-back" href="movie.php">Go Back</a>
        </div>
        <div class="order">
            <div class="tickets">
                <div class="progress">
                    <a href="tickets.php">
                        <div class="bar">1. CHOSING TICKETS</div>
                    </a>
                    <a href="chairselection.php">
                        <div class="bar">2. SELECTING CHAIRS</div>
                    </a>
                    <a href="ordering.php">
                        <div class="bar selected">3. ORDERING</div>
                    </a>
                    <a href="#">
                        <div class="bar">4. PAYOUT</div>
                    </a>
                </div>
                <h3>YOUR ORDER</h3>
                <div class="order-movie-info order-page">
                    <div class="img">
                        <img class="img-responsive" src="https://media.pathe.nl/thumb/180x254/gfx_content/posterhr/Sonic-OV-_ps_2_jpg_sd-high_Copyright-2019-Paramount-Pictures-and-Sega-of-America-Inc-All-Rights-Reserved.jpg" alt="">
                    </div>
                    <div class="order-movie-details">
                        <h4>SONIC (ORIGINAL VERSON)</h4>
                        <h5>Bioscoop</h5>
                        <p>Bioscoop AMO</p>
                        <h5>Wanneer</h5>
                        <?php
                        echo "<p>" . date('l j F h:i',strtotime($tijden[0]['startTime'])) . " tot 07:10 </p>";
                        ?>
                        <h5>Versie</h5>
                        <p>EN</p>
                        <h5>Stoelen</h5>
                        <?php
                          echo "<p>";
                          if (isset ($_SESSION['selectedSeat[1]'])) {
                            for ($i=1; $i < 12; $i++) {
                              if (isset ($_SESSION['selectedSeat[' . $i . ']'])) {
                                echo $_SESSION['selectedSeat[' . $i . ']'] . "  ";
                              }
                              elseif (!empty($_SESSION['selectedSeat[' . $i . ']']) ) {
                                break;
                              }
                              unset($_SESSION['selectedSeat['. $i .']']);
                            }
                            echo "</p>";
                          }
                          else {
                            echo "<p>geen plaats geselecteerd</p>";
                          }
                        ?>
                        <div class="tickets-total">
                          <?php
                            echo "<h4>";
                            if (isset ($_SESSION['adult'])) {
                              if ($_SESSION['adult'] == NULL){
                                $_SESSION['adult'] = 0;
                              }
                              echo "<p>volwassen </p>";
                              echo "<span>" . $_SESSION['adult'] . "x €8,00";
                              echo "<br>";
                            }
                            if (isset ($_SESSION['child'])) {
                              if ($_SESSION['child'] == NULL){
                                $_SESSION['child'] = 0;
                              }
                              echo "<p>kind </p>";
                              echo "<span>" . $_SESSION['child'] . "x €6,95";
                              echo "<br>";
                            }
                            if (isset ($_SESSION['elder'])) {
                              if ($_SESSION['elder'] == NULL){
                                $_SESSION['elder'] = 0;
                              }
                              echo "<p> ouder dan 64 </p>";
                              echo "<span>" . $_SESSION['elder'] . "x €7,00";
                              echo "<br>";
                            }
                            else {
                              echo "<p>geen ticket gekozen </p>";
                            }
                            echo "</h4>";
                          ?>
                        </div>
                        <div class="total">
                            <?php
                            $noTickets = isset($_SESSION['adult']);
                            $noTickets = isset($_SESSION['child']);
                            $noTickets = isset($_SESSION['elder']);
                            if ($noTickets == false){
                              echo '<p><a href="tickets.php" style="color:white;">Selecteer tickets</a>';
                              die();
                            }
                            else {
                              if (isset ($_SESSION['adult'])) {
                                if ($_SESSION['adult'] == NULL){
                                  $totalA = 0;
                                }
                                else {
                                  $totalA = $_SESSION['adult']*8;
                                }
                              }
                              if (isset ($_SESSION['child'])) {
                                if ($_SESSION['child'] == NULL) {
                                  $totalC = 0;
                                }
                                else {
                                  $totalC = $_SESSION['child']*6.957;
                                }
                              }
                              if (isset ($_SESSION['elder'])) {
                                if ($_SESSION['elder'] == NULL){
                                  $totalE = 0;
                                }
                                else {
                                  $totalE = $_SESSION['elder']*7;
                                }
                              }
                              if ($totalA == null && $totalC == NULL && $totalE == NULL){
                                echo "Geen tickets geselecteerd";
                              }
                              else {
                                $total = $totalA + $totalC + $totalE;
                                echo "<p>Totaal: " . number_format($total, 2, '.', '') . "€ </p>";
                              }

                              unset($_SESSION['adult']);
                              unset($_SESSION['child']);
                              unset($_SESSION['elder']);
                            }

                            ?>
                        </div>
                    </div>
                </div>
                <form class="go-to-next-stage" action=""><input type="submit" value="PAYOUT"></form>
            </div>
            <div class="order-confirmation">

            </div>
        </div>
    </div>
</main>

<footer class="footer">

    <?php require('footer.php'); ?>
