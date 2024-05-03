<?php require('header.php'); 
$userID = $_GET['hashID'];

?>
<link rel="stylesheet" href="css/style.css">

<main>
  <div class="flexcent">
    <div class="wachtwoord">
      <?= "<form class=\"login-wrapper\" action=\"login_systeem/wachtwoord_vergeten/verander_wachtwoord.php?userID=".$userID."\" method=\"post\">" ?>
        <h1 class="text-center">Verander hier uw wachtwoord</h1>
        <div class="wachtwoord-input" id="wachtwoord-input">
          <label for="wachtwoord" id="wachtwoord-input">Nieuwe wachtwoord:</label>
          <input type="password" name="wachtwoord" id="wachtwoord-input">
          <label for="wachtwoord_h" id="wachtwoord-two-input">Herhaling wachtwoord:</label>
          <input type="password" name="wachtwoord_h" id="wachtwoord-two-input">
        </div>
        <?php 
            $userID = $_GET['hashID'];

            if ($_SERVER['PHP_SELF'] !== $_SERVER["REQUEST_URI"]) {
                if (isset($_GET["msg"])) {
                    switch ($_GET["msg"]) {
                      case 'success':
                        echo "<div class=\"alert btn-block alert-success\">Uw wachtwoord is veranderd.</div>";
                        break;
                    
                      case 'wrong':
                        echo "<div class=\"alert btn-block alert-warning\">Herhaling wachtwoord komt niet overeen.</div>";
                        break;
                    
                      default:
                        echo "<div class=\"alert btn-block alert-danger\">Er is iets mis gegaan!</div>";
                    
                        break;
                    }
                }
            } else {
                exit(header('Location: index.php'));
            }
        ?>
        <input type="submit" name="submit" value="verzenden" class="btn btn-primary btn-block btn-large">
      </form>
    </div>
  </div>
</main>

<footer class="footer">

  <?php require('footer.php'); ?>
