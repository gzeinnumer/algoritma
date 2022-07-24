<?php
$mp1=[
    'Sepeda', //0
    'Jalan Kaki',//1
    'Sepeda Motor']; //2
$mp2=[
    'SD / sederajat', //0
    'SMP / sederajat', //1
    'SMA / sederajat'];  //2
$mp3=[
    'Petani', //0
    'Wiraswasta', //1
    'Sudah Meninggal']; //2
$mp4=[
    'SD / sederajat', //0
    'SMP / sederajat', //1
    'SMA / sederajat']; //2
$mp5=[
    'Petani', //0
    'PNS/TNI/POLRI', //1
    'Tidak bekerja']; //2
$mp6=[
    'Kurang dari Rp. 500,000', //0
    'Rp. 500,000 - Rp. 999,999', //1
    'Rp. 1,000,000 - Rp. 1,999,999', //2
    'Rp. 2,000,000 - Rp. 4,999,999', //3
    'Tidak Berpenghasilan']; //4

$data = [];

//1
$d = new stdClass();
$d->nama='ADITYA PUTRA ALMANDA';
$d->p1=$mp1[0];
$d->p2=$mp2[2];
$d->p3=$mp3[1];
$d->p4=$mp4[2];
$d->p5=$mp5[2];
$d->p6=$mp6[2];
$data[]=$d;

//2
$d = new stdClass();
$d->nama='ADZIN MUHAMMAD ABIYYU';
$d->p1=$mp1[1];
$d->p2=$mp2[0];
$d->p3=$mp3[0];
$d->p4=$mp4[0];
$d->p5=$mp5[2];
$d->p6=$mp6[1];
$data[]=$d;

//3
$d = new stdClass();
$d->nama='Agil Kalsa Putra';
$d->p1=$mp1[2];
$d->p2=$mp2[0];
$d->p3=$mp3[0];
$d->p4=$mp4[0];
$d->p5=$mp5[1];
$d->p6=$mp6[3];
$data[]=$d;

//4
$d = new stdClass();
$d->nama='PARNO RANDI';
$d->p1=$mp1[1];
$d->p2=$mp2[0];
$d->p3=$mp3[0];
$d->p4=$mp4[0];
$d->p5=$mp5[0];
$d->p6=$mp6[1];
$data[]=$d;

//5
$d = new stdClass();
$d->nama='REFALDA RAMZI';
$d->p1=$mp1[1];
$d->p2=$mp2[2];
$d->p3=$mp3[2];
$d->p4=$mp4[2];
$d->p5=$mp5[2];
$d->p6=$mp6[4];
$data[]=$d;

//6
$d = new stdClass();
$d->nama='PUTRI AMELLIZA';
$d->p1=$mp1[1];
$d->p2=$mp2[0];
$d->p3=$mp3[0];
$d->p4=$mp4[1];
$d->p5=$mp5[0];
$d->p6=$mp6[4];
$data[]=$d;

//7
$d = new stdClass();
$d->nama='PUTRI RENO PRATAMA';
$d->p1=$mp1[2];
$d->p2=$mp2[2];
$d->p3=$mp3[1];
$d->p4=$mp4[2];
$d->p5=$mp5[1];
$d->p6=$mp6[1];
$data[]=$d;

//8
$d = new stdClass();
$d->nama='TIARA EKA KEMBARA';
$d->p1=$mp1[2];
$d->p2=$mp2[0];
$d->p3=$mp3[0];
$d->p4=$mp4[1];
$d->p5=$mp5[2];
$d->p6=$mp6[1];
$data[]=$d;

//9
$d = new stdClass();
$d->nama='MELSI AGUSNI';
$d->p1=$mp1[0];
$d->p2=$mp2[0];
$d->p3=$mp3[0];
$d->p4=$mp4[0];
$d->p5=$mp5[2];
$d->p6=$mp6[0];
$data[]=$d;

//10
$d = new stdClass();
$d->nama='RAHMI WIRDA YANTI';
$d->p1=$mp1[2];
$d->p2=$mp2[2];
$d->p3=$mp3[2];
$d->p4=$mp4[2];
$d->p5=$mp5[0];
$d->p6=$mp6[0];
$data[]=$d;

//11
$d = new stdClass();
$d->nama='REGI ASIRGA DARLIS';
$d->p1=$mp1[1];
$d->p2=$mp2[1];
$d->p3=$mp3[0];
$d->p4=$mp4[1];
$d->p5=$mp5[0];
$d->p6=$mp6[0];
$data[]=$d;

//12
$d = new stdClass();
$d->nama='REGO FITRA AGUS';
$d->p1=$mp1[1];
$d->p2=$mp2[1];
$d->p3=$mp3[0];
$d->p4=$mp4[1];
$d->p5=$mp5[0];
$d->p6=$mp6[3];
$data[]=$d;

//13
$d = new stdClass();
$d->nama='M. IQBAL';
$d->p1=$mp1[2];
$d->p2=$mp2[1];
$d->p3=$mp3[0];
$d->p4=$mp4[0];
$d->p5=$mp5[0];
$d->p6=$mp6[2];
$data[]=$d;





//echo $data[0]->p1;
