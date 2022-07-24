<?php

$dataLable = ["Jan20", "Feb20", "Mar20", "Apr20", "Mei20", "Jun20", "Jul20", "Ags20", "Sep20", "Okt20", "Nov20", "Des20", "Jan21", "Feb21", "Mar21"];
$dataxt = [10, 16, 12, 14, 12, 16, 15, 17, 10, 13, 15, 13, 12, 12, 14];
$rentang = 3; //3 atau 5

$datas1 = [];

echo "<br>";
for ($i = 0; $i < count($dataxt); $i++) {
    if ($i < $rentang - 1) {
        //echo "skip data"."<br>";
        $datas1[] = 0;
    } else {
        //echo $i . "-" . $dataxt[$i] . "<br>";
        if ($rentang == 3) {
            $datas1[] = round(($dataxt[$i - 2] + $dataxt[$i - 1] + $dataxt[$i]) / $rentang, 2);
        } else if ($rentang == 5) {
            $datas1[] = round(($dataxt[$i - 4] + $dataxt[$i - 3] + $dataxt[$i - 2] + $dataxt[$i - 1] + $dataxt[$i]) / $rentang, 2);
        }
    }
}

echo "<br>";
for ($i = 0; $i < count($datas1); $i++) {
    echo $i . "-" . $datas1[$i] . "<br>";
}

$datas2 = [];
echo "<br>";
for ($i = 0; $i < count($datas1); $i++) {
    if ($i < $rentang * 2 - 2) {
        //echo "skip data"."<br>";
        $datas2[] = 0;
    } else {
        //echo $i . "-" . $datas1[$i] . "<br>";
        if ($rentang == 3) {
            $datas2[] = round(($datas1[$i - 2] + $datas1[$i - 1] + $datas1[$i]) / $rentang, 2);
        } else if ($rentang == 5) {
            $datas2[] = round(($datas1[$i - 4] + $datas1[$i - 3] + $datas1[$i - 2] + $datas1[$i - 1] + $datas1[$i]) / $rentang, 2);
        }
    }
}

echo "<br>";
for ($i = 0; $i < count($datas2); $i++) {
    echo $i . "-" . $datas2[$i] . "<br>";
}

echo "<br>";
$dataat = [];
for ($i = 0; $i < count($datas2); $i++) {
    if ($i < $rentang * 2 - 2) {
        //echo "skip data"."<br>";
        $dataat[] = 0;
    } else {
        //echo $i . "-" . $datas2[$i] . "<br>";
        $dataat[] = (2 * $datas1[$i]) - $datas2[$i];
    }
}

echo "<br>";
for ($i = 0; $i < count($dataat); $i++) {
    echo $i . "-" . $dataat[$i] . "<br>";
}

echo "<br>";
$databt = [];
for ($i = 0; $i < count($datas2); $i++) {
    if ($i < $rentang * 2 - 2) {
        $databt[] = 0;
    } else {
        $databt[] = ((2 / ($rentang - 1)) * ($datas1[$i] - $datas2[$i]));
    }
}

echo "<br>";
for ($i = 0; $i < count($databt); $i++) {
    echo $i . "-" . $databt[$i] . "<br>";
}

echo "<br>";
$dataft = [];
for ($i = 0; $i < count($datas2); $i++) {
    if ($i < $rentang * 2 - 2 + 1) {
        $dataft[] = 0;
    } else {
        $dataft[] = $dataat[$i - 1] + ($databt[$i - 1] * 1);
    }
}

echo "<br>";
for ($i = 0; $i < count($dataft); $i++) {
    echo $i . "-" . $dataft[$i] . "<br>";
}

echo "<br>";
$datamape = [];
for ($i = 0; $i < count($datas2); $i++) {
    if ($i < $rentang * 2 - 2 + 1) {
        $datamape[] = 0;
    } else {
        $datamape[] = round((($dataxt[$i] - $dataft[$i]) / $dataxt[$i]) * 100, 2);
        if ($datamape[$i] < 0) {
            $datamape[$i] = $datamape[$i] * -1;
        }
    }
}

echo "<br>";
for ($i = 0; $i < count($datamape); $i++) {
    echo $i . "-" . $datamape[$i] . "<br>";
}

echo "<br>";

echo "<br>";
$lastat = $dataat[count($dataat) - 1];
echo $lastat;
echo "<br>";
$lastbt = $databt[count($databt) - 1];
echo $lastbt;

echo "<br>";
$peramalan = 3;
$stok = [];
for ($i = 0; $i < $peramalan; $i++) {
    $stok[] = $lastat + ($lastbt * ($i + 1));
    echo $i + 1;
}
echo "<br>";
for ($i = 0; $i < count($stok); $i++) {
    echo $i . "-" . $stok[$i] . "<br>";
}

echo "<br>";

$ratamape = 0;
$count = 0;
for ($i = 0; $i < count($datas2); $i++) {
    if ($i < $rentang * 2 - 2 + 1) {
    } else {
        $count++;
        $ratamape = $ratamape + $datamape[$i];
    }
}

echo $count;
echo "<br>";
echo $ratamape;
echo "<br>";
$ratamape = $ratamape / $count;
echo $ratamape;

?>
<html>

<body>
    <table border="1">
        <tr>
            <td>t</td>
            <td>xt</td>
            <td>s1</td>
            <td>s2</td>
            <td>at</td>
            <td>bt</td>
            <td>ft</td>
            <td>mape</td>
        </tr>

        <?php
        for ($i = 0; $i < count($dataxt); $i++) {
        ?>
            <tr>
                <td><?php echo $dataLable[$i] ?></td>
                <td><?php echo $dataxt[$i] ?></td>
                <td><?php echo $datas1[$i] ?></td>
                <td><?php echo $datas2[$i] ?></td>
                <td><?php echo $dataat[$i] ?></td>
                <td><?php echo $databt[$i] ?></td>
                <td><?php echo $dataft[$i] ?></td>
                <td><?php echo $datamape[$i] ?></td>
            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>