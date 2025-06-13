<?php
/* Smarty version 3.1.30, created on 2025-06-03 15:59:14
  from "C:\xampp\htdocs\pilka\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_683effb252b396_54914691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b1134265b3627f795328ee2f58b65a612614628' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilka\\app\\views\\LoginView.tpl',
      1 => 1748959149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_683effb252b396_54914691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_720636826683effb252abe9_14326423', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_720636826683effb252abe9_14326423 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 style="color:#2c3e50; margin-bottom: 20px;">Logowanie do systemu</h2>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-stacked" style="max-width: 400px; margin: auto; padding: 25px; background-color: #f9f9f9; box-shadow: 0 0 12px rgba(0,0,0,0.1); border-radius: 8px;">
    <fieldset>
        <label for="id_login" style="font-weight: bold;">Login</label>
        <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" placeholder="Wpisz login" required style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <label for="id_pass" style="font-weight: bold; margin-top: 15px;">Hasło</label>
        <input id="id_pass" type="password" name="pass" placeholder="Wpisz hasło" required style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <button type="submit" class="pure-button pure-button-primary" style="margin-top: 25px; width: 100%; font-size: 1.1em; padding: 12px;">Zaloguj się</button>
    </fieldset>
</form>
<?php
}
}
/* {/block 'top'} */
}
