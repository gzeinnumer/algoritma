<?php
$mp1 = [
    'Sepeda', //0
    'Jalan Kaki', //1
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
    'Rp. 500,000 - Rp. 999,999', //1
    'Rp. 1,000,000 - Rp. 1,999,999', //2
    'Rp. 2,000,000 - Rp. 4,999,999', //3
    'Tidak Berpenghasilan'
]; //4

$mp7 = ['Disiplin', 'Tidak Disipilin'];

$data = [];

//1
$d = new stdClass();
$d->nama = 'ADITYA PUTRA ALMANDA';
$d->p1 = $mp1[0];
$d->p2 = $mp2[2];
$d->p3 = $mp3[1];
$d->p4 = $mp4[2];
$d->p5 = $mp5[2];
$d->p6 = $mp6[2];
$d->p7 = $mp7[1];
$data[] = $d;

//2
$d = new stdClass();
$d->nama = 'ADZIN MUHAMMAD ABIYYU';
$d->p1 = $mp1[1];
$d->p2 = $mp2[0];
$d->p3 = $mp3[0];
$d->p4 = $mp4[0];
$d->p5 = $mp5[2];
$d->p6 = $mp6[1];
$d->p7 = $mp7[0];
$data[] = $d;

//3
$d = new stdClass();
$d->nama = 'Agil Kalsa Putra';
$d->p1 = $mp1[2];
$d->p2 = $mp2[0];
$d->p3 = $mp3[0];
$d->p4 = $mp4[0];
$d->p5 = $mp5[1];
$d->p6 = $mp6[3];
$d->p7 = $mp7[1];
$data[] = $d;

//4
$d = new stdClass();
$d->nama = 'PARNO RANDI';
$d->p1 = $mp1[1];
$d->p2 = $mp2[0];
$d->p3 = $mp3[0];
$d->p4 = $mp4[0];
$d->p5 = $mp5[0];
$d->p6 = $mp6[1];
$d->p7 = $mp7[1];
$data[] = $d;

//5
$d = new stdClass();
$d->nama = 'REFALDA RAMZI';
$d->p1 = $mp1[1];
$d->p2 = $mp2[2];
$d->p3 = $mp3[2];
$d->p4 = $mp4[2];
$d->p5 = $mp5[2];
$d->p6 = $mp6[4];
$d->p7 = $mp7[0];
$data[] = $d;

//6
$d = new stdClass();
$d->nama = 'PUTRI AMELLIZA';
$d->p1 = $mp1[1];
$d->p2 = $mp2[0];
$d->p3 = $mp3[0];
$d->p4 = $mp4[1];
$d->p5 = $mp5[0];
$d->p6 = $mp6[4];
$d->p7 = $mp7[0];
$data[] = $d;

//7
$d = new stdClass();
$d->nama = 'PUTRI RENO PRATAMA';
$d->p1 = $mp1[2];
$d->p2 = $mp2[2];
$d->p3 = $mp3[1];
$d->p4 = $mp4[2];
$d->p5 = $mp5[1];
$d->p6 = $mp6[1];
$d->p7 = $mp7[0];
$data[] = $d;

//8
$d = new stdClass();
$d->nama = 'TIARA EKA KEMBARA';
$d->p1 = $mp1[2];
$d->p2 = $mp2[0];
$d->p3 = $mp3[0];
$d->p4 = $mp4[1];
$d->p5 = $mp5[2];
$d->p6 = $mp6[1];
$d->p7 = $mp7[1];
$data[] = $d;

//9
$d = new stdClass();
$d->nama = 'MELSI AGUSNI';
$d->p1 = $mp1[0];
$d->p2 = $mp2[0];
$d->p3 = $mp3[0];
$d->p4 = $mp4[0];
$d->p5 = $mp5[2];
$d->p6 = $mp6[0];
$d->p7 = $mp7[1];
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
$d->p7 = $mp7[1];
$data[] = $d;

//11
$d = new stdClass();
$d->nama = 'REGI ASIRGA DARLIS';
$d->p1 = $mp1[1];
$d->p2 = $mp2[1];
$d->p3 = $mp3[0];
$d->p4 = $mp4[1];
$d->p5 = $mp5[0];
$d->p6 = $mp6[0];
$d->p7 = $mp7[0];
$data[] = $d;

