<?php
/* Smarty version 3.1.30, created on 2025-04-17 09:26:50
  from "C:\xampp\htdocs\PSS4\templates\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6800ad3ae0ebb8_01831776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e376cfa8f8ffaf9e0fd9b5ef117c5b3c93663942' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS4\\templates\\main.html',
      1 => 1744874808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6800ad3ae0ebb8_01831776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? 'Opis domyślny' : $tmp);?>
">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
	
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
     <link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body>
<center>
<div  class="wrapper">
    <div class="col-6 col-12-xsmall">
													
	<header id="header" class="alt">
<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
						
</header>											

	
        </div>
</div>

<div class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2702305246800ad3ae0de41_29636911', 'content');
?>

</div><!-- content -->

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14366960026800ad3ae0e7d3_12322131', 'footer');
?>

	</p>

</div>
</center>
</body>
</html>
<?php }
/* {block 'content'} */
class Block_2702305246800ad3ae0de41_29636911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_14366960026800ad3ae0e7d3_12322131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
