<?php


$debug = true;
if ($debug) {
    echo "<br>";
}

$A1 = [3.50, 2, 5, 4, 2];
$A2 = [3.60, 3, 4, 1, 2];
$A3 = [3.70, 1, 5, 2, 2];
$A4 = [3.81, 2, 3, 4, 1];
$A5 = [3.55, 2, 4, 1, 1];
$BOBOT = [0.25, 0.15, 0.2, 0.3, 0.1];

if ($debug) {
    echo "Nilai A1";
    echo "<br>";
    for ($i = 0; $i < count($A1); $i++) {
        echo $A1[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai A2";
    echo "<br>";

    for ($i = 0; $i < count($A1); $i++) {
        echo $A2[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai A3";
    echo "<br>";

    for ($i = 0; $i < count($A1); $i++) {
        echo $A3[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai A4";
    echo "<br>";

    for ($i = 0; $i < count($A1); $i++) {
        echo $A4[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai A5";
    echo "<br>";

    for ($i = 0; $i < count($A1); $i++) {
        echo $A5[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "<br>";
    echo "Nilai BOBOT";
    echo "<br>";
    for ($i = 0; $i < count($A1); $i++) {
        echo $BOBOT[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    echo "<br>";
}

$MAX = [];
$MIN = [];

for ($i = 0; $i < count($A1); $i++) {
    $MAX[] = max($A1[$i], $A2[$i], $A3[$i], $A4[$i], $A5[$i]);
    $MIN[] = min($A1[$i], $A2[$i], $A3[$i], $A4[$i], $A5[$i]);
}

if ($debug) {

    echo "Nilai MAX";
    echo "<br>";
    for ($i = 0; $i < count($A1); $i++) {
        echo $MAX[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai MIN";
    echo "<br>";
    for ($i = 0; $i < count($A1); $i++) {
        echo $MIN[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
}

$R1 = [];
$R2 = [];
$R3 = [];
$R4 = [];
$R5 = [];

for ($i = 0; $i < count($A1); $i++) {
    $R1[] = $A1[$i] / $MAX[$i];
    $R2[] = $MIN[$i] / $A2[$i];
    $R3[] = $A3[$i] / $MAX[$i];
    $R4[] = $A4[$i] / $MAX[$i];
    $R5[] = $MIN[$i] / $A5[$i];
}

if ($debug) {
    echo "<br>";
    echo "LEVEL 1";
    echo "<br>";
    echo "Nilai R1";
    echo "<br>";
    for ($i = 0; $i < count($A1); $i++) {
        echo $R1[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai R2";
    echo "<br>";

    for ($i = 0; $i < count($A1); $i++) {
        echo $R2[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai R3";
    echo "<br>";

    for ($i = 0; $i < count($A1); $i++) {
        echo $R3[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai R4";
    echo "<br>";

    for ($i = 0; $i < count($A1); $i++) {
        echo $R4[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai R5";
    echo "<br>";

    for ($i = 0; $i < count($A1); $i++) {
        echo $R5[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "<br>";
}

$A1_V2 = [];
$A2_V2 = [];
$A3_V2 = [];
$A4_V2 = [];
$A5_V2 = [];

for ($i = 0; $i < count($A1); $i++) {
    $A1_V2[] = $R1[$i] * $BOBOT[$i];
    $A2_V2[] = $R2[$i] * $BOBOT[$i];
    $A3_V2[] = $R3[$i] * $BOBOT[$i];
    $A4_V2[] = $R4[$i] * $BOBOT[$i];
    $A5_V2[] = $R5[$i] * $BOBOT[$i];
}

if ($debug) {
    echo "LEVEL 2";
    echo "<br>";
    echo "Nilai A1_V2";
    echo "<br>";
    for ($i = 0; $i < count($A1); $i++) {
        echo $A1_V2[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai A2_V2";
    echo "<br>";
    for ($i = 0; $i < count($A1); $i++) {
        echo $A2_V2[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai A3_V2";
    echo "<br>";
    for ($i = 0; $i < count($A1); $i++) {
        echo $A3_V2[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai A4_V2";
    echo "<br>";
    for ($i = 0; $i < count($A1); $i++) {
        echo $A4_V2[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    echo "Nilai A5_V2";
    echo "<br>";
    for ($i = 0; $i < count($A1); $i++) {
        echo $A5_V2[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
}

$A1_V3 = array_sum($A1_V2);
$A2_V3 = array_sum($A2_V2);
$A3_V3 = array_sum($A3_V2);
$A4_V3 = array_sum($A4_V2);
$A5_V3 = array_sum($A5_V2);

if ($debug) {
    echo "<br>";
    echo "SUM A1_V3 : " . $A1_V3 . "<br>";
    echo "SUM A2_V3 : " . $A2_V3 . "<br>";
    echo "SUM A2_V3 : " . $A3_V3 . "<br>";
    echo "SUM A2_V3 : " . $A4_V3 . "<br>";
    echo "SUM A2_V3 : " . $A5_V3 . "<br>";
    echo "<br>";
    echo "<br>";
}


$res = [
    $A1_V3,
    $A2_V3,
    $A3_V3,
    $A4_V3,
    $A5_V3,
];

$finalRes = [];
$i = 1;
foreach ($res as $key => $values) {
    $max = max($res);
    $finalRes[] = $max . " rank is " . $i . "<br>";
    $keys = array_search($max, $res);
    unset($res[$keys]);
    if (sizeof($res) > 0)
        if (!in_array($max, $res))
            $i++;
}

if ($debug) {
    for ($i = 0; $i < count($finalRes); $i++) {
        echo $finalRes[$i];
    }
}
