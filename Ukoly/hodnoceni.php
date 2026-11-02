<?php
$studentName = "Jan Novák";
$test1 = 75;
$test2 = 90;
$test3 = 60;
$platne = true;
$testy = [$test1, $test2, $test3];
foreach ($testy as $body) {
    if ($body < 0 || $body > 100) {
        $platne = false;
    }
}
if ($platne) {
    $total = $test1 + $test2 + $test3;
    $average = $total / 3;
    $procenta = ($total / 300) * 100;

    if ($procenta >= 90) {
        $znamka = 1;
        $slovni = "výborný";
    } elseif ($procenta >= 75) {
        $znamka = 2;
        $slovni = "chvalitebný";
    } elseif ($procenta >= 60) {
        $znamka = 3;
        $slovni = "dobrý";
    } elseif ($procenta >= 40) {
        $znamka = 4;
        $slovni = "dostatečný";
    } else {
        $znamka = 5;
        $slovni = "nedostatečný";
    }
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<title>Hodnocení studenta</title>
</head>
<body>
<h1>Hodnocení studenta</h1>
<?php
echo "<p><strong>Student:</strong> $studentName</p>";
if (!$platne) {
    echo "<p style='color:red;'><strong>Chyba:</strong> neplatné bodové hodnocení. ";
    echo "Každý test musí mít 0 až 100 bodů.</p>";
    echo "<p>Test 1: $test1 b., Test 2: $test2 b., Test 3: $test3 b.</p>";
} else {
    echo "<ul>";
    echo "<li>Test 1: $test1 bodů</li>";
    echo "<li>Test 2: $test2 bodů</li>";
    echo "<li>Test 3: $test3 bodů</li>";
    echo "</ul>";
    echo "<p>Celkem bodů: <strong>$total</strong> z 300</p>";
    echo "<p>Průměr bodů: <strong>" . number_format($average, 2, ',', ' ') . "</strong></p>";
    echo "<p>Procentuální úspěšnost: <strong>" . number_format($procenta, 2, ',', ' ') . " %</strong></p>";
    echo "<p>Známka: <strong>$znamka</strong> ($slovni)</p>";
    if ($znamka >= 1 && $znamka <= 4) {
        echo "<p style='color:green;'>Student prospěl.</p>";
    } else {
        echo "<p style='color:red;'>Bonusové úkoly</p>";
    }
}
?>
</body>
</html>