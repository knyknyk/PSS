<?php
/* Smarty version 3.1.30, created on 2025-06-04 13:00:05
  from "C:\xampp\htdocs\pilka\app\views\playerList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_684027352324f1_15356537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c49ac48e05bca076f31b2a29088eda037c7da79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilka\\app\\views\\playerList.tpl',
      1 => 1749034799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_684027352324f1_15356537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1159950585684027352233c6_11312622', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123717510368402735231e94_13005784', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1159950585684027352233c6_11312622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="pure-menu pure-menu-horizontal">
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList" class="pure-menu-heading pure-menu-link">Użytkownicy</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
leagueList" class="pure-menu-heading pure-menu-link">Ligi</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
clubList" class="pure-menu-heading pure-menu-link">Drużyny</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
playerList" class="pure-menu-heading pure-menu-link">Gracze</a>
</nav>
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_123717510368402735231e94_13005784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    .bottom-margin {
        margin: 20px 0;
    }

    .table-wrapper {
        overflow-x: auto;
        margin-top: 20px;
        box-shadow: 0 0 8px rgba(0,0,0,0.05);
        border-radius: 8px;
    }

    table.pure-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 900px;
    }

    table.pure-table thead {
        background-color: #f2f2f2;
    }

    table.pure-table th, table.pure-table td {
        padding: 10px;
        text-align: center;
    }

    table.pure-table tbody tr:nth-child(odd) {
        background-color: #fcfcfc;
    }

    table.pure-table tbody tr:nth-child(even) {
        background-color: #f7f7f7;
    }

    .button-small {
        font-size: 0.85em;
        padding: 6px 10px;
        margin: 2px;
    }

    .button-secondary {
        background-color: #1f8dd6;
        color: white;
    }

    .button-warning {
        background-color: #d64b1f;
        color: white;
    }

    .button-success {
        background-color: #3fa34d;
        color: white;
    }

    .button-secondary:hover,
    .button-warning:hover,
    .button-success:hover {
        filter: brightness(1.1);
    }

    #searchInput {
        margin-top: 10px;
        padding: 8px;
        width: 100%;
        max-width: 400px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
</style>

<div class="bottom-margin">
    <a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
playerNew">+ Nowy zawodnik</a>
</div>

<input type="text" id="searchInput" placeholder="Filtruj po nazwisku..." />

<div class="table-wrapper">
<table class="pure-table pure-table-bordered" id="playerTable">
    <thead>
        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Wiek</th>
            <th>Pozycja</th>
            <th>Wzrost (cm)</th>
            <th>Data urodzenia</th>
            <th>ID drużyny</th>
            <th>Bramki</th>
            <th>Opcje</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['age'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['position'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['height'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['date_of_birth'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['id_team'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['goals'];?>
</td>
            <td>
                <a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
playerEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_player'];?>
">Edytuj</a>
                <a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
playerDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_player'];?>
">Usuń</a>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
</table>
</div>

<?php echo '<script'; ?>
>
    const input = document.getElementById("searchInput");
    input.addEventListener("keyup", function() {
        const filter = input.value.toLowerCase();
        const rows = document.querySelectorAll("#playerTable tbody tr");
        rows.forEach(row => {
            const lastName = row.cells[1].textContent.toLowerCase();
            row.style.display = lastName.includes(filter) ? "" : "none";
        });
    });
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'bottom'} */
}
