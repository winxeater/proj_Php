<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>qlqr coisa</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="{$GET_TEMP}/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>      
		<link href="{$GET_TEMP}/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"/>
		
		<link href="{$GET_TEMP}/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="{$GET_TEMP}/themes/css/main.css" rel="stylesheet"/>
		<link href="{$GET_TEMP}/themes/css/flexslider.css" rel="stylesheet"/>

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
							<li><a href="{$GET_HOME}">Página Inicial</a></li>
							<li><a href="{$GET_HOME}/cart">Carrinho</a></li>
							<li><a href="{$GET_HOME}/checkout">Checkout</a></li>					
							<li><a href="{$GET_HOME}/login">Entrar</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="{$GET_HOME}" class="logo pull-left"><img src="{$GET_TEMP}/themes/images/logo.png" class="site_logo" alt=""></a>
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

			{php}
				Rotas::get_Pag();
			{/php}
			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="{$GET_HOME}">Página Inicial</a></li>  
							<li><a href="{$GET_HOME}/contact">Sobre Nós</a></li>
							<li><a href="{$GET_HOME}/contact">Contate-nos</a></li>
							<li><a href="{$GET_HOME}/cart">Carrinho</a></li>
							<li><a href="{$GET_HOME}/login">Entrar/Registre-se</a></li>							
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
						<p class="logo"><img src="{$GET_TEMP}/themes/images/logo.png" class="site_logo" alt=""></p>
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
		<script src="{$GET_TEMP}/themes/js/jquery-1.7.2.min.js"></script>
		<script src="{$GET_TEMP}/bootstrap/js/bootstrap.min.js"></script>				
		<script src="{$GET_TEMP}/themes/js/superfish.js"></script>	
		<script src="{$GET_TEMP}/themes/js/jquery.scrolltotop.js"></script>
					
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		
		<script src="{$GET_TEMP}/themes/js/common.js"></script>
		<script src="{$GET_TEMP}/themes/js/jquery.flexslider-min.js"></script>
		
    </body>
</html>