<?php
/* Smarty version 3.1.30, created on 2022-11-24 23:48:17
  from "C:\xampp\htdocs\php_06_namespaces\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_637ff4b188f1b2_25118572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '539dfb074d54a411cf2dd51c3f900d2dc26cedc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_namespaces\\app\\views\\CalcView.tpl',
      1 => 1669330034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_637ff4b188f1b2_25118572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_288859462637ff4b1881e36_91455588', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_927851252637ff4b188ee34_97231664', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_288859462637ff4b1881e36_91455588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_927851252637ff4b188ee34_97231664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="main" class="wrapper style1">
    <div class="container">
	<header class="major">
	<h2>Przykład 06b</h2>
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


<div class="messages">


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
