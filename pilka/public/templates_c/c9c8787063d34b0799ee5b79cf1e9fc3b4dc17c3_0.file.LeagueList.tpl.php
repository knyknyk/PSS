<?php
/* Smarty version 3.1.30, created on 2025-06-04 13:03:23
  from "C:\xampp\htdocs\pilka\app\views\LeagueList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_684027fb94a173_52674706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9c8787063d34b0799ee5b79cf1e9fc3b4dc17c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilka\\app\\views\\LeagueList.tpl',
      1 => 1749034998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_684027fb94a173_52674706 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1547995156684027fb936a57_15805795', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_403492517684027fb949b25_55185742', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1547995156684027fb936a57_15805795 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    .top-menu {
        margin: 10px 0;
        padding: 10px;
        background: #f5f5f5;
    }
    .top-menu a {
        margin-right: 10px;
    }

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
        min-width: 600px;
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
        border-radius: 4px;
    }

    .button-warning {
        background-color: #d64b1f;
        color: white;
        border-radius: 4px;
    }

    .button-success {
        background-color: #3fa34d;
        color: white;
        border-radius: 4px;
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
class Block_403492517684027fb949b25_55185742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin">
    <a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
leagueNew">+ Nowa liga</a>
</div>

<input type="text" id="searchInput" placeholder="Filtruj po nazwie ligi..." />

<div class="table-wrapper">
    <table class="pure-table pure-table-bordered" id="leagueTable">
        <thead>
            <tr>
                <th>Nazwa ligi</th>
                <th>Liczba klubów</th>
                <th>Kraj</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leagues']->value, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['l']->value["league_name"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['l']->value["number_of_clubs"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['l']->value["country"];?>
</td>
                <td>
                    <a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
leagueEdit/<?php echo $_smarty_tpl->tpl_vars['l']->value['id_league'];?>
">Edytuj</a>
                    <a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
leagueDelete/<?php echo $_smarty_tpl->tpl_vars['l']->value['id_league'];?>
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
        const rows = document.querySelectorAll("#leagueTable tbody tr");
        rows.forEach(row => {
            const name = row.cells[0].textContent.toLowerCase();
            row.style.display = name.includes(filter) ? "" : "none";
        });
    });
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'bottom'} */
}
