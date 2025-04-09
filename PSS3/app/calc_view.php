<?php
include _ROOT_PATH.'/templates/top.php';
?>
<h3>Prosty kalkulator</h2>
<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator</legend>
	<fieldset>
<label for="kwota">Kwota: </label>
	<input id="kwota" type="text" name="kwota" value="<?php echo isset($kwota) ? $kwota : ''; ?>" /><br />
	<label for="lata">lata: </label>
	<input id="lata" type="text" name="lata" value="<?php echo isset($lata) ? $lata : ''; ?>" /><br />
	<label for="oprocentowanie">Oprocentowanie: </label>
	<input id="oprocentowanie" type="text" name="oprocentowanie" value="<?php echo isset($oprocentowanie) ? $oprocentowanie : ''; ?>" /><br />
	
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	
<div class="messages">
<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
	echo '<h4>Wystąpiły błędy: </h4>';
	echo '<ol class="err">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
<?php
if (isset($infos)) {
	if (count ( $infos ) > 0) {
	echo '<h4>Informacje: </h4>';
	echo '<ol class="inf">';
		foreach ( $infos as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
<?php if (isset($result)){ ?>
	<h4>Wynik</h4>
	<p class="res">
<?php print($result); ?>
	</p>
<?php } ?>
</div>
<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>