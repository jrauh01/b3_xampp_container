<?php
$start = 29;
$numbers = range($start, $start + 99);
$counter = 1;
?>

<html lang="de">
<head>
    <title>100 Zahlen</title>
    <style>
        table, td {
            border: 1px solid black;
        }

        td {
            width: 40px;
            height: 40px;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Hundert Zahlen</h1>
<table>
    <tbody>
    <?php foreach ($numbers as $number): ?>
        <?php if ($counter % 10 == 1): ?>
            <tr>
        <?php endif; ?>

        <td><?php echo $number; ?></td>

        <?php if ($counter % 10 == 0): ?>
            </tr>
        <?php endif; ?>

        <?php $counter++; ?>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
