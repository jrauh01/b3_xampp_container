<?php
$abholorte = [
    'nettmann' => 'Autohaus Nettmann',
    'ottomann' => 'Autohaus Ottomann',
    'testmann' => 'Autohaus Testmann'
];

if (isset($_POST['submit'])) {
    // Read form data
    $kundennummer = $_POST['kundennummer'] ?? 'n/a';
    $fahrzeugklasse = $_POST['fahrzeugklasse'] ?? 'n/a';
    $klimaanlage = $_POST['klimaanlage'] ?? null;
    $navigator = $_POST['navigator'] ?? null;
    $standheizung = $_POST['standheizung'] ?? null;
    $abholort = $_POST['abholort'] ?? 'n/a';

} else {
    header("Location: ../Mietwagen.html");
    die();
}
?>

<html lang="de">
<head>
    <title>Autohaus Nettmann</title>
    <link rel="stylesheet" href="css/frame.css">
    <style>
        table, td {
            border: none;
        }

        td {
            vertical-align: top;
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
        <h1>Mietwagen - Kundenbeleg</h1>
    </div>

    <img src="img/Nettmann_logo.png" alt="Nettmann Logo" class="nettmann-logo">
</header>

<table>
    <tbody>
    <tr>
        <td>Kundennummer:</td>
        <td><?= $kundennummer ?></td>
    </tr>
    <tr>
        <td>Fahrzeugklasse:</td>
        <td><?= $fahrzeugklasse ?></td>
    </tr>
    <tr>
        <td>Zusatzausstattung:</td>
        <td>
            <?= !$klimaanlage && !$navigator && !$standheizung ? 'Keine Extras' : '' ?>
            <?= $klimaanlage ? 'Klimaanlage<br>' : '' ?>
            <?= $navigator ? 'Navigator<br>' : '' ?>
            <?= $standheizung ? 'Standheizung<br>' : '' ?>
        </td>
    </tr>
    <tr>
        <td>Abholort:</td>
        <td><?= $abholorte[$abholort] ?></td>
    </tbody>
</table>

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
