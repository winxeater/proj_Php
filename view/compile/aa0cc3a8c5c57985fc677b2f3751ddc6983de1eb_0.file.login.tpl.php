<?php
/* Smarty version 3.1.31, created on 2017-11-20 06:26:56
  from "/opt/lampp/htdocs/ecomm/view/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a1267a0551682_91766427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa0cc3a8c5c57985fc677b2f3751ddc6983de1eb' => 
    array (
      0 => '/opt/lampp/htdocs/ecomm/view/login.tpl',
      1 => 1511155614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1267a0551682_91766427 (Smarty_Internal_Template $_smarty_tpl) {
?>

			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="" >
				<h4><span>Entre ou Registre-se</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Campo de</strong> Login</span></h4>
						<form action="#" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Nome de Usuario</label>
									<div class="controls">
										<input type="text" placeholder="Digite seu username" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Nome de Usuario</label>
									<div class="controls">
										<input type="password" placeholder="Digite sua senha" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Entrar">
									<hr>
									<p class="reset">Recuperar <a tabindex="4" href="#" title="Recover your username or password">Usuario ou Senha</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Campo de</strong> Registro</span></h4>
						<form action="#" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Nome de Usuario</label>
									<div class="controls">
										<input type="text" placeholder="Digite seu username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">E-mail:</label>
									<div class="controls">
										<input type="password" placeholder="Digite um e-mail" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Senha:</label>
									<div class="controls">
										<input type="password" placeholder="Digite sua senha" class="input-xlarge">
									</div>
								</div>							                            
								<div class="control-group">
									<p>Poiséeeéééééé´e</p>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Criar conta"></div>
							</fieldset>
						</form>					
					</div>				
				</div>
			</section>			
			
		<?php echo '<script'; ?>
 src="themes/js/common.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		<?php echo '</script'; ?>
>		
    </body>
</html><?php }
}
