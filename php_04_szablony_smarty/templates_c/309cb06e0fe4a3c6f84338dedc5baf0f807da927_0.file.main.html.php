<?php
/* Smarty version 4.2.1, created on 2022-11-15 01:08:11
  from 'C:\xampp\htdocs\php_04_szablony_smarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6372d86b7c6426_97790915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '309cb06e0fe4a3c6f84338dedc5baf0f807da927' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablony_smarty\\templates\\main.html',
      1 => 1668470890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6372d86b7c6426_97790915 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
        
        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
        
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main.css" />
	<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/noscript.css" /></noscript>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/browser.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/breakpoints.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/util.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
</head>
<body>
    
<header id="header">
<h1 id="logo"><a href="index.php">Kalkulator</a></h1>
</header>
    
<div id="app_content" class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18804709466372d86b7c57b5_13359488', 'content');
?>

</div>
    

<div id="footer">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11900990526372d86b7c5ef1_80883238', 'footer');
?>
                                 
    <ul class="copyright">
        <li>&copy; DC. Wszystkie prawa zastrzezone.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
</div>
    
</body>
</html><?php }
/* {block 'content'} */
class Block_18804709466372d86b7c57b5_13359488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18804709466372d86b7c57b5_13359488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_11900990526372d86b7c5ef1_80883238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11900990526372d86b7c5ef1_80883238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
