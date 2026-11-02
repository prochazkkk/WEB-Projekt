<?php
$studentName = "Jan Novák";
$test1 = 75;
$test2 = 90;
$test3 = 60;
if ($test1 < 0 || $test1 > 100 ||
    $test2 < 0 || $test2 > 100 ||
    $test3 < 0 || $test3 > 100) {
    echo "Neplatne bodove hodnoceni";
} else {
    $totalPoints = $test1 + $test2 + $test3;
    $average = $totalPoints / 3;
    $percentage = ($totalPoints / 300) * 100;
    if ($percentage >= 90) {
        $grade = 1;
        $evaluation = "Vyborny";
    } elseif ($percentage >= 75) {
        $grade = 2;
        $evaluation = "Chvalitebny";
    } elseif ($percentage >= 60) {
        $grade = 3;
        $evaluation = "Dobry";
    } elseif ($percentage >= 40) {
        $grade = 4;
        $evaluation = "Dostatecny";
    } else {
        $grade = 5;
        $evaluation = "Nedostatecny";
    }

    echo "<h1>Hodnoceni studenta</h1>";
    echo "Jmeno: $studentName <br>";
    echo "Test 1: $test1 bodu <br>";
    echo "Test 2: $test2 bodu <br>";
    echo "Test 3: $test3 bodu <br>";
    echo "Celkem bodu: $totalPoints <br>";
    echo "Prumer: $average <br>";
    echo "Uspešnost: $percentage % <br>";
    echo "Znamka: $grade <br>";
    echo "Slovni hodnoceni: $evaluation <br>";
    if ($grade <= 4) {
        echo "Student prospěl.";
    } else {
        echo "Bonusove ukoly.";
    }
}
?>
