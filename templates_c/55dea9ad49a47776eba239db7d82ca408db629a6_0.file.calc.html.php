<?php
/* Smarty version 4.1.0, created on 2022-04-01 12:38:07
  from 'C:\xampp\htdocs\php_04_v2\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6246d60f724480_60285131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55dea9ad49a47776eba239db7d82ca408db629a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_v2\\app\\calc.html',
      1 => 1648808384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6246d60f724480_60285131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_926062476246d60f7161f2_81650699', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2890390106246d60f716cc9_58147191', 'content');
?>








<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_926062476246d60f7161f2_81650699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_926062476246d60f7161f2_81650699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Zadanie 4<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_2890390106246d60f716cc9_58147191 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2890390106246d60f716cc9_58147191',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<!-- First Section -->
	<section id="first" class="main special">

	<div>
         
	<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
		<label for="kwota">	Kwota: </label>
		<input id="kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" />
		<br />
		<label for="lata">Liczba lat: </label>
		<input id="lata" type="text" name="lata"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value['lata'];?>
"  />
		<br />
		<label for="oprocentowanie">Oprocentowanie: </label>
		<input id="oprocentowanie" type="text" name="oprocentowanie"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value['oprocentowanie'];?>
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
            <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
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
