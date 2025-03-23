
<?php require_once dirname(__FILE__) .'/config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/calc.php" method="post">
	<label for="kwota">Kwota: </label>
	<input id="kwota" type="text" name="kwota" value="<?php echo isset($kwota) ? $kwota : ''; ?>" /><br />
	<label for="lata">lata: </label>
	<input id="lata" type="text" name="lata" value="<?php echo isset($lata) ? $lata : ''; ?>" /><br />
	<label for="oprocentowanie">Oprocentowanie: </label>
	<input id="oprocentowanie" type="text" name="oprocentowanie" value="<?php echo isset($oprocentowanie) ? $oprocentowanie : ''; ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php

if (isset($messages)) {
	if (count($messages) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ($messages as $key => $msg) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #f0f0f0; width:300px;">
<?php echo 'wynik: '.$result.' zł'; ?>
</div>
<?php } ?>

</body>
</html>