<?php

$dataLable = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul"];
$datay = [258, 258, 290, 346, 312, 300, 298];
$datax = [-3, -2, -1, 0, 1, 2, 3];
$nextCount = 5;

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

$a = array_sum($datay) / count($dataLable);
echo "<br>a : $a<br>";
$b = array_sum($dataxy) / array_sum($datax2);
echo "b : $b<br>";
//CARI DATA Y
$dataY = [];
for ($i = 0; $i < count($datax); $i++) {
    $dataY[] = round($a + ($b * $datax[$i]), 3);
}

//CARI DATA MAPE
$dataMAPE = [];
for ($i = 0; $i < count($dataY); $i++) {
    if ($datay[$i] > 0) {
        $dataMAPE[] = round((($datay[$i] - $dataY[$i]) / $datay[$i]) * 100, 3);
        if ($dataMAPE[$i] < 0) {
            $dataMAPE[$i] = $dataMAPE[$i] * -1;
        }
    } else {
        $dataMAPE[] = 0;
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
$nextLable = [];
$nextBulan = [];
for ($i = 0; $i < $nextCount; $i++) {
    $nextLable[] = "Data $i";
    $nextBulan[] = $lastData + $i + 1;
}

$dataY_ = [];
for ($i = 0; $i < count($nextBulan); $i++) {
    $dataY_[] = round($a + ($b * $nextBulan[$i]), 3);
}

echo "<br>Data-Y_<br>";
for ($i = 0; $i < count($nextBulan); $i++) {
    echo $nextBulan[$i] . "_" . $dataY_[$i] . "<br>";
}
echo "SUM " . array_sum($dataY_) . "<br>";

?>
<html>

<body>
    <table border="1">
        <tr>
            <td>y</td>
            <td>x</td>
            <td>xx</td>
            <td>xy</td>
            <td>Y</td>
            <td>MAPE</td>
        </tr>

        <?php
        for ($i = 0; $i < count($datay); $i++) {
        ?>
            <tr>
                <td><?php echo $datay[$i] ?></td>
                <td><?php echo $datax[$i] ?></td>
                <td><?php echo $datax2[$i] ?></td>
                <td><?php echo $dataxy[$i] ?></td>
                <td><?php echo $dataY[$i] ?></td>
                <td><?php echo $dataMAPE[$i] ?></td>
            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>