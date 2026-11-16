<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
?>

<?php
for ($i = 1; $i <= 8; $i++) {
    echo $i . "<br>";
}
?>

<?php
for ($i = 2; $i <= 20; $i+= 2) {
    echo $i . "<br>";
}
?>

<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>

<?php
$number = 7;
for ($i = 1; $i <= 10; $i++) {
    echo $number . "x" . $i . "=" . ($number * $i) . "<br>";
}
?>

<?php
$counter = 10;
while ($counter >= 1) {
    echo $counter . "<br>";
    $counter--;
}
echo "Hotovo!";
?>

<?php
$number = 8;
while ($number < 5) {
    echo "Cyklus while: " . $number . "<br>";
    $number++;
}
echo "Hotovo!";
?>

<?php
$i = 1;
while ($i <= 5) {
    echo "$i<br>";
    $i++;
}
?>