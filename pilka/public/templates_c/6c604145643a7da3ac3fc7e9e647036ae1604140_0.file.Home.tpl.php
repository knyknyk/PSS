<?php
/* Smarty version 3.1.30, created on 2025-06-03 15:47:24
  from "C:\xampp\htdocs\pilka\app\views\Home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_683efcec228d31_39868081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c604145643a7da3ac3fc7e9e647036ae1604140' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilka\\app\\views\\Home.tpl',
      1 => 1748958441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_683efcec228d31_39868081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1626408720683efcec227cd4_73463682', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1356019420683efcec2288c1_21226027', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1626408720683efcec227cd4_73463682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1 style="text-align:center; color:#004080; margin-bottom: 15px;">Witamy w aplikacji śledzącej rozgrywki piłkarskie!</h1>

<p style="max-width: 700px; margin: 0 auto 25px; font-size: 1.1em; line-height: 1.5;">
    Śledź na bieżąco wyniki, tabele, składy drużyn oraz profile zawodników. Nasza aplikacja pozwala Ci być bliżej ulubionych lig i klubów.
</p>

<div style="text-align:center; margin-bottom: 40px;">
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
browse" class="pure-button pure-button-primary" style="font-size:1.2em; padding: 12px 30px;">
        Przeglądaj ligi i drużyny &raquo;
    </a>
</div>

<h2 style="color:#0066cc; margin-bottom: 20px;">Dostępne ligi</h2>

<?php if (isset($_smarty_tpl->tpl_vars['leagues']->value) && count($_smarty_tpl->tpl_vars['leagues']->value) > 0) {?>
    <ul style="max-width: 600px; margin: 0 auto; padding-left: 0; list-style: none;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leagues']->value, 'league');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['league']->value) {
?>
        <li style="background: #e8f0fe; margin-bottom: 10px; padding: 15px 20px; border-radius: 6px; font-weight: 600;">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
browse/<?php echo $_smarty_tpl->tpl_vars['league']->value['id_league'];?>
" style="color:#004080; text-decoration:none;">
                <?php echo $_smarty_tpl->tpl_vars['league']->value['league_name'];?>

            </a>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
<?php } else { ?>
    <p style="text-align:center; font-style: italic; color: #888;">Brak dostępnych lig do wyświetlenia.</p>
<?php }?>

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_1356019420683efcec2288c1_21226027 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="max-width: 700px; margin: 40px auto; font-size: 0.9em; color: #555; text-align:center;">
    <p>
        Aplikacja jest projektem edukacyjnym stworzonym przez Jakub Nyk. <br>
        Korzystaj i zgłaszaj sugestie na adres email: jakub.nyk@onet.pl
    </p>
</div>
<?php
}
}
/* {/block 'bottom'} */
}
