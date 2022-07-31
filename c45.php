<?php
$mp1 = [
    'Jalan Kaki', //0
    'Sepeda', //1
    'Sepeda Motor'
]; //2
$mp2 = [
    'SD / sederajat', //0
    'SMP / sederajat', //1
    'SMA / sederajat'
];  //2
$mp3 = [
    'Petani', //0
    'Wiraswasta', //1
    'Sudah Meninggal'
]; //2
$mp4 = [
    'SD / sederajat', //0
    'SMP / sederajat', //1
    'SMA / sederajat'
]; //2
$mp5 = [
    'Petani', //0
    'PNS/TNI/POLRI', //1
    'Tidak bekerja'
]; //2
$mp6 = [
    'Kurang dari Rp. 500,000', //0
    'Rp. 1,000,000 - Rp. 1,999,999', //1
    'Rp. 2,000,000 - Rp. 4,999,999', //2
    'Rp. 500,000 - Rp. 999,999', //3
    'Tidak Berpenghasilan'
]; //4

$section = [
    'Disiplin', //0
    'Tidak Disipilin' //1
];

$data = [];

//1
$d = new stdClass();
$d->nama = 'ADITYA PUTRA ALMANDA';
$d->p1 = $mp1[1];
$d->p2 = $mp2[2];
$d->p3 = $mp3[1];
$d->p4 = $mp4[2];
$d->p5 = $mp5[2];
$d->p6 = $mp6[1];
$d->p7 = $section[1];
$data[] = $d;

//2
$d = new stdClass();
$d->nama = 'ADZIN MUHAMMAD ABIYYU';
$d->p1 = $mp1[0];
$d->p2 = $mp2[0];
$d->p3 = $mp3[0];
$d->p4 = $mp4[0];
$d->p5 = $mp5[2];
$d->p6 = $mp6[3];
$d->p7 = $section[0];
$data[] = $d;

//3
$d = new stdClass();
$d->nama = 'Agil Kalsa Putra';
$d->p1 = $mp1[2];
$d->p2 = $mp2[0];
$d->p3 = $mp3[0];
$d->p4 = $mp4[0];
$d->p5 = $mp5[1];
$d->p6 = $mp6[2];
$d->p7 = $section[1];
$data[] = $d;

//4
$d = new stdClass();
$d->nama = 'PARNO RANDI';
$d->p1 = $mp1[0];
$d->p2 = $mp2[0];
$d->p3 = $mp3[0];
$d->p4 = $mp4[0];
$d->p5 = $mp5[0];
$d->p6 = $mp6[3];
$d->p7 = $section[1];
$data[] = $d;

//5
$d = new stdClass();
$d->nama = 'REFALDA RAMZI';
$d->p1 = $mp1[0];
$d->p2 = $mp2[2];
$d->p3 = $mp3[2];
$d->p4 = $mp4[2];
$d->p5 = $mp5[2];
$d->p6 = $mp6[4];
$d->p7 = $section[0];
$data[] = $d;

//6
$d = new stdClass();
$d->nama = 'PUTRI AMELLIZA';
$d->p1 = $mp1[0];
$d->p2 = $mp2[0];
$d->p3 = $mp3[0];
$d->p4 = $mp4[1];
$d->p5 = $mp5[0];
$d->p6 = $mp6[4];
$d->p7 = $section[0];
$data[] = $d;

//7
$d = new stdClass();
$d->nama = 'PUTRI RENO PRATAMA';
$d->p1 = $mp1[2];
$d->p2 = $mp2[2];
$d->p3 = $mp3[1];
$d->p4 = $mp4[2];
$d->p5 = $mp5[1];
$d->p6 = $mp6[3];
$d->p7 = $section[0];
$data[] = $d;

//8
$d = new stdClass();
$d->nama = 'TIARA EKA KEMBARA';
$d->p1 = $mp1[2];
$d->p2 = $mp2[0];
$d->p3 = $mp3[0];
$d->p4 = $mp4[1];
$d->p5 = $mp5[2];
$d->p6 = $mp6[3];
$d->p7 = $section[1];
$data[] = $d;

//9
$d = new stdClass();
$d->nama = 'MELSI AGUSNI';
$d->p1 = $mp1[1];
$d->p2 = $mp2[0];
$d->p3 = $mp3[0];
$d->p4 = $mp4[0];
$d->p5 = $mp5[2];
$d->p6 = $mp6[0];
$d->p7 = $section[1];
$data[] = $d;

