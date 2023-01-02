<?php
/* Smarty version 3.1.30, created on 2023-01-02 18:09:52
  from "C:\xampp\htdocs\php_08_bd\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63b30fe0d42ad1_45931942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1301730a8981e1bdba147f8815be97cebda673e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08_bd\\app\\views\\LoginView.tpl',
      1 => 1672678758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63b30fe0d42ad1_45931942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76791663863b30fe0d42807_50526745', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_76791663863b30fe0d42807_50526745 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="main" class="wrapper style1">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="row gtr-uniform gtr-50">
			<div for="id_login" class="col-2 col-12-xsmall">login:
                            <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/></div>
		</div>
        <div class="row gtr-uniform gtr-50">
			<div for="id_pass" class="col-2 col-12-xsmall">pass:
                            <input id="id_pass" type="password" name="pass" /><br /></div>
		</div>
			<input type="submit" value="zaloguj" class="button primary"/>
	</fieldset>
    </div>
</form>	

<?php
}
}
/* {/block 'top'} */
}
