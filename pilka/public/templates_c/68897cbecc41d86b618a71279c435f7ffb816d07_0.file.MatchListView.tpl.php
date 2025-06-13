<?php
/* Smarty version 3.1.30, created on 2025-06-12 17:43:17
  from "C:\xampp\htdocs\pilka\app\views\MatchListView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_684af595ee27a3_57007361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68897cbecc41d86b618a71279c435f7ffb816d07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilka\\app\\views\\MatchListView.tpl',
      1 => 1749742996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_684af595ee27a3_57007361 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\pilka\\lib\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_257470517684af595ee1ae4_91093425', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_257470517684af595ee1ae4_91093425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    .top-menu {
        margin: 10px 0;
        padding: 10px;
        background: #f5f5f5;
        border-radius: 6px;
    }
    .top-menu a {
        margin-right: 15px;
        font-weight: 600;
        color: #1f8dd6;
        text-decoration: none;
        transition: color 0.3s;
    }
    .top-menu a:hover {
        color: #155d9a;
    }

    .bottom-margin {
        margin: 20px 0;
    }

    .table-wrapper {
        overflow-x: auto;
        margin-top: 20px;
        box-shadow: 0 0 8px rgba(0,0,0,0.1);
        border-radius: 8px;
        background: #fff;
        padding: 10px;
    }

    table.pure-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 600px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    table.pure-table thead {
        background-color: #e1eaff;
        color: #0a3a75;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.9em;
    }

    table.pure-table th, table.pure-table td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    table.pure-table tbody tr:nth-child(odd) {
        background-color: #fafbff;
    }

    table.pure-table tbody tr:nth-child(even) {
        background-color: #f4f7ff;
    }

    /* Kolory wyników */
    .result-completed {
        color: #3fa34d; /* zielony */
        font-weight: 700;
    }
    .result-pending {
        color: #999;
        font-style: italic;
    }

    /* Tooltip dla daty */
    .match-date {
        position: relative;
        cursor: help;
        border-bottom: 1px dotted #999;
    }
    .match-date:hover::after {
        content: attr(data-full-date);
        position: absolute;
        bottom: 125%;
        left: 50%;
        transform: translateX(-50%);
        background: #333;
        color: #fff;
        padding: 5px 8px;
        border-radius: 5px;
        white-space: nowrap;
        font-size: 0.8em;
        z-index: 10;
        opacity: 0.9;
    }

    .button-small {
        font-size: 0.85em;
        padding: 6px 10px;
        margin: 2px;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        transition: filter 0.2s;
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

    .control-buttons {
        margin: 15px 0;
    }

    /* Responsive nagłówek */
    @media (max-width: 768px) {
        table.pure-table thead tr {
            display: none;
        }
        table.pure-table, table.pure-table tbody, table.pure-table tr, table.pure-table td {
            display: block;
            width: 100%;
        }
        table.pure-table tr {
            margin-bottom: 15px;
            border-bottom: 2px solid #ddd;
        }
        table.pure-table td {
            text-align: right;
            padding-left: 50%;
            position: relative;
            border: none;
            border-bottom: 1px solid #eee;
        }
        table.pure-table td::before {
            content: attr(data-label);
            position: absolute;
            left: 15px;
            width: 45%;
            padding-left: 15px;
            font-weight: 700;
            text-align: left;
            color: #555;
        }
    }
</style>

<h2>Aktualne mecze</h2>
<nav class="pure-menu pure-menu-horizontal top-menu">
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
simulateMatches" class="pure-menu-heading pure-menu-link">Symuluj mecze</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
resetMatches" class="pure-menu-heading pure-menu-link">Przelosuj mecze</a>
</nav>

<div class="table-wrapper">
    <table class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Liga</th>
                <th>Drużyna Gospodarz</th>
                <th>Wynik</th>
                <th>Drużyna Gość</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['matches']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
                <tr>
                    <td data-label="Liga"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m']->value['league_name'])===null||$tmp==='' ? "-" : $tmp);?>
</td>
                    <td data-label="Drużyna Gospodarz"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m']->value['home_name'])===null||$tmp==='' ? "-" : $tmp);?>
</td>
                    <td data-label="Wynik" class="<?php if (isset($_smarty_tpl->tpl_vars['m']->value['home_goals'])) {?>result-completed<?php } else { ?>result-pending<?php }?>">
                        <?php if (isset($_smarty_tpl->tpl_vars['m']->value['home_goals'])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['m']->value['home_goals'];?>
 : <?php echo $_smarty_tpl->tpl_vars['m']->value['away_goals'];?>

                        <?php } else { ?>
                            - : -
                        <?php }?>
                    </td>
                    <td data-label="Drużyna Gość"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m']->value['away_name'])===null||$tmp==='' ? "-" : $tmp);?>
</td>
                    <td data-label="Data" class="match-date" data-full-date="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value['match_date'],"%A, %d %B %Y, %H:%M:%S");?>
">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value['match_date'],"%Y-%m-%d %H:%M");?>

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

<?php
}
}
/* {/block 'top'} */
}
