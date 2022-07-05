<?php

$dataLable = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul"];
$datay = [258, 258, 290, 346, 312, 300, 298];
$datax = [-3, -2, -1, 0, 1, 2, 3];

//CARI DATA x2
$datax2 = [];
for ($i = 0; $i < count($datax); $i++) {
    $datax2[] = $datax[$i] * $datax[$i];
}

//CARI DATA x*y
$dataxy = [];
for ($i = 0; $i < count($datax); $i++) {
    $dataxy[] = $datax[$i] * $datay[$i];
}

//CARI DATA Y
$dataY = [];
for ($i = 0; $i < count($datax); $i++) {
    $dataY[] = round($a + ($b * $datax[$i]), 3);
}

//CARI DATA MAPE
$dataMAPE = [];
for ($i = 0; $i < count($dataY); $i++) {
    $dataMAPE[] = round((($dataY[$i] - $datay[$i]) / $datay[$i]) * 100, 3);
    if ($dataMAPE[$i] < 0) {
        $dataMAPE[$i] = $dataMAPE[$i] * -1;
    }
}

echo "<br>Lable<br>";
for ($i = 0; $i < count($dataLable); $i++) {
    echo $dataLable[$i] . "<br>";
}

echo "<br>Data-y<br>";
for ($i = 0; $i < count($datay); $i++) {
    echo $datay[$i] . "<br>";
}
echo  "SUM " . array_sum($datay) . "<br>";

echo "<br>Data-x<br>";
for ($i = 0; $i < count($datax); $i++) {
    echo $datax[$i] . "<br>";
}
echo  "SUM " . array_sum($datax) . "<br>";

echo "<br>Data-x2<br>";
for ($i = 0; $i < count($datax2); $i++) {
    echo $datax2[$i] . "<br>";
}
echo "SUM " . array_sum($datax2) . "<br>";

echo "<br>Data-xy<br>";
for ($i = 0; $i < count($dataxy); $i++) {
    echo $dataxy[$i] . "<br>";
}
echo "SUM " . array_sum($dataxy) . "<br>";

$a = array_sum($datay) / count($dataLable);
echo "<br>a : $a<br>";
$b = array_sum($dataxy) / array_sum($datax2);
echo "b : $b<br>";

echo "<br>Data-Y<br>";
for ($i = 0; $i < count($dataY); $i++) {
    echo $dataY[$i] . "<br>";
}
echo "SUM " . array_sum($dataY) . "<br>";

echo "<br>MAPE<br>";
for ($i = 0; $i < count($dataMAPE); $i++) {
    echo $dataMAPE[$i] . "<br>";
}
echo "SUM " . array_sum($dataMAPE) . "<br>";
echo "SUM/n " . round(array_sum($dataMAPE) / count($dataLable), 3) . "<br>";


$lastData = $datax[count($datax) - 1];
$nextBulan = [$lastData + 1, $lastData + 2, $lastData + 3];

$dataY_ = [];
for ($i = 0; $i < count($nextBulan); $i++) {
    $dataY_[] = round($a + ($b * $nextBulan[$i]), 3);
}

echo "<br>Data-Y_<br>";
for ($i = 0; $i < count($nextBulan); $i++) {
    echo $nextBulan[$i] . "_" . $dataY_[$i] . "<br>";
}
echo "SUM " . array_sum($dataY_) . "<br>";
