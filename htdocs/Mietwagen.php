<?php
session_start();
if (!isset($_SESSION['kundennummer'])) {
    header("Location: Login.php");
    die();
}
?>
<html lang="de">
<head>
    <title>Autohaus Nettmann</title>
    <link rel="stylesheet" href="css/frame.css">
    <style>
        .button-container {
            margin: 2em auto;
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
                <li><a href="Mietwagen.html">Mietwagen</a></li>
            </ul>
        </nav>
        <h1>Mietwagen</h1>
    </div>

    <img src="img/Nettmann_logo.png" alt="Nettmann Logo" class="nettmann-logo">
</header>


<p>Kundennummer: <?= $_SESSION['kundennummer'] ?></p>
<form action="MietwagenBeleg.php" method="post">
    <p>Welche Fahrzeugklasse bevorzugen Sie:</p>
    <label>
        <input type="radio" name="fahrzeugklasse" value="Kleinwagen">
        Kleinwagen
    </label>
    <br>
    <label>
        <input type="radio" name="fahrzeugklasse" value="Kompaktklasse">
        Kompaktklasse
    </label>
    <br>
    <label>
        <input type="radio" name="fahrzeugklasse" value="Familienwagen">
        Familienwagen
    </label>
    <br>
    <label>
        <input type="radio" name="fahrzeugklasse" value="Luxusklasse">
        Luxusklasse
    </label>

    <p>Welche Zusatzausstattung w&uuml;nschen Sie?</p>
    <label>
        <input type="checkbox" name="klimaanlage">
        Klimaanlage
    </label>
    <br>
    <label>
        <input type="checkbox" name="navigator">
        Navigator
    </label>
    <br>
    <label>
        <input type="checkbox" name="standheizung">
        Standheizung
    </label>
    <br><br>

    <label>
        Wo wollen Sie das Auto abholen:<br>
        <select name="abholort">
            <option value="nettmann">Autohaus Nettmann</option>
            <option value="ottomann">Autohaus Ottomann</option>
            <option value="testmann">Autohaus Testmann</option>
        </select>
    </label>

    <div class="button-container">
        <input type="reset" value="L&ouml;schen">
        <input type="submit" name="submit" value="Absenden">
    </div>
</form>

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
