<?php
include('func.php');
include('igfunc.php');
date_default_timezone_set('Europe/Italy');
error_reporting(0);
/*
Jika akun terkena feedback_required tenang, tinggal tunggu 24 jam ntar pulih lagi
@theaxe.id
*/

//UBAH BAGIAN INI
$countTarget    = '100'; //Ambil jumlah akun per target
$sleep_1        = '2'; //Jeda per view story
$sleep_2        = '5'; //Jeda per view story 1 akun user
//SAMPAI SINI AJA

$answerFile		= 'storyAnswer.txt'; // FIle komentar mu
$saveFile 		= 'logData.txt'; // File log
$cookieFile 	= 'cookieData.txt'; // File cookie
$targetFile 	= 'targetData.txt'; // File target
$date 			= date("d-m-Y");
$time 			= date("H:m:s");
?>
