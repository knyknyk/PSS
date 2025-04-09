<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>">
	
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/style.css">
</head>
<body>

<div class="header">
	<h1><?php out($page_title); if (!isset($page_title)) {  ?> kalkulator kredytowy <?php } ?></h1>
</div>

<div class="content">