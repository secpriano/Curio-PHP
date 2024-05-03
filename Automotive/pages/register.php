<?php

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: admin");
    exit;
}

if(isset($_POST['submit'])) {

    $repeatPassword = $_POST['repeatPassword'];
    $password = $_POST['password'];

    if($password != $repeatPassword) {
        $message = "Wachtwoorden komen niet overeen.";

    } else {

        try {
            $username = $_POST['username'];
            $hashedPassword = password_hash($password, PASSWORD_ARGON2I);

            $query = "INSERT INTO users (UserName, UserPassword) VALUES (:username, :password)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hashedPassword);

            if ($stmt->execute()) {
                $message = "Gebruiker is succesvol geregistreerd.";
            } else {
                $message = "Kan gebruiker niet registreren.";
            }

        } catch (PDOException $e) {
            $message = $e->getMessage();

        }
    }
}

require '../includes/header.php'
?>

    <main>
        <div class="wrapper">
            <section class="account">
                <form action="" method="post">
                    <h2>Registreren</h2>
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" name="username" placeholder="Gebruikersnaam">
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password" placeholder="Wachtwoord">
                    <label for="repeatPassword">Herhaal wachtwoord</label>
                    <input type="password" name="repeatPassword" placeholder="Herhaal wachtwoord">
                    <?php if(isset($message)) echo $message; ?>
                    <input type="submit" name="submit" value="Registreren">
                    <p>Heb je al een account? <a href="login.php">Login hier</a></p>
                </form>
            </section>
        </div>
    </main>

<?php require '../includes/footer.php' ?>