//10
$d = new stdClass();
$d->nama = 'RAHMI WIRDA YANTI';
$d->p1 = $mp1[2];
$d->p2 = $mp2[2];
$d->p3 = $mp3[2];
$d->p4 = $mp4[2];
$d->p5 = $mp5[0];
$d->p6 = $mp6[0];
$d->p7 = $section[1];
$data[] = $d;

//11
$d = new stdClass();
$d->nama = 'REGI ASIRGA DARLIS';
$d->p1 = $mp1[0];
$d->p2 = $mp2[1];
$d->p3 = $mp3[0];
$d->p4 = $mp4[1];
$d->p5 = $mp5[0];
$d->p6 = $mp6[0];
$d->p7 = $section[0];
$data[] = $d;

//12
$d = new stdClass();
$d->nama = 'REGO FITRA AGUS';
$d->p1 = $mp1[0];
$d->p2 = $mp2[1];
$d->p3 = $mp3[0];
$d->p4 = $mp4[1];
$d->p5 = $mp5[0];
$d->p6 = $mp6[2];
$d->p7 = $section[0];
$data[] = $d;

//13
$d = new stdClass();
$d->nama = 'M. IQBAL';
$d->p1 = $mp1[2];
$d->p2 = $mp2[1];
$d->p3 = $mp3[0];
$d->p4 = $mp4[0];
$d->p5 = $mp5[0];
$d->p6 = $mp6[1];
$d->p7 = $section[1];
$data[] = $d;
$countKel = 1;

$res_level1 = [];
$e = new stdClass();
$e->l1_td1 = "Total";
$e->l1_td2 = "";
$e->l1_td3 = count($data);
$e->l1_td4 = array_count_values(array_column($data, 'p7'))[$section[0]];
$e->l1_td5 = array_count_values(array_column($data, 'p7'))[$section[1]];

$nilai1 = $e->l1_td4;
$nilai2 = $e->l1_td5;
$total = $e->l1_td3;
$atribut1 = (- ($nilai1 / $total) * (log(($nilai1 / $total), 2)));
$atribut2 = (- ($nilai2 / $total) * (log(($nilai2 / $total), 2)));
$atribut1 = is_nan($atribut1) ? 0 : $atribut1;
$atribut2 = is_nan($atribut2) ? 0 : $atribut2;
$entropy = $atribut1 + $atribut2;
$e->l1_td6 = $entropy;

$e->l1_td7 = "";
$e->l1_td8 = "";
$e->l1_td9 = "";

$res_level1[] = $e;

//MP1
$e = new stdClass();
$e->l1_td1 = "Alat Transportasi";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = "";
$e->l1_td8 = "";
$e->l1_td9 = "";
// $td8 = 0;
$res_level1[] = $e;
$gainPerSub = [];

for ($i = 0; $i < count($mp1); $i++) {
    $c = $mp1[$i];

    $e = new stdClass();
    $e->l1_td1 = "";
    $e->l1_td2 = $c;
    $e->l1_td3 = array_count_values(array_column($data, 'p1'))[$mp1[$i]];

    $temp = [];
    for ($j = 0; $j < count($data); $j++) {
        if ($data[$j]->p1 == $mp1[$i]) {
            $temp[] = $data[$j];
        }
    }
    $e->l1_td4 = isset(array_count_values(array_column($temp, 'p7'))[$section[0]]) ?  array_count_values(array_column($temp, 'p7'))[$section[0]] : "0";
    $e->l1_td5 = isset(array_count_values(array_column($temp, 'p7'))[$section[1]]) ? array_count_values(array_column($temp, 'p7'))[$section[1]] : "0";

    $nilai1 = $e->l1_td4;
    $nilai2 = $e->l1_td5;
    $total = $e->l1_td3;
    $atribut1 = (- ($nilai1 / $total) * (log(($nilai1 / $total), 2)));
    $atribut2 = (- ($nilai2 / $total) * (log(($nilai2 / $total), 2)));
    $atribut1 = is_nan($atribut1) ? 0 : $atribut1;
    $atribut2 = is_nan($atribut2) ? 0 : $atribut2;
    $entropy = $atribut1 + $atribut2;
    $e->l1_td6 = $entropy;

    $e->l1_td7 = "";
    $temp = (($e->l1_td3 / $res_level1[0]->l1_td3) * $e->l1_td6);
    if ($temp == "-0") {
        $e->l1_td8 = "0";
    } else {
        $e->l1_td8 = $temp;
    }
    $gainPerSub[] = $e->l1_td8;
    // $td8 = $td8 + $e->l1_td8;
    $e->l1_td9 = $countKel;
    $res_level1[] = $e;
}

