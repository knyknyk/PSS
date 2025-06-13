<?php
/* Smarty version 3.1.30, created on 2025-06-04 13:06:25
  from "C:\xampp\htdocs\pilka\app\views\PersonList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_684028b147d2e9_54823732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddda4d22deb62be3943abdbe58954261b22e130f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilka\\app\\views\\PersonList.tpl',
      1 => 1749035181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_684028b147d2e9_54823732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_653478165684028b146dea7_72693200', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1197343498684028b147c876_95833215', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_653478165684028b146dea7_72693200 extends Smarty_Internal_Block
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
        border-radius: 4px;
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
        border-radius: 4px;
        padding: 8px 15px;
        display: inline-block;
    }

    .button-secondary:hover,
    .button-warning:hover,
    .button-success:hover {
        filter: brightness(1.1);
        text-decoration: none;
        color: white;
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

<nav class="pure-menu pure-menu-horizontal top-menu">
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
class Block_1197343498684028b147c876_95833215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin">
    <a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew">+ Nowa osoba</a>
</div>

<input type="text" id="searchInput" placeholder="Filtruj po nazwisku..." />

<div class="table-wrapper">
    <table class="pure-table pure-table-bordered" id="personTable">
        <thead>
            <tr>
                <th>imię</th>
                <th>nazwisko</th>
                <th>id_użytkownika</th>
                <th>opcje</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
            <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['first_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['last_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
</td>
                <td>
                    <a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
">Edytuj</a>
                    <a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
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
        const rows = document.querySelectorAll("#personTable tbody tr");
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
