<?php
/* Smarty version 3.1.30, created on 2022-11-27 00:27:14
  from "C:\xampp\htdocs\php_07_routing\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6382a0d20a4ec5_19794296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2af8e420aa2adf2e65cbee2ebf00ac5627703b2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07_routing\\app\\views\\LoginView.tpl',
      1 => 1669494185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6382a0d20a4ec5_19794296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13012162016382a0d20a4741_06040395', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_13012162016382a0d20a4741_06040395 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="row gtr-uniform gtr-50">
			<div for="id_login" class="col-2 col-12-xsmall">login:
                            <input id="id_login" type="text" name="login"/></div>
		</div>
        <div class="row gtr-uniform gtr-50">
			<div for="id_pass" class="col-2 col-12-xsmall">pass:
                            <input id="id_pass" type="password" name="pass" /><br /></div>
		</div>
			<input type="submit" value="zaloguj" class="button primary"/>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
