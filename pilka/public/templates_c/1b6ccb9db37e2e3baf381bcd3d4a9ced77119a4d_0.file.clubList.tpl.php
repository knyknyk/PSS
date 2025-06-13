<?php
/* Smarty version 3.1.30, created on 2025-06-12 16:57:45
  from "C:\xampp\htdocs\pilka\app\views\clubList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_684aeae93519b7_10736737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b6ccb9db37e2e3baf381bcd3d4a9ced77119a4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilka\\app\\views\\clubList.tpl',
      1 => 1749740243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_684aeae93519b7_10736737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2118127022684aeae9344e25_02262414', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_796426519684aeae9351143_04005510', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_2118127022684aeae9344e25_02262414 extends Smarty_Internal_Block
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
class Block_796426519684aeae9351143_04005510 extends Smarty_Internal_Block
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
        min-width: 800px;
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
clubNew">+ Nowy klub</a>
</div>

<input type="text" id="searchInput" placeholder="Filtruj po nazwie klubu..." />

<div class="table-wrapper">
    <table class="pure-table pure-table-bordered" id="clubTable">
        <thead>
            <tr>
                <th>Nazwa klubu</th>
                <th>Liczba zawodników</th>
                <th>Miasto</th>
                <th>Stadion</th>
                <th>Pozycja w lidze</th>
                <th>ID ligi</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['club']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['c']->value["club_name"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['c']->value["number_of_players"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['c']->value["city"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['c']->value["stadium"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['c']->value["league_position"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['c']->value["id_league"];?>
</td>
                <td>
                    <a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
clubEdit/<?php echo $_smarty_tpl->tpl_vars['c']->value['id_club'];?>
">Edytuj</a>
                    <a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
clubDelete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id_club'];?>
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
        const rows = document.querySelectorAll("#clubTable tbody tr");
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
