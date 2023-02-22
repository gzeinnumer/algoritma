<?php


$debug = true;
if ($debug) {
    echo "<br>";
}

$A1 = [10, 8, 10, 8];
$A2 = [8, 10, 8, 6];
$BOBOT = [1, 1, 2, 2];


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
    echo "<br>";
    echo "Nilai BOBOT";
    echo "<br>";
    for ($i = 0; $i < count($A1); $i++) {
        echo $BOBOT[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
}

$MAX = [];

for ($i = 0; $i < count($A1); $i++) {
    $MAX[] = max($A1[$i], $A2[$i]);
}

if ($debug) {

    echo "Nilai MAX";
    echo "<br>";
    for ($i = 0; $i < count($A1); $i++) {
        echo $MAX[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
}

$R1 = [];
$R2 = [];

for ($i = 0; $i < count($A1); $i++) {
    $R1[] = $A1[$i] / $MAX[$i];
    $R2[] = $A2[$i] / $MAX[$i];
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
    echo "<br>";
}


$A1_V2 = [];
$A2_V2 = [];

for ($i = 0; $i < count($A1); $i++) {
    $A1_V2[] = $R1[$i] * $BOBOT[$i];
    $A2_V2[] = $R2[$i] * $BOBOT[$i];
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
}

$A1_V3 = array_sum($A1_V2);
$A2_V3 = array_sum($A2_V2);

if ($debug) {
    echo "<br>";
    echo "SUM A1_V3 : " . $A1_V3 . "<br>";
    echo "SUM A2_V3 : " . $A2_V3 . "<br>";
    echo "<br>";
    echo "<br>";
}


$res = [
    $A1_V3,
    $A2_V3,
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

for ($i = 0; $i < count($finalRes); $i++) {
    echo $finalRes[$i];
}