$resGainPerSub = 0;

for ($i = 0; $i < count($gainPerSub); $i++) {
    if ($i == 0) {
        $resGainPerSub = $gainPerSub[$i];
    } else {

        $toCount = $gainPerSub[$i];
        $resGainPerSub = $resGainPerSub - $toCount;
    }
}

$e = new stdClass();
$e->l1_td1 = "";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = $res_level1[0]->l1_td6 - ($resGainPerSub);
$e->l1_td8 = "";
$e->l1_td9 = $countKel;
$res_level1[] = $e;
$countKel++;

//MP2
$e = new stdClass();
$e->l1_td1 = "Pendidikan Ayah";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = "";
$e->l1_td8 = "";
$e->l1_td9 = "";
// $td8 = 0;
$res_level1[] = $e;
$gainPerSub = [];

for ($i = 0; $i < count($mp2); $i++) {
    $c = $mp2[$i];

    $e = new stdClass();
    $e->l1_td1 = "";
    $e->l1_td2 = $c;
    $e->l1_td3 = array_count_values(array_column($data, 'p2'))[$mp2[$i]];

    $temp = [];
    for ($j = 0; $j < count($data); $j++) {
        if ($data[$j]->p2 == $mp2[$i]) {
            $temp[] = $data[$j];
        }
    }
    $e->l1_td4 = isset(array_count_values(array_column($temp, 'p7'))[$section[0]]) ?  array_count_values(array_column($temp, 'p7'))[$section[0]] : "0";
    $e->l1_td5 = isset(array_count_values(array_column($temp, 'p7'))[$section[1]]) ? array_count_values(array_column($temp, 'p7'))[$section[1]] : "0";

    $nilai1 = $e->l1_td4;
    $nilai2 = $e->l1_td5;
    $total = $e->l1_td3;
    $atribut1 = (- ($nilai1 / $total) * (log(($nilai1 / $total), 2)));
    $atribut2 = (- ($nilai2 / $total) * (log(($nilai2 / $total), 2)));
    $atribut1 = is_nan($atribut1) ? 0 : $atribut1;
    $atribut2 = is_nan($atribut2) ? 0 : $atribut2;
    $entropy = $atribut1 + $atribut2;
    $e->l1_td6 = $entropy;

    $e->l1_td7 = "";
    $temp = (($e->l1_td3 / $res_level1[0]->l1_td3) * $e->l1_td6);
    if ($temp == "-0") {
        $e->l1_td8 = "0";
    } else {
        $e->l1_td8 = $temp;
    }
    $gainPerSub[] = $e->l1_td8;
    // $td8 = $td8 + $e->l1_td8;
    $e->l1_td9 = $countKel;
    $res_level1[] = $e;
}

$resGainPerSub = 0;

for ($i = 0; $i < count($gainPerSub); $i++) {
    if ($i == 0) {
        $resGainPerSub = $gainPerSub[$i];
    } else {

        $toCount = $gainPerSub[$i];
        $resGainPerSub = $resGainPerSub - $toCount;
    }
}

$e = new stdClass();
$e->l1_td1 = "";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = $res_level1[0]->l1_td6 - ($resGainPerSub);
$e->l1_td8 = "";
$e->l1_td9 = $countKel;
$res_level1[] = $e;

$countKel++;

//MP3
$e = new stdClass();
$e->l1_td1 = "Pekerjaan Ayah";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = "";
$e->l1_td8 = "";
$e->l1_td9 = "";
$res_level1[] = $e;
$gainPerSub = [];

