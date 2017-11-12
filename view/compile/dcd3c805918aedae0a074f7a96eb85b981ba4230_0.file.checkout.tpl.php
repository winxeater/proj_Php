<?php
/* Smarty version 3.1.31, created on 2017-11-12 05:10:16
  from "/opt/lampp/htdocs/ecomm/view/checkout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a07c9a8a94f33_22840615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcd3c805918aedae0a074f7a96eb85b981ba4230' => 
    array (
      0 => '/opt/lampp/htdocs/ecomm/view/checkout.tpl',
      1 => 1510459403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a07c9a8a94f33_22840615 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMP']->value;?>
/themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
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
		<!--[if lt IE 9]>			
			<?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
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
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_CART']->value;?>
">Carrinho</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_CHECK']->value;?>
">Checkout</a></li>					
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_LOGIN']->value;?>
">Entrar</a></li>				
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PROD']->value;?>
">Woman</a>					
								<ul>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PROD']->value;?>
">Lacinia nibh</a></li>									
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PROD']->value;?>
">Eget molestie</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PROD']->value;?>
">Varius purus</a></li>									
								</ul>
							</li>															
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PROD']->value;?>
">Man</a></li>			
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PROD']->value;?>
">Sport</a>
								<ul>									
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PROD']->value;?>
">Gifts and Tech</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PROD']->value;?>
">Ties and Hats</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PROD']->value;?>
">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PROD']->value;?>
">Hangbag</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PROD']->value;?>
">Best Seller</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PROD']->value;?>
">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>				
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Check Out</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Checkout Options</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>New Customer</h4>
												<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
												<form action="#" method="post">
													<fieldset>
														<label class="radio" for="register">
															<input type="radio" name="account" value="register" id="register" checked="checked">Register Account
														</label>
														<label class="radio" for="guest">
															<input type="radio" name="account" value="guest" id="guest">Guest Checkout
														</label>
														<br>
														<button class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2">Continue</button>
													</fieldset>
												</form>
											 </div>
											 <div class="span6">
												<h4>Returning Customer</h4>
												<p>I am a returning customer</p>
												<form action="#" method="post">
													<fieldset>
														<div class="control-group">
															<label class="control-label">Username</label>
															<div class="controls">
																<input type="text" placeholder="Enter your username" id="username" class="input-xlarge">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Password</label>
															<div class="controls">
															<input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
															</div>
														</div>
														<button class="btn btn-inverse">Continue</button>
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Account &amp; Billing Details</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Your Personal Details</h4>
												<div class="control-group">
													<label class="control-label">First Name</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Last Name</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">Email Address</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Telephone</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Fax</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
											</div>
											<div class="span6">
												<h4>Your Address</h4>
												<div class="control-group">
													<label class="control-label">Company</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Company ID:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Address 1:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Address 2:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> City:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Post Code:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Country:</label>
													<div class="controls">
														<select class="input-xlarge">
															<option value="1">Afghanistan</option>
															<option value="2">Albania</option>
															<option value="3">Algeria</option>
															<option value="4">American Samoa</option>
															<option value="5">Andorra</option>
															<option value="6">Angola</option>
														</select>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Region / State:</label>
													<div class="controls">
														<select name="zone_id" class="input-xlarge">
															<option value=""> --- Please Select --- </option>
															<option value="3513">Aberdeen</option>
															<option value="3514">Aberdeenshire</option>
															<option value="3515">Anglesey</option>
															<option value="3516">Angus</option>
															<option value="3517">Argyll and Bute</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirm Order</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="control-group">
												<label for="textarea" class="control-label">Comments</label>
												<div class="controls">
													<textarea rows="3" id="textarea" class="span12"></textarea>
												</div>
											</div>									
											<button class="btn btn-inverse pull-right">Confirm order</button>
										</div>
									</div>
								</div>
							</div>
						</div>				
					</div>
				</div>
			</section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<?php echo '<script'; ?>
 src="themes/js/common.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
