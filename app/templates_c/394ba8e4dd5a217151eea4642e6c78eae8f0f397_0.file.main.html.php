<?php
/* Smarty version 4.1.0, created on 2022-04-02 11:18:46
  from 'C:\xampp\htdocs\php_05_v2\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624814f663f8e5_56409582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '394ba8e4dd5a217151eea4642e6c78eae8f0f397' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_v2\\templates\\main.html',
      1 => 1648891117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624814f663f8e5_56409582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title> Kalkulator kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
              
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
					
						<span class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/logo.svg" alt="" /></span>
						<h1> PHP </h1>
						<p>Języki programowania dynamicznych stron internetowych<br />
						Patrycja Gwiżdż
					</header>
					
			<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active"> Kalkulator </a></li>
							<li><a href="#first"> Wynik </a></li>
							<li><a href="#cta"> Informacje </a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
					<!-- Introduction -->
							<section id="intro" class="main ">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>Kalkulator kredytowy</h2>
										</header>
                                                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1380182906624814f6639f32_81792760', 'content');
?>

										<p> Jeśli chcesz się dowiedzieć, ile wynosi miesięczna rata kredytu, na który chcesz się zdecydować, jesteś we właściwym miejscu. Wystraczy, że podasz kwotę kredytu, liczbę lat przez które bedziesz spłacać kredyt i oprocentowanie.
										</p>
										
									</div>
									<span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/kalkulator2.svg" alt="" /></span>
									
								</div>
							</section>
				

	
 
 
<!-- Get Started -->
							<section id="cta" class="main special">
	
							</section>
	

								

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2> Języki programowania dynamicznych stron internetowych</h2>
							<p> Zadanie 5</p>
							
						</section>
						<section>
							<h2>Kontakt</h2>
							<dl class="alt">
								
								<dt>Grupa</dt>
								<dd>PAW2</dd>
								<dt>Email</dt>
                                                                <dd><a href="mailto: gwizdzpatrycja@o2.pl">gwizdzpatrycja@o2.pl</a></dd>
							</dl>
							<ul class="icons">
								
								<li><a href="https://github.com/patrycja-gwizdz" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
							</ul>
						</section>
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>
						

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_1380182906624814f6639f32_81792760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1380182906624814f6639f32_81792760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 kontent .... <?php
}
}
/* {/block 'content'} */
}
