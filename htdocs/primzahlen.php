<?php
$primes = [];
$primeCounter = 0;
$counter = 1;
$start = 71;
$end = $start + 99;
$numbers = range($start, $end);

// Loop over all numbers from 2 to the end, afterwards
// all non-prime numbers will be marked as false
for ($i = 2; $i <= $end; $i++) {
    // If the number is already marked as not prime, skip it
    if (isset($primes[$i]) && ! $primes[$i]) {
        continue;
    }

    // Mark all multiples of the current number as not prime
    for ($j = $i * 2; $j <= $end; $j += $i) {
        $primes[$j] = false;
    }

    // If the square of the current number is greater than
    // the end, we can stop the loop
    if ($i * $i > $end) {
        break;
    }
}

ksort($primes);

// Count the prime numbers
for ($i = $start; $i <= $end; $i++) {
    if (! isset($primes[$i])) {
        $primeCounter++;
    }
}

?>

<html lang="de">
<head>
    <title>Primzahlen</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding: 1em;
        }

        h1 {
            margin-bottom: 0.5em;
        }

        table, td {
            border: 1px solid black;
        }

        td {
            width: 40px;
            height: 40px;
            text-align: center;
        }

        .prime {
            background-color: #ecc16c;
        }

        .container {
            display: flex;
            column-gap: 1em;
            margin-top: 1em;
        }
    </style>
</head>
<body>
<h1>Hundert Zahlen</h1>
<table>
    <tbody>
    <?php for ($i = $start; $i <= $end; $i++): ?>
        <?php if ($counter % 10 == 1): ?>
            <tr>
        <?php endif; ?>

        <td class="<?= ! isset($primes[$i]) ? 'prime' : '' ?>"><?php echo $i; ?></td>

        <?php if ($counter % 10 == 0): ?>
            </tr>
        <?php endif; ?>

        <?php $counter++; ?>
    <?php endfor; ?>
    </tbody>
</table>

<div class="container">
    <table>
        <tbody>
        <tr>
            <td class="prime"></td>
        </tr>
        </tbody>
    </table>

    <p><?= $primeCounter ?> Primzahlen</p>
</div>

</body>
</html>
