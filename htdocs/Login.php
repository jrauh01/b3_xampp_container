<?php
session_start();

$PASSWORD = '123';

if (isset($_POST['logout'])) {
    session_destroy();
} else if (isset($_POST['submit'])) {
    if (isset($_POST['kundennummer']) && isset($_POST['password'])) {
        $kundennummer = $_POST['kundennummer'];

        if ($_POST['password'] === $PASSWORD) {
            $_SESSION['kundennummer'] = $kundennummer;
        }
    }
}
?>

<html lang="de">
<head>
    <title>Autohaus Nettmann</title>
    <link rel="stylesheet" href="css/frame.css">
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        label {
            width: 20em;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
<header>
    <div>
        <nav>
            <ul>
                <li><a href="Zutrittsversuche.html">Zutrittsversuche</a></li>
                <li>|</li>
                <li><a href="#">Mitarbeiter</a></li>
                <li>|</li>
                <li><a href="Mietwagen.php">Mietwagen</a></li>
            </ul>
        </nav>
        <h1>Mietwagen</h1>
    </div>

    <img src="img/Nettmann_logo.png" alt="Nettmann Logo" class="nettmann-logo">
</header>

<?php if (isset($_SESSION['kundennummer'])): ?>
    <p>Kundennummer: <?= $_SESSION['kundennummer'] ?></p>
    <form method="post">
        <input type="submit" name="logout" value="Abmelden">
    </form>
<?php else: ?>
    <form method="post">
        <label>
            <span>Kundennummer:</span>
            <input type="text" name="kundennummer">
        </label>
        <br>
        <label>
            <span>Passwort:</span>
            <input type="password" name="password">
        </label>
        <br>
        <input type="submit" name="submit" value="Anmelden">
    </form>
<?php endif; ?>

<hr class="footer-hr">
<footer>
    <div>
        <p>Kontakt:</p>
        <ul>
            <li>Ottostra&szlig;e 22, 90762 F&uuml;rth</li>
            <li>0911/11...</li>
            <li>info@autohaus-nettmann.de</li>
        </ul>
    </div>
    <div>
        <p>Bankdaten:</p>
        <ul>
            <li>IBAN: DE76 1231</li>
            <li>BIC: 123</li>
            <li>Institut: SuperBank</li>
        </ul>
    </div>
</footer>
</body>
</html>
