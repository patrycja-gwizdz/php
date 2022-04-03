<?php
/* Smarty version 4.1.0, created on 2022-04-01 23:57:23
  from 'C:\xampp\htdocs\php_05_v2\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624775434146a4_15018999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '968fb11d1b30441e530f7419c2166089827a2fb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_v2\\app\\calc.html',
      1 => 1648850240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624775434146a4_15018999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1435849812624775433ff590_13531548', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202970198062477543401354_61128255', 'content');
?>








<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1435849812624775433ff590_13531548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1435849812624775433ff590_13531548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Zadanie 5<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_202970198062477543401354_61128255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_202970198062477543401354_61128255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<!-- First Section -->
	<section id="first" class="main special">

	<div>
         
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
		<label for="kwota">Kwota: </label>
		<input id="kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" />
		<br />
		<label for="lata">Liczba lat: </label>
		<input id="lata" type="text" name="lata"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
"  />
		<br />
		<label for="oprocentowanie">Oprocentowanie: </label>
		<input id="oprocentowanie" type="text" name="oprocentowanie"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
"   />
		<br />
		<br />
		<input type="submit" value="Oblicz" />
	</form>	
	</div>
							</section>

    <section id="cta" class="main  ">
        
        <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

        <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
        <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
        <h4>Wystąpiły błędy: </h4>
        <ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
        <?php }?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
        <h4>Miesięczna rata</h4>
        <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['form']->value->result;?>
 złotych
        </p>
        <?php }?>

    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
