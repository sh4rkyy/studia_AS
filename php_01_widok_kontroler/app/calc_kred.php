<?php

require_once dirname(__FILE__).'/../config.php';

$kwota = $_REQUEST ['kwota'];
$okres_splaty = $_REQUEST ['okres_splaty'];
$oprocentowanie = $_REQUEST ['oprocentowanie'];

if ( ! (isset($kwota) && isset($okres_splaty) && isset($oprocentowanie))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty kredytu!';
}
if ( $okres_splaty == "") {
	$messages [] = 'Nie podano okresu splaty!';
}
if ( $oprocentowanie == "") {
	$messages [] = 'Nie podano oprocentowania!';
}

if (empty ( $messages )) {
	$rata_miesieczna = round(($kwota * ($oprocentowanie / 100)) + $kwota / $okres_splaty, 4);
	$kwota_do_splaty = $rata_miesieczna * $okres_splaty;
}

include 'calc_kred_view.php';