for ($i = 0; $i < count($mp3); $i++) {
    $c = $mp3[$i];

    $e = new stdClass();
    $e->l1_td1 = "";
    $e->l1_td2 = $c;
    $e->l1_td3 = array_count_values(array_column($data, 'p3'))[$mp3[$i]];

    $temp = [];
    for ($j = 0; $j < count($data); $j++) {
        if ($data[$j]->p3 == $mp3[$i]) {
            $temp[] = $data[$j];
        }
    }
    $e->l1_td4 = isset(array_count_values(array_column($temp, 'p7'))[$section[0]]) ?  array_count_values(array_column($temp, 'p7'))[$section[0]] : "0";
    $e->l1_td5 = isset(array_count_values(array_column($temp, 'p7'))[$section[1]]) ? array_count_values(array_column($temp, 'p7'))[$section[1]] : "0";

    $nilai1 = $e->l1_td4;
    $nilai2 = $e->l1_td5;
    $total = $e->l1_td3;
    $atribut1 = (- ($nilai1 / $total) * (log(($nilai1 / $total), 2)));
    $atribut2 = (- ($nilai2 / $total) * (log(($nilai2 / $total), 2)));
    $atribut1 = is_nan($atribut1) ? 0 : $atribut1;
    $atribut2 = is_nan($atribut2) ? 0 : $atribut2;
    $entropy = $atribut1 + $atribut2;
    $e->l1_td6 = $entropy;

    $e->l1_td7 = "";
    $temp = (($e->l1_td3 / $res_level1[0]->l1_td3) * $e->l1_td6);
    if ($temp == "-0") {
        $e->l1_td8 = "0";
    } else {
        $e->l1_td8 = $temp;
    }
    $gainPerSub[] = $e->l1_td8;
    $e->l1_td9 = $countKel;
    $res_level1[] = $e;
}

$resGainPerSub = 0;

for ($i = 0; $i < count($gainPerSub); $i++) {
    if ($i == 0) {
        $resGainPerSub = $gainPerSub[$i];
    } else {

        $toCount = $gainPerSub[$i];
        $resGainPerSub = $resGainPerSub - $toCount;
    }
}

$e = new stdClass();
$e->l1_td1 = "";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = $res_level1[0]->l1_td6 - ($resGainPerSub);
$e->l1_td8 = "";
$e->l1_td9 = $countKel;
$res_level1[] = $e;

$countKel++;

//MP4
$e = new stdClass();
$e->l1_td1 = "Pendidikan Ibu";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = "";
$e->l1_td8 = "";
$e->l1_td9 = "";
// $td8 = 0;
$res_level1[] = $e;
$gainPerSub = [];

for ($i = 0; $i < count($mp4); $i++) {
    $c = $mp4[$i];

    $e = new stdClass();
    $e->l1_td1 = "";
    $e->l1_td2 = $c;
    $e->l1_td3 = array_count_values(array_column($data, 'p4'))[$mp4[$i]];

    $temp = [];
    for ($j = 0; $j < count($data); $j++) {
        if ($data[$j]->p4 == $mp4[$i]) {
            $temp[] = $data[$j];
        }
    }
    $e->l1_td4 = isset(array_count_values(array_column($temp, 'p7'))[$section[0]]) ?  array_count_values(array_column($temp, 'p7'))[$section[0]] : "0";
    $e->l1_td5 = isset(array_count_values(array_column($temp, 'p7'))[$section[1]]) ? array_count_values(array_column($temp, 'p7'))[$section[1]] : "0";

    $nilai1 = $e->l1_td4;
    $nilai2 = $e->l1_td5;
    $total = $e->l1_td3;
    $atribut1 = (- ($nilai1 / $total) * (log(($nilai1 / $total), 2)));
    $atribut2 = (- ($nilai2 / $total) * (log(($nilai2 / $total), 2)));
    $atribut1 = is_nan($atribut1) ? 0 : $atribut1;
    $atribut2 = is_nan($atribut2) ? 0 : $atribut2;
    $entropy = $atribut1 + $atribut2;
    $e->l1_td6 = $entropy;

    $e->l1_td7 = "";
    $temp = (($e->l1_td3 / $res_level1[0]->l1_td3) * $e->l1_td6);
    if ($temp == "-0") {
        $e->l1_td8 = "0";
    } else {
        $e->l1_td8 = $temp;
    }
    $gainPerSub[] = $e->l1_td8;
    // $td8 = $td8 + $e->l1_td8;
    $e->l1_td9 = $countKel;
    $res_level1[] = $e;
}

