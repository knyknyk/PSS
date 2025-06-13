<?php
/* Smarty version 3.1.30, created on 2025-06-03 15:56:11
  from "C:\xampp\htdocs\pilka\app\views\Browse.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_683efefb230392_56649610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7426344a10fee832bcf8a25df3f3491065ef18d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilka\\app\\views\\Browse.tpl',
      1 => 1748958967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_683efefb230392_56649610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1747594851683efefb2016c0_15840356', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2066963714683efefb22fc91_06478845', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1747594851683efefb2016c0_15840356 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin" style="max-width: 600px; margin:auto;">
    <form class="pure-form pure-form-stacked" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
browse">
        <legend style="font-weight: bold; font-size: 1.3em; margin-bottom: 10px;">🔍 Wyszukaj klub lub zawodnika</legend>
        <fieldset>
            <input type="text" placeholder="Nazwa klubu lub zawodnika" name="search_query" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->query;?>
" style="padding: 10px; font-size: 1em; border: 1px solid #ccc; border-radius: 4px;"/>
            <button type="submit" class="pure-button pure-button-primary" style="margin-top: 10px; width: 100%;">Szukaj</button>
        </fieldset>
    </form>
</div>
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_2066963714683efefb22fc91_06478845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="max-width: 900px; margin: 20px auto;">

    <?php if (!count($_smarty_tpl->tpl_vars['leagues']->value)) {?>
        <p style="color: #cc0000; font-weight: bold;">⚠️ Brak dostępnych lig do wyświetlenia.</p>
    <?php } else { ?>
        <h3 style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 6px;">⚽ Ligi</h3>
        <table class="pure-table pure-table-bordered pure-table-striped" style="width: 100%; margin-bottom: 30px; box-shadow: 0 0 8px rgba(0,0,0,0.1);">
        <thead>
            <tr style="background-color: #3498db; color: white;">
                <th>Nazwa ligi</th>
                <th>Kraj</th>
                <th>Liczba klubów</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leagues']->value, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?>
            <tr>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['l']->value['league_name'];?>
</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['country'];?>
</td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['l']->value['number_of_clubs'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
        </table>
    <?php }?>

    <?php if (count($_smarty_tpl->tpl_vars['clubs']->value)) {?>
        <h3 style="color: #2c3e50; border-bottom: 2px solid #27ae60; padding-bottom: 6px;">🏟️ Kluby</h3>
        <table class="pure-table pure-table-bordered pure-table-striped" style="width: 100%; margin-bottom: 30px; box-shadow: 0 0 8px rgba(0,0,0,0.1);">
        <thead>
            <tr style="background-color: #27ae60; color: white;">
                <th>Nazwa klubu</th>
                <th>Miasto</th>
                <th>Stadion</th>
                <th style="text-align: center;">Pozycja w lidze</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clubs']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
            <tr>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['c']->value['club_name'];?>
</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['c']->value['city'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['c']->value['stadium'];?>
</td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['c']->value['league_position'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
        </table>
    <?php }?>

    <?php if (count($_smarty_tpl->tpl_vars['players']->value)) {?>
        <h3 style="color: #2c3e50; border-bottom: 2px solid #e67e22; padding-bottom: 6px;">👤 Zawodnicy</h3>
        <table class="pure-table pure-table-bordered pure-table-striped" style="width: 100%; box-shadow: 0 0 8px rgba(0,0,0,0.1);">
        <thead>
            <tr style="background-color: #e67e22; color: white;">
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Pozycja</th>
                <th style="text-align: center;">Wiek</th>
                <th style="text-align: center;">Bramki</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value['first_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value['last_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value['position'];?>
</td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['p']->value['age'];?>
</td>
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['p']->value['goals'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
        </table>
    <?php }?>

</div>
<?php
}
}
/* {/block 'bottom'} */
}
