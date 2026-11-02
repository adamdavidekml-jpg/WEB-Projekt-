<?php
// 1. Vytvoření proměnných se studentskými údaji
$jmeno = "Pavel Petr";
$vek = 17;
$trida = "2.I";
$vyska = 1.81;
$jeStudent = true;
$jazyk = "Java";
/*
   2. Proměnné obsahují různé datové typy.
   Tyto hodnoty následně zobrazíme na webové stránce.
*/
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Můj studentský profil</title>
</head>
<body>
    <h1>Můj studentský profil</h1>
    <!-- 3. Výpis údajů z PHP proměnných -->
    <p><strong>Jméno a příjmení:</strong> <?php echo $jmeno; ?></p>
    <p><strong>Věk:</strong> <?php echo $vek; ?> let</p>
    <p><strong>Třída:</strong> <?php echo $trida; ?></p>
    <p><strong>Výška:</strong> <?php echo $vyska; ?> m</p>
    <p><strong>Student:</strong> <?php echo $jeStudent ? "Ano" : "Ne"; ?></p>
    <p><strong>Oblíbený programovací jazyk:</strong> <?php echo $jazyk; ?></p>
    <h2>Datové typy</h2>
    <?php
    // Tohle vypíše hodnotu proměnné a její datový typ.
    echo "<pre>";
    var_dump($jmeno);
    var_dump($vek);
    var_dump($trida);
    var_dump($vyska);
    var_dump($jeStudent);
    var_dump($jazyk);
    echo "</pre>";
    ?>
</body>
</html>