$resGainPerSub = 0;

for ($i = 0; $i < count($gainPerSub); $i++) {
    if ($i == 0) {
        $resGainPerSub = $gainPerSub[$i];
    } else {

        $toCount = $gainPerSub[$i];
        $resGainPerSub = $resGainPerSub - $toCount;
    }
}

$e = new stdClass();
$e->l1_td1 = "";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = $res_level1[0]->l1_td6 - ($resGainPerSub);
$e->l1_td8 = "";
$e->l1_td9 = $countKel;
$res_level1[] = $e;
$countKel++;

//MP5
$e = new stdClass();
$e->l1_td1 = "Pekerjaan Ibu";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = "";
$e->l1_td8 = "";
$e->l1_td9 = "";
$res_level1[] = $e;
$gainPerSub = [];

for ($i = 0; $i < count($mp5); $i++) {
    $c = $mp5[$i];

    $e = new stdClass();
    $e->l1_td1 = "";
    $e->l1_td2 = $c;
    $e->l1_td3 = array_count_values(array_column($data, 'p5'))[$mp5[$i]];

    $temp = [];
    for ($j = 0; $j < count($data); $j++) {
        if ($data[$j]->p5 == $mp5[$i]) {
            $temp[] = $data[$j];
        }
    }
    $e->l1_td4 = isset(array_count_values(array_column($temp, 'p7'))[$section[0]]) ?  array_count_values(array_column($temp, 'p7'))[$section[0]] : "0";
    $e->l1_td5 = isset(array_count_values(array_column($temp, 'p7'))[$section[1]]) ? array_count_values(array_column($temp, 'p7'))[$section[1]] : "0";

    $nilai1 = $e->l1_td4;
    $nilai2 = $e->l1_td5;
    $total = $e->l1_td3;
    $atribut1 = (- ($nilai1 / $total) * (log(($nilai1 / $total), 2)));
    $atribut2 = (- ($nilai2 / $total) * (log(($nilai2 / $total), 2)));
    $atribut1 = is_nan($atribut1) ? 0 : $atribut1;
    $atribut2 = is_nan($atribut2) ? 0 : $atribut2;
    $entropy = $atribut1 + $atribut2;
    $e->l1_td6 = $entropy;

    $e->l1_td7 = "";
    $temp = (($e->l1_td3 / $res_level1[0]->l1_td3) * $e->l1_td6);
    if ($temp == "-0") {
        $e->l1_td8 = "0";
    } else {
        $e->l1_td8 = $temp;
    }
    $gainPerSub[] = $e->l1_td8;
    $e->l1_td9 = $countKel;
    $res_level1[] = $e;
}

$resGainPerSub = 0;

for ($i = 0; $i < count($gainPerSub); $i++) {
    if ($i == 0) {
        $resGainPerSub = $gainPerSub[$i];
    } else {

        $toCount = $gainPerSub[$i];
        $resGainPerSub = $resGainPerSub - $toCount;
    }
}

$e = new stdClass();
$e->l1_td1 = "";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = $res_level1[0]->l1_td6 - ($resGainPerSub);
$e->l1_td8 = "";
$e->l1_td9 = $countKel;
$res_level1[] = $e;
$countKel++;

//MP6
$e = new stdClass();
$e->l1_td1 = "Penghailan Orangtua";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = "";
$e->l1_td8 = "";
$e->l1_td9 = "";
// $td8 = 0;
$res_level1[] = $e;
$gainPerSub = [];

