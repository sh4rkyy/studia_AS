<?php
/* Smarty version 3.1.30, created on 2022-11-18 00:50:36
  from "C:\xampp\htdocs\php_06_kontroler\app\calc\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6376c8cc0e7978_82376911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47d1636a325930ae45dd34481ec3a84d0a97ec7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_kontroler\\app\\calc\\CalcView.html',
      1 => 1668729035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6376c8cc0e7978_82376911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16122335536376c8cc0dc7b6_87996826', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_633175876376c8cc0e7601_30501674', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_16122335536376c8cc0dc7b6_87996826 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_633175876376c8cc0e7601_30501674 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="main" class="wrapper style1">
    <div class="container">
	<header class="major">
	<h2>Przykład 06</h2>
	<p>Kontroler glowny</p>
        
        <section>
            <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
            <div class="row gtr-uniform gtr-50">
                <div class="col-4 col-12-xsmall">
                    <label for="x">Pierwsza liczba</label>
                    <input id="x" type="text" placeholder="wartość x" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
                </div>
                <div class="col-4 col-12-xsmall">
                    <label for="y">Druga liczba</label>
                    <input id="y" type="text" placeholder="wartość y" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">
                </div>
                <div class="col-4 col-12-xsmall">
                    <label for="op">Operacja</label>
                    <select id="op" name="op">
                        <?php if (isset($_smarty_tpl->tpl_vars['res']->value->op_name)) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
">ponownie: <?php echo $_smarty_tpl->tpl_vars['res']->value->op_name;?>
</option>
                        <option value="" disabled="true">---</option>
                        <?php }?>
                        <option value="plus">(+) dodaj</option>
                        <option value="minus">(-) odejmij </option>
                        <option value="times">(*) pomnóż</option>
                        <option value="div">(/) podziel</option>
                        </select>
                </div>
                
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Oblicz" class="primary" /></li>
                        <li><input type="reset" value="Reset" /></li>
                    </ul>
                </div>
            </div>
            </form>
        </section>
    </div>
</div>


<div class="l-box-lrg pure-u-1 pure-u-med-3-5">


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
