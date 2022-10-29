<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy - DC</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj sie</a>
</div>

<form action="<?php print(_APP_URL);?>/app/calc_kred.php" method="post">
	<div>
	<label for="kwota">Kwota kredytu (zl):</label>
	<input id="kwota" type="number" name="kwota">
	</div>
	
	<div>
	<label for="okres_splaty">Okres splaty (miesiace):  </label>
	<input id="okres_splaty" type="number" name="okres_splaty">
	</div>
	
	<div>
	<label for="oprocentowanie">Oprocentowanie (procent):</label>
	<input id="oprocentowanie" type="number" name="oprocentowanie">
	</div>
	
	<input type="submit" value="Oblicz" />
</form>	

<?php

if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($rata_miesieczna) && isset($kwota_do_splaty)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesieczna rata kredytu: '.$rata_miesieczna; ?>
</div>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Laczna kwota do splaty: '.$kwota_do_splaty; ?>
</div>
<?php } ?>

</body>
</html>