for ($i = 0; $i < count($mp6); $i++) {
    $c = $mp6[$i];

    $e = new stdClass();
    $e->l1_td1 = "";
    $e->l1_td2 = $c;
    $e->l1_td3 = array_count_values(array_column($data, 'p6'))[$mp6[$i]];

    $temp = [];
    for ($j = 0; $j < count($data); $j++) {
        if ($data[$j]->p6 == $mp6[$i]) {
            $temp[] = $data[$j];
        }
    }
    $e->l1_td4 = isset(array_count_values(array_column($temp, 'p7'))[$section[0]]) ?  array_count_values(array_column($temp, 'p7'))[$section[0]] : "0";
    $e->l1_td5 = isset(array_count_values(array_column($temp, 'p7'))[$section[1]]) ? array_count_values(array_column($temp, 'p7'))[$section[1]] : "0";

    $nilai1 = $e->l1_td4;
    $nilai2 = $e->l1_td5;
    $total = $e->l1_td3;
    $atribut1 = (- ($nilai1 / $total) * (log(($nilai1 / $total), 2)));
    $atribut2 = (- ($nilai2 / $total) * (log(($nilai2 / $total), 2)));
    $atribut1 = is_nan($atribut1) ? 0 : $atribut1;
    $atribut2 = is_nan($atribut2) ? 0 : $atribut2;
    $entropy = $atribut1 + $atribut2;
    $e->l1_td6 = $entropy;

    $e->l1_td7 = "";
    $temp = (($e->l1_td3 / $res_level1[0]->l1_td3) * $e->l1_td6);
    if ($temp == "-0") {
        $e->l1_td8 = "0";
    } else {
        $e->l1_td8 = $temp;
    }
    $gainPerSub[] = $e->l1_td8;
    $e->l1_td9 = $countKel;
    $res_level1[] = $e;
}

$resGainPerSub = 0;

for ($i = 0; $i < count($gainPerSub); $i++) {
    if ($i == 0) {
        $resGainPerSub = $gainPerSub[$i];
    } else {

        $toCount = $gainPerSub[$i];
        $resGainPerSub = $resGainPerSub - $toCount;
    }
}

$e = new stdClass();
$e->l1_td1 = "";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = $res_level1[0]->l1_td6 - ($resGainPerSub);
$e->l1_td8 = "";
$e->l1_td9 = $countKel;
$res_level1[] = $e;
$countKel++;


//res_level2 
$json = '
[
   [
      [
         {
            "l1_td1":"1",
            "l1_td2":"1",
            "l1_td3":"1",
            "l1_td4":"1",
            "l1_td5":"1",
            "l1_td6":"1",
            "l1_td7":"1",
            "l1_td8":"1",
            "l1_td9":"1"
         },
         {
            "l1_td1":"2",
            "l1_td2":"2",
            "l1_td3":"2",
            "l1_td4":"2",
            "l1_td5":"2",
            "l1_td6":"2",
            "l1_td7":"2",
            "l1_td8":"2",
            "l1_td9":"2"
         }
      ],
      [
         {
            "l1_td1":"3",
            "l1_td2":"3",
            "l1_td3":"3",
            "l1_td4":"3",
            "l1_td5":"3",
            "l1_td6":"3",
            "l1_td7":"3",
            "l1_td8":"3",
            "l1_td9":"3"
         }
      ]
   ],
   [
      [
         {
            "l1_td1":"4",
            "l1_td2":"4",
            "l1_td3":"4",
            "l1_td4":"4",
            "l1_td5":"4",
            "l1_td6":"4",
            "l1_td7":"4",
            "l1_td8":"4",
            "l1_td9":"4"
         },
         {
            "l1_td1":"5",
            "l1_td2":"5",
            "l1_td3":"5",
            "l1_td4":"5",
            "l1_td5":"5",
            "l1_td6":"5",
            "l1_td7":"5",
            "l1_td8":"5",
            "l1_td9":"5"
         }
      ],
      [
         {
            "l1_td1":"6",
            "l1_td2":"6",
            "l1_td3":"6",
            "l1_td4":"6",
            "l1_td5":"6",
            "l1_td6":"6",
            "l1_td7":"6",
            "l1_td8":"6",
            "l1_td9":"6"
         }
      ],
      [
         {
            "l1_td1":"7",
            "l1_td2":"7",
            "l1_td3":"7",
            "l1_td4":"7",
            "l1_td5":"7",
            "l1_td6":"7",
            "l1_td7":"7",
            "l1_td8":"7",
            "l1_td9":"7"
         }
      ]
   ]
]
';

$res_level2 = json_decode($json);

$res_level2 = [];

//LOOP-3 FOR
$tables = [];

//LOOP-2 FOR
$rows = [];

//LOOP-1 FOR
$d = new stdClass();
$d->l1_td1 = "1";
$d->l1_td2 = "1";
$d->l1_td3 = "1";
$d->l1_td4 = "1";
$d->l1_td5 = "1";
$d->l1_td6 = "1";
$d->l1_td7 = "1";
$d->l1_td8 = "1";
$d->l1_td9 = "1";
$rows[] = $d;
//END LOOP-1 FOR

