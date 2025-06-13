<?php
/* Smarty version 3.1.30, created on 2025-06-12 17:27:39
  from "C:\xampp\htdocs\pilka\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_684af1eba81772_34122258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '183c74c3ecf08c416d6779ae813a10f084eb37ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilka\\app\\views\\templates\\main.tpl',
      1 => 1749742056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684af1eba81772_34122258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Aplikacja bazodanowa</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
        integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
    <style>
        body {
            margin: 20px;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            color: #333;
        }
        /* MENU */
        .pure-menu.pure-menu-horizontal {
            background: #004080;
            border-radius: 5px;
            padding: 0 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            margin-bottom: 30px;
        }
        .pure-menu.pure-menu-horizontal a.pure-menu-heading,
        .pure-menu.pure-menu-horizontal a.pure-menu-link {
            color: #fff;
            font-weight: 600;
            padding: 15px 18px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        .pure-menu.pure-menu-horizontal a.pure-menu-heading:hover,
        .pure-menu.pure-menu-horizontal a.pure-menu-link:hover {
            background: #003366;
            border-radius: 4px;
        }

        /* Komunikaty */
        .messages {
            max-width: 600px;
            margin: 0 auto 30px;
            padding: 15px 25px;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            background: #fff;
        }
        .messages ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .messages li {
            padding: 10px 15px;
            border-radius: 4px;
            margin-bottom: 10px;
            font-weight: 500;
        }
        .messages li.error {
            background: #f8d7da;
            color: #842029;
            border: 1px solid #f5c2c7;
        }
        .messages li.warning {
            background: #fff3cd;
            color: #664d03;
            border: 1px solid #ffecb5;
        }
        .messages li.info {
            background: #d1e7dd;
            color: #0f5132;
            border: 1px solid #badbcc;
        }
        body.dark-mode {
    background-color: #121212;
    color: #e0e0e0;
}

body.dark-mode a,
body.dark-mode h1,
body.dark-mode h2,
body.dark-mode h3,
body.dark-mode h4 {
    color: #fff;
}

body.dark-mode .pure-table {
    background-color: #1e1e1e;
    color: #ddd;
}

body.dark-mode input,
body.dark-mode select,
body.dark-mode textarea {
    background-color: #1f1f1f;
    color: #eee;
    border: 1px solid #444;
}

body.dark-mode .pure-button {
    background-color: #333;
    color: #eee;
}

body.dark-mode .pure-button-primary {
    background-color: #4a90e2;
    color: #fff;
}

    </style>
</head>
<body>

    <nav class="pure-menu pure-menu-horizontal">
        <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
        <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerShow" class="pure-menu-heading pure-menu-link">Zarejestruj</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
browse" class="pure-menu-heading pure-menu-link">Przeglądaj ligi</a>

            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userPanel" class="pure-menu-heading pure-menu-link">Panel użytkownika</a>   
          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
matchList" class="pure-menu-heading pure-menu-link">Przegląd meczy</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList" class="pure-menu-heading pure-menu-link">Panel administratora</a>
     <div style="float:right; margin-left:20px;">
    <label>
        <input type="checkbox" id="dark-toggle" onchange="toggleDarkMode()" />
        🌙 
    </label>
</div>

    </nav>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_663294609684af1eba77475_14180871', 'top');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2101793117684af1eba80445_30627560', 'messages');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1041049774684af1eba80dd4_09313798', 'bottom');
?>

<?php echo '<script'; ?>
>
    const toggle = document.getElementById('dark-toggle');
    const darkClass = 'dark-mode';

    // Sprawdź lokalne ustawienie i ustaw klasę
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add(darkClass);
        if (toggle) toggle.checked = true;
    }

    function toggleDarkMode() {
        if (toggle.checked) {
            document.body.classList.add(darkClass);
            localStorage.setItem('theme', 'dark');
        } else {
            document.body.classList.remove(darkClass);
            localStorage.setItem('theme', 'light');
        }
    }
<?php echo '</script'; ?>
>
</body>

</html>
<?php }
/* {block 'top'} */
class Block_663294609684af1eba77475_14180871 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_2101793117684af1eba80445_30627560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
    <section class="messages">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
            <li class="msg
                <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?> error<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?> warning<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?> info<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </section>
    <?php }?>
    <?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_1041049774684af1eba80dd4_09313798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'bottom'} */
}
