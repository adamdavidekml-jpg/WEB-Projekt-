<?php
echo "Adam Davídek"
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
?>