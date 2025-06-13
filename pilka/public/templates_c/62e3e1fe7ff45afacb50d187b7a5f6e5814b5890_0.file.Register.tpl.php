<?php
/* Smarty version 3.1.30, created on 2025-06-03 16:05:34
  from "C:\xampp\htdocs\pilka\app\views\Register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_683f012ead3a49_29968809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62e3e1fe7ff45afacb50d187b7a5f6e5814b5890' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilka\\app\\views\\Register.tpl',
      1 => 1748959529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_683f012ead3a49_29968809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1565121917683f012eac3f53_61230225', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_428563639683f012ead3266_14054262', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1565121917683f012eac3f53_61230225 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 style="color:#2c3e50; margin-bottom: 20px;">Rejestracja użytkownika</h2>
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_428563639683f012ead3266_14054262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register" method="post"
      class="pure-form pure-form-stacked"
      style="max-width: 500px; margin: auto; padding: 25px; background-color: #f9f9f9;
             box-shadow: 0 0 12px rgba(0,0,0,0.1); border-radius: 8px;">

    <fieldset>
        <label for="login" style="font-weight: bold;">Login</label>
        <input type="text" name="login" id="login" placeholder="Twój login" required
               value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <label for="email" style="font-weight: bold; margin-top: 15px;">Email</label>
        <input type="email" name="email" id="email" placeholder="Twój email" required
               value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <label for="password" style="font-weight: bold; margin-top: 15px;">Hasło</label>
        <input type="password" name="password" id="password" placeholder="Hasło" required
               style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <label for="password_confirm" style="font-weight: bold; margin-top: 15px;">Powtórz hasło</label>
        <input type="password" name="password_confirm" id="password_confirm" placeholder="Powtórz hasło" required
               style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <label for="first_name" style="font-weight: bold; margin-top: 15px;">Imię</label>
        <input type="text" name="first_name" id="first_name" required
               value="<?php echo $_smarty_tpl->tpl_vars['form']->value->first_name;?>
" style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <label for="last_name" style="font-weight: bold; margin-top: 15px;">Nazwisko</label>
        <input type="text" name="last_name" id="last_name" required
               value="<?php echo $_smarty_tpl->tpl_vars['form']->value->last_name;?>
" style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <button type="submit" class="pure-button pure-button-primary"
                style="margin-top: 25px; width: 100%; font-size: 1.1em; padding: 12px;">
            Zarejestruj się
        </button>
    </fieldset>
</form>
<?php
}
}
/* {/block 'bottom'} */
}
