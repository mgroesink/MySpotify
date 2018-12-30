<?php
include("includes/classes/Account.php");

$account = new Account();


include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");
?>

<html>
<head>
    <title>Welkom bij mijn Spotify!</title>
</head>
<body>

<div id="inputContainer">
    <form id="loginForm" action="register.php" method="POST">
        <h2>Inloggen bij Spotify</h2>
        <p>
            <label for="loginUsername">Gebruikersnaam</label>
            <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
        </p>
        <p>
            <label for="loginPassword">Wachtwoord</label>
            <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
        </p>

        <button type="submit" name="loginButton">INLOGGEN</button>

    </form>



    <form id="registerForm" action="register.php" method="POST">
        <h2>Maak een gratis account aan</h2>
        <p>
            <label for="username">Gebruikersnaam</label>
            <input id="username" name="username" type="text" placeholder="e.g. bartSimpson" required>
        </p>

        <p>
            <label for="firstName">Voornaam</label>
            <input id="firstName" name="firstName" type="text" placeholder="e.g. Bart" required>
        </p>

        <p>
            <label for="lastName">Achternaam</label>
            <input id="lastName" name="lastName" type="text" placeholder="e.g. Simpson" required>
        </p>

        <p>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="e.g. bart@gmail.com" required>
        </p>

        <p>
            <label for="email2">Bevestig email</label>
            <input id="email2" name="email2" type="email" placeholder="e.g. bart@gmail.com" required>
        </p>

        <p>
            <label for="password">Wachtwoord</label>
            <input id="password" name="password" type="password" placeholder="Your password" required>
        </p>

        <p>
            <label for="password2">Bevestig password</label>
            <input id="password2" name="password2" type="password" placeholder="Your password" required>
        </p>

        <button type="submit" name="registerButton">REGISTREER</button>

    </form>


</div>

</body>
</html>