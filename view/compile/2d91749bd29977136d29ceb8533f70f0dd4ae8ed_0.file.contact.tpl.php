<?php
/* Smarty version 3.1.31, created on 2017-11-20 06:21:44
  from "/opt/lampp/htdocs/ecomm/view/contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a12666878cf49_58150762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d91749bd29977136d29ceb8533f70f0dd4ae8ed' => 
    array (
      0 => '/opt/lampp/htdocs/ecomm/view/contact.tpl',
      1 => 1511155300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a12666878cf49_58150762 (Smarty_Internal_Template $_smarty_tpl) {
?>


			<section class="google_map">
				<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d471300.13442635466!2d-44.070202927342045!3d-22.6525842962645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1511155152010"></iframe>
			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="" >
				<h4><span>Contate-nos</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					<div class="span5">
						<div>
							<h5>Informações</h5>
							<p><strong>Telefone:</strong>&nbsp;(123) 123123-45646<br>
							<strong>Fax:</strong>&nbsp;+04 (123) 456-7890<br>
							<strong>E-mail:</strong>&nbsp;<a href="#">matheus.a.aguiar@hotmail.com</a>								
							</p>
							<br/>
							<h5>Escritório</h5>
							<p><strong>Telefone:</strong>&nbsp;(113) 023-1125<br>
							<strong>Fax:</strong>&nbsp;+04 (321) 023-1145<br>
							<strong>E-mail:</strong>&nbsp;<a href="#">matheus.a.aguiar@hotmail.com</a>					
							</p>
						</div>
					</div>
					<div class="span7">
						<p>Mande-nos uma mensagem !</p>
						<form method="post" action="#">
							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Nome:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="" class="input-xlarge" placeholder="Name">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="email"><span>E-mail:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge" placeholder="Email Address">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="message"><span>Menssagem:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								
								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-inverse">Enviar!</button>
								</div>
							</fieldset>
						</form>
					</div>				
				</div>
			</section>			

		<?php echo '<script'; ?>
 src="themes/js/common.js"><?php echo '</script'; ?>
>		<?php }
}
