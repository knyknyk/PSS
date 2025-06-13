<?php
/* Smarty version 3.1.30, created on 2025-06-04 13:10:04
  from "C:\xampp\htdocs\pilka\app\views\LeagueEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6840298c54bd26_05602484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03861651469ef5ad0b6e2ddc3bcf2cc08e928e35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilka\\app\\views\\LeagueEdit.tpl',
      1 => 1749035395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6840298c54bd26_05602484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17803428816840298c540526_41192469', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15530663406840298c54ac89_95511177', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_17803428816840298c540526_41192469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    form.pure-form-aligned {
        max-width: 600px;
        margin: 20px auto;
        background: #fff;
        padding: 25px 30px;
        border-radius: 10px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }

    form.pure-form-aligned fieldset {
        border: none;
        padding: 0;
        margin: 0;
    }

    form.pure-form-aligned legend {
        font-size: 1.6em;
        margin-bottom: 20px;
        font-weight: 700;
        color: #333;
        border-bottom: 2px solid #1f8dd6;
        padding-bottom: 8px;
    }

    .pure-control-group {
        margin-bottom: 18px;
    }

    .pure-control-group label {
        width: 140px;
        font-weight: 600;
        color: #444;
        padding-top: 8px;
        text-transform: capitalize;
    }

    .pure-control-group label.required::after {
        content: " *";
        color: #d64b1f;
        font-weight: 700;
    }

    .pure-control-group input[type="text"],
    .pure-control-group input[type="number"] {
        width: calc(100% - 150px);
        padding: 8px 12px;
        font-size: 1em;
        border: 1px solid #ccc;
        border-radius: 6px;
        transition: border-color 0.3s ease;
    }

    .pure-control-group input[type="text"]:focus,
    .pure-control-group input[type="number"]:focus {
        border-color: #1f8dd6;
        outline: none;
        box-shadow: 0 0 6px rgba(31,141,214,0.4);
    }

    .pure-controls {
        margin-top: 30px;
        padding-left: 140px;
    }

    .pure-button-primary {
        background-color: #1f8dd6;
        border-radius: 6px;
        padding: 10px 22px;
        font-size: 1em;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .pure-button-primary:hover {
        background-color: #1769aa;
    }

    .button-secondary {
        background-color: #d64b1f;
        border-radius: 6px;
        padding: 10px 22px;
        font-size: 1em;
        margin-left: 10px;
        color: white;
        font-weight: 600;
        transition: background-color 0.3s ease;
        text-decoration: none;
        display: inline-block;
        line-height: 1.5;
    }

    .button-secondary:hover {
        background-color: #a73b18;
        text-decoration: none;
        color: white;
    }

    nav.pure-menu {
        margin-bottom: 20px;
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
class Block_15530663406840298c54ac89_95511177 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
leagueSave" method="post" class="pure-form pure-form-aligned" autocomplete="off">
    <fieldset>
        <legend>Dane ligi</legend>

        <div class="pure-control-group">
            <label for="league_name" class="required">Nazwa ligi</label>
            <input id="league_name" type="text" name="league_name" placeholder="Nazwa ligi" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form']->value->league_name, ENT_QUOTES, 'UTF-8', true);?>
">
        </div>

        <div class="pure-control-group">
            <label for="number_of_clubs" class="required">Liczba klubów</label>
            <input id="number_of_clubs" type="number" name="number_of_clubs" min="0" placeholder="Liczba klubów" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form']->value->number_of_clubs, ENT_QUOTES, 'UTF-8', true);?>
">
        </div>

        <div class="pure-control-group">
            <label for="country" class="required">Kraj</label>
            <input id="country" type="text" name="country" placeholder="Kraj" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form']->value->country, ENT_QUOTES, 'UTF-8', true);?>
">
        </div>

        <div class="pure-controls">
            <input type="submit" class="pure-button pure-button-primary" value="Zapisz">
            <a class="button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
leagueList">Powrót</a>
        </div>
    </fieldset>

    <input type="hidden" name="id_league" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form']->value->id_league, ENT_QUOTES, 'UTF-8', true);?>
">
</form>
<?php
}
}
/* {/block 'bottom'} */
}
