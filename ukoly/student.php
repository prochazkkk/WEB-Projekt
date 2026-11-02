```php
<?php
// 1. Vytvoreni promennych
$jmeno = "Eliska Prochazkova";
$vek = 17;
$trida = "2. rocnik IT";
$vyska = 1.70;
$student = true;
$jazyk = "Java";

/*
Tato cast obsahuje udaje o studentovi.
Kazda promenna ma svuj datovy typ.
*/
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Studentsky profil</title>
</head>
<body>
    <h1>Můj studentský profil</h1>
    <p><strong>eliska</strong> <?php echo $jmeno; ?></p>
    <p><strong>17</strong> <?php echo $vek; ?></p>
    <p><strong>2 IT</strong> <?php echo $trida; ?></p>
    <p><strong>180</strong> <?php echo $vyska; ?> m</p>
    <p><strong></strong> <?php echo $student ? "Ano" : "Ne"; ?></p>
    <p><strong>java</strong> <?php echo $jazyk; ?></p>
    <h2>Datové typy</h2>
    <pre><?php
        var_dump($jmeno);
        var_dump($vek);
        var_dump($trida);
        var_dump($vyska);
        var_dump($student);
        var_dump($jazyk);
    ?></pre>
</body>
</html>