$tables[] = $rows;
//END LOOP-2 FOR

$res_level2[] = $tables;
//END LOOP-3 FOR




// echo json_encode($res_level2);

?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .nopadding {
            padding: 0 !important;
            margin: 0 !important;
            padding-right: 0px;
            padding-left: 0px;
        }
    </style>
</head>

<body>
    <?php $isDebug = false; ?>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <?php if ($isDebug) { ?>
                    <thead class="thead-dark">
                        <tr>
                            <th></th>
                            <th>l1_td1</th>
                            <th>l1_td2</th>
                            <th>l1_td3</th>
                            <th>l1_td4</th>
                            <th>l1_td5</th>
                            <th>l1_td6</th>
                            <th>l1_td7</th>
                            <th>l1_td8</th>
                            <th>l1_td9</th>
                        </tr>
                    </thead>
                <?php } ?>
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Kategori</th>
                        <th>Jumlah(S)</th>
                        <th>Disiplin(Si)</th>
                        <th>Tidak Disiplib(Si)</th>
                        <th>Entrophy</th>
                        <th>Gain</th>
                        <th>Kelompok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($res_level1); $i++) {
                        $c = $res_level1[$i]; ?>
                        <tr>
                            <?php if ($isDebug) { ?>
                                <td><?= $i ?></td>
                            <?php } ?>
                            <td><?= $c->l1_td1 ?></td>
                            <td><?= $c->l1_td2 ?></td>
                            <td><?= $c->l1_td3 ?></td>
                            <td><?= $c->l1_td4 ?></td>
                            <td><?= $c->l1_td5 ?></td>
                            <td><?= $c->l1_td6 ?></td>
                            <td><?= $c->l1_td7 ?></td>
                            <td><?= $c->l1_td8 ?></td>
                            <td><?= $c->l1_td9 ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php for ($i = 0; $i < count($res_level2); $i++) {
        $a = $res_level2[$i]; ?>

        <div style="background-color: lightblue; height: 5px; width:100%;"></div>
        <div class="row nopadding">
            <?php for ($j = 0; $j < count($a); $j++) {
                $b = $a[$j]; ?>
                <div style="background-color: lightgreen; width:5px;"></div>
                <div class="col nopadding">
                    <div style="background-color: #6f42c1; height: 5px; width:100%;"></div>

                    <table class="table table-striped">
                        <?php if ($isDebug) { ?>
                            <thead class="thead-dark">
                                <tr>
                                    <th></th>
                                    <th>l1_td1</th>
                                    <th>l1_td2</th>
                                    <th>l1_td3</th>
                                    <th>l1_td4</th>
                                    <th>l1_td5</th>
                                    <th>l1_td6</th>
                                    <th>l1_td7</th>
                                    <th>l1_td8</th>
                                    <th>l1_td9</th>
                                </tr>
                            </thead>
                        <?php } ?>
                        <thead class="thead-dark">
                            <tr>
                                <th></th>
                                <th>Title</th>
                                <th>Kategori</th>
                                <th>Jumlah(S)</th>
                                <th>Disiplin(Si)</th>
                                <th>Tidak Disiplib(Si)</th>
                                <th>Entrophy</th>
                                <th>Gain</th>
                                <th>Kelompok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($k = 0; $k < count($b); $k++) {
                                $c = $b[$k]; ?>
                                <tr>
                                    <?php if ($isDebug) { ?>
                                        <td><?= $k ?></td>
                                    <?php } ?>
                                    <td><?= $c->l1_td1 ?></td>
                                    <td><?= $c->l1_td2 ?></td>
                                    <td><?= $c->l1_td3 ?></td>
                                    <td><?= $c->l1_td4 ?></td>
                                    <td><?= $c->l1_td5 ?></td>
                                    <td><?= $c->l1_td6 ?></td>
                                    <td><?= $c->l1_td7 ?></td>
                                    <td><?= $c->l1_td8 ?></td>
                                    <td><?= $c->l1_td9 ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div style="background-color: #6f42c1; height: 5px; width:100%;"></div>
                </div>
                <div style="background-color: lightgreen; width:5px;"></div>
            <?php } ?>
        </div>
    <?php } ?>
</body>

</html>