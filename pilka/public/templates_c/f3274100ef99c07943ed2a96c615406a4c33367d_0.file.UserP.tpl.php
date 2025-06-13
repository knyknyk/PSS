<?php
/* Smarty version 3.1.30, created on 2025-06-03 15:57:07
  from "C:\xampp\htdocs\pilka\app\views\UserP.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_683eff33557e09_93120466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3274100ef99c07943ed2a96c615406a4c33367d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilka\\app\\views\\UserP.tpl',
      1 => 1748959023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_683eff33557e09_93120466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_579483315683eff33551733_56790027', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1917206400683eff33557830_38563748', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_579483315683eff33551733_56790027 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 style="color:#2c3e50; margin-bottom: 20px;">Panel użytkownika</h2>
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_1917206400683eff33557830_38563748 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userSave" method="post" class="pure-form pure-form-stacked" style="max-width: 500px; margin: auto; box-shadow: 0 0 12px rgba(0,0,0,0.1); padding: 25px; border-radius: 8px; background-color: #fafafa;">
    <fieldset>
        <label style="font-weight: bold; margin-top: 15px;">Imię</label>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
" disabled style="background-color: #e9ecef; cursor: not-allowed; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
        
        <label style="font-weight: bold; margin-top: 15px;">Nazwisko</label>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
" disabled style="background-color: #e9ecef; cursor: not-allowed; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <label style="font-weight: bold; margin-top: 15px;">Login</label>
        <input type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
" required style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <label style="font-weight: bold; margin-top: 15px;">Email</label>
        <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" required style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <label style="font-weight: bold; margin-top: 15px;">Nowe hasło (opcjonalnie)</label>
        <input type="password" name="password" placeholder="Wpisz nowe hasło" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <button type="submit" class="pure-button pure-button-primary" style="margin-top: 25px; width: 100%; font-size: 1.1em; padding: 12px;">Zapisz zmiany</button>
    </fieldset>
</form>
<?php
}
}
/* {/block 'bottom'} */
}
