<?php

require '../includes/header.php';

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: admin");
    exit;
}

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $query = "SELECT * FROM users WHERE UserName = :username";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user) {
            if(password_verify($password, $user['UserPassword'])) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: admin");
            } else {
                $message = "Wachtwoord is onjuist.";
            }
        } else {
            $message = "Gebruiker bestaat niet.";
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
    }
}

?>

    <main>
        <div class="wrapper">
        <section class="account">
            <form action="login.php" method="post">
                <h2>Login</h2>
                <label for="username">Gebruikersnaam</label>
                <input type="text" name="username" placeholder="Gebruikersnaam">
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" name="password" placeholder="Wachtwoord">
                <?php if(isset($message)) echo $message; ?>
                <input type="submit" name="submit" value="Login">
                <p>Nog geen account? <a href="register.php">Registreer hier</a></p>
            </form>
        </section>
        </div>
    </main>

<?php require '../includes/footer.php' ?>