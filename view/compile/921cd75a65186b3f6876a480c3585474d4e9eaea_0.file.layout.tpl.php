<?php
/* Smarty version 3.1.31, created on 2017-11-19 05:53:49
  from "/opt/lampp/htdocs/ecomm/view/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a110e5d03d861_10273037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '921cd75a65186b3f6876a480c3585474d4e9eaea' => 
    array (
      0 => '/opt/lampp/htdocs/ecomm/view/layout.tpl',
      1 => 1511067226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a110e5d03d861_10273037 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>qlqr coisa</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>      
		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"/>
		
		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/css/main.css" rel="stylesheet"/>
		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/css/flexslider.css" rel="stylesheet"/>

		<!-- scripts -->
		
		
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Página Inicial</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/cart">Carrinho</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/checkout">Checkout</a></li>					
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/login">Entrar</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="logo pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="#">Mulheres</a>					
								<ul>
									<li><a href="#">Categoria 1</a></li>									
									<li><a href="#">Categoria 2</a></li>
									<li><a href="#">Categoria 3</a></li>									
								</ul>
							</li>															
							<li><a href="#">Homens</a></li>			
							<li><a href="#">Esporte</a>
								<ul>									
									<li><a href="#">Presentes</a></li>
									<li><a href="#">Bonés, Tocas e Chapeus</a></li>
									<li><a href="#">Roupas de Frio</a></li>
								</ul>
							</li>							
							<li><a href="#">Mochilas</a></li>
							<li><a href="#">Mais procurados</a></li>
							<li><a href="#">Mais vendidos</a></li>
						</ul>
					</nav>
				</div>
			</section>

			<?php 
				Rotas::get_Pag();
			?>
			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Página Inicial</a></li>  
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/contact">Sobre Nós</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/contact">Contate-nos</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/cart">Carrinho</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/login">Entrar/Registre-se</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>Minha Conta</h4>
						<ul class="nav">
							<li><a href="#">Minha Conta</a></li>
							<li><a href="#">Histórico de compras</a></li>
							<li><a href="#">Lista de pedidos</a></li>
							<li><a href="#">Notícias</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Texto no final da página, em baixo do logo</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="www.facebook.com">Facebook</a>
							<a class="twitter" href="www.twitter.com">Twitter</a>
							<a class="skype" href="@contatoecomm">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template edited by Matheus Gabriel Aguiar.</span>
			</section>
		</div>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/js/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>				
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/js/superfish.js"><?php echo '</script'; ?>
>	
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/js/jquery.scrolltotop.js"><?php echo '</script'; ?>
>
					
		<?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/js/common.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/js/jquery.flexslider-min.js"><?php echo '</script'; ?>
>
		
    </body>
</html><?php }
}
