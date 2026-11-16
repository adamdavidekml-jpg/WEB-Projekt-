<?php
echo "<h3>Úkol 1</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
echo "<h3>Úkol 1 (upraveno do 8)</h3>";
for ($i = 1; $i <= 8; $i++) {
    echo $i . "<br>";
}
echo "<h3>Úkol 2</h3>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}
echo "<h3>Úkol 2 (bonus)</h3>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
echo "<h3>Úkol 3</h3>";
$cislo = 7;
for ($i = 1; $i <= 10; $i++) {
    $vysledek = $cislo * $i;
    echo $cislo . " × " . $i . " = " . $vysledek . "<br>";
}
echo "<h3>Úkol 4</h3>";
$soucet = 0;
for ($i = 1; $i <= 100; $i++) {
    $soucet += $i;
}
echo $soucet;
$pocet = 10;
while ($pocet >= 1) {
    echo $pocet . "<br>";
    $pocet--;
}
echo "Hotovo!<br><br>";
$cislo2 = 8;
while ($cislo2 < 5) {
    echo "Výpis z while: $cislo2<br>";
}
do {
    echo "Výpis z do...while: $number<br>";
} while ($number < 5);
echo "<br>";
$i = 1;
while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}
?>