//12
$d = new stdClass();
$d->nama = 'REGO FITRA AGUS';
$d->p1 = $mp1[1];
$d->p2 = $mp2[1];
$d->p3 = $mp3[0];
$d->p4 = $mp4[1];
$d->p5 = $mp5[0];
$d->p6 = $mp6[3];
$d->p7 = $mp7[0];
$data[] = $d;

//13
$d = new stdClass();
$d->nama = 'M. IQBAL';
$d->p1 = $mp1[2];
$d->p2 = $mp2[1];
$d->p3 = $mp3[0];
$d->p4 = $mp4[0];
$d->p5 = $mp5[0];
$d->p6 = $mp6[2];
$d->p7 = $mp7[1];
$data[] = $d;

$extrackP1 = [];
$extrackP2 = [];
$extrackP3 = [];
$extrackP4 = [];
$extrackP5 = [];
$extrackP6 = [];
$extrackP7 = [];

for ($i = 0; $i < count($data); $i++) {
    $extrackP1[] = $data[$i]->p1;
    $extrackP2[] = $data[$i]->p2;
    $extrackP3[] = $data[$i]->p3;
    $extrackP4[] = $data[$i]->p4;
    $extrackP5[] = $data[$i]->p5;
    $extrackP6[] = $data[$i]->p6;
    $extrackP7[] = $data[$i]->p7;
}

$res_level1 = [];
$e = new stdClass();
$e->l1_td1 = "Total";
$e->l1_td2 = "";
$e->l1_td3 = count($data);
$e->l1_td4 = array_count_values(array_column($data, 'p7'))[$mp7[0]];
$e->l1_td5 = array_count_values(array_column($data, 'p7'))[$mp7[1]];
$e->l1_td6 = "";
$e->l1_td7 = "";
$res_level1[] = $e;

$e = new stdClass();
$e->l1_td1 = "Alat Transportasi";
$e->l1_td2 = "";
$e->l1_td3 = "";
$e->l1_td4 = "";
$e->l1_td5 = "";
$e->l1_td6 = "";
$e->l1_td7 = "";
$res_level1[] = $e;

for ($i = 0; $i < count($mp1); $i++) {
    $c = $mp1[$i];

    $e = new stdClass();
    $e->l1_td1 = "";
    $e->l1_td2 = $c;
    $e->l1_td3 = array_count_values(array_column($data, 'p1'))[$mp1[$i]];
    $temp = [];
    for ($j = 0; $j < count($data); $j++) {
        if ($data[$j]->p1 === $mp1[$i]) {
            $temp[] = $data[$j];
        }
    }
    $e->l1_td4 = array_count_values(array_column($temp, 'p7'))[$mp7[0]] != null ? array_count_values(array_column($temp, 'p7'))[$mp7[0]] : "0";
    $e->l1_td5 = array_count_values(array_column($temp, 'p7'))[$mp7[1]] != null ? array_count_values(array_column($temp, 'p7'))[$mp7[1]] : "0";;
    $e->l1_td6 = "";
    $e->l1_td7 = "";
    $res_level1[] = $e;
}

// $e = new stdClass();
// $e->l1_td1 = "";
// $e->l1_td2 = "";
// $e->l1_td3 = "";
// $e->l1_td4 = "";
// $e->l1_td5 = "";
// $e->l1_td6 = "";
// $e->l1_td7 = "";
?>

<html>

<head>

</head>

<body>
    <table border="1">
        <thead>
            <th>Title</th>
            <th>Kategori</th>
            <th>Jumlah(S)</th>
            <th>Disiplib(Si)</th>
            <th>Tidak Disiplib(Si)</th>
            <th>Entrophy</th>
            <th>Gain</th>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($res_level1); $i++) {
                $c = $res_level1[$i]; ?>
                <tr>
                    <td><?= $c->l1_td1 ?></td>
                    <td><?= $c->l1_td2 ?></td>
                    <td><?= $c->l1_td3 ?></td>
                    <td><?= $c->l1_td4 ?></td>
                    <td><?= $c->l1_td5 ?></td>
                    <td><?= $c->l1_td6 ?></td>
                    <td><?= $c->l1_td7 ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>