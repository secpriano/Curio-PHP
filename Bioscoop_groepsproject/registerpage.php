<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

<main>
  <div class="flexcent">
    <div class="wachtwoord">
      <form class="register-wrapper" action="login_systeem/aanmelden/aanmelden.php" method="post">
        <h1 class="text-center">Registreren</h1>
        <p class="text-center">
          <strong>Maak hier een account aan om gebruik te maken van Bioscoop AMO.</strong>
          <br>Je kan dan makkelijk terug zien welke tickets je hebt gekocht en wat je aankoopgeschiedenis is. Ook kan je beheren welke bioscopen favoriet zijn.
        </p>
        <div class="voornaam-input responsive-flexX" id="voornaam-input">
          <label for="voornaam-input" id="voornaam-input">Voornaam:</label>
          <input type="text" name="voornaam-input" id="voornaam-input">
        </div>
        <div class="achternaam-input responsive-flexX" id="achternaam-input">
          <label for="achternaam-input" id="achternaam-input">Achternaam:</label>
          <input type="text" name="achternaam-input" id="achternaam-input">
        </div>
        <div class="geboortedatum-input responsive-flexX" id="geboortedatum-input">
          <label for="geboortedatum-input" id="geboortedatum-input">Geboortedatum:</label>
          <input type="date" name="geboortedatum-input" id="geboortedatum-input">
        </div>
        <div class="woonplaats-input responsive-flexX" id="woonplaats-input">
          <label for="woonplaats-input" id="woonplaats-input">Woonplaats:</label>
          <input type="text" name="woonplaats-input" id="woonplaats-input">
        </div>
        <div class="straatnaam-input responsive-flexX" id="straatnaam-input">
          <label for="straatnaam-input" id="straatnaam-input">Straatnaam:</label>
          <input type="text" name="straatnaam-input" id="straatnaam-input">
        </div>
        <div class="huisnummer-input responsive-flexX" id="huisnummer-input">
          <label for="huisnummer-input" id="huisnummer-input">Huisnummer:</label>
          <input type="text" name="huisnummer-input" id="huisnummer-input">
        </div>
        <div class="postcode-input responsive-flexX" id="postcode-input">
          <label for="postcode-input" id="postcode-input">Postcode:</label>
          <input type="text" name="postcode-input" min="0" max="6" id="postcode-input">
        </div>
        <div class="telefoonnummer-input responsive-flexX" id="telefoonnummer-input">
          <label for="telefoonnummer-input" id="telefoonnummer-input">Telefoonnummer:</label>
          <input type="text" name="telefoonnummer-input" id="telefoonnummer-input">
        </div>
        <div class="email-input responsive-flexX" id="email-input">
          <label for="email-input" id="email-input">Email addres:</label>
          <input type="email" name="email-input" id="email-input">
        </div>
        <div class="email-two-input responsive-flexX" id="email-two-input">
          <label for="email-two-input" id="email-two-input">Herhaling Email:</label>
          <input type="email" name="email-two-input" id="email-two-input">
        </div>
        <div class="wachtwoord-input responsive-flexX" id="wachtwoord-input">
          <label for="wachtwoord-input" id="wachtwoord-input">Wachtwoord:</label>
          <input type="password" name="wachtwoord-input" id="wachtwoord-input">
        </div>
        <div class="wachtwoord-two-input responsive-flexX" id="wachtwoord-two-input">
          <label for="wachtwoord-two-input" id="wachtwoord-two-input">Herhaling Wachtwoord:</label>
          <input type="password" name="wachtwoord-two-input" id="wachtwoord-two-input">
        </div>
        <input type="submit" name="submit" value="Aanmelden" class="btn btn-primary btn-block btn-large no-bottom">
        <?php 
        if (isset($_GET["msg"]) && $_GET["msg"] == 'exist') {
          echo "<div class=\"alert btn-block alert-warning\">Account already exist!</div>";
          }
        ?>
      </form>
    </div>
</main>

<footer class="footer">

<?php require('footer.php'); ?>