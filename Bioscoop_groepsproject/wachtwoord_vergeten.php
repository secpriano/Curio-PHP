<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

<main>
  <div class="flexcent">
    <div class="wachtwoord">
      <form class="login-wrapper" action="login_systeem/wachtwoord_vergeten/wachtwoord_vergeten.php" method="post">
        <h1 class="text-center">Wachtwoord vergeten?</h1>
        <p>Wat jammer dat u uw wachtwoord bent vergeten maar dat is geen probleem.<br> Als u hier onder u emailadres invult dan sturen wij u een email waar u uw wachtwoord kunt veranderen.</p>
        <div class="email-input" id="email-input">
          <label for="email" id="email-input">Email addres:</label>
          <input type="" name="email" id="email-input">
        </div>
        <?php 
          if (isset($_GET["msg"])) {
            $direct = (bool)$_SERVER['HTTP_REFERER'];

            if ( $direct == false ) {
              exit(header('Location: '.$_SERVER['PHP_SELF']));
            }

            switch ($_GET["msg"]) {
              case 'exist':
                echo "<div class=\"alert btn-block alert-success\">Er is een email gestuurd waar u uw wachtwoord kan aanpassen.</div>";
                break;

              case 'notexist':
                echo "<div class=\"alert btn-block alert-warning\">Er is geen AMO-account met de gegevens die je hebt opgegeven.</div>";
                break;
                
              case 'fail':
                echo "<div class=\"alert btn-block alert-danger\">Uw email is verkeerd geschreven!</div>";
                break;
              
              default:
                echo "<div class=\"alert btn-block alert-danger\">Er is iets mis gegaan!</div>";
                
                break;
            }
          }
        ?>
        <input type="submit" name="submit" value="verzenden" class="btn btn-primary btn-block btn-large">
      </form>
    </div>
  </div>
</main>

<footer class="footer">

  <?php require('footer.php'); ?>
