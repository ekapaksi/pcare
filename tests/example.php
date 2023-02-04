<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once 'config.php';

//use referensi serivce
$referensi = new Nsulistiyawan\Bpjs\Pcare\Diagnosa($pcare_config);
var_dump($referensi->getDiagnosa('A00','1','10'));

$referensi = new Nsulistiyawan\Bpjs\Pcare\Dokter($pcare_config);
var_dump($referensi->getDokter('1','10'));

$referensi = new Nsulistiyawan\Bpjs\Pcare\Kesadaran($pcare_config);
var_dump($referensi->getKesadaran());

$referensi = new Nsulistiyawan\Bpjs\Pcare\Spesialis($pcare_config);
var_dump($referensi->getReferensiSpesialis());