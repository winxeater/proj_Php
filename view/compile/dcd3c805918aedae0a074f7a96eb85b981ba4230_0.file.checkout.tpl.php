<?php
/* Smarty version 3.1.31, created on 2017-11-20 06:29:09
  from "/opt/lampp/htdocs/ecomm/view/checkout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a12682516e2e5_47157112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcd3c805918aedae0a074f7a96eb85b981ba4230' => 
    array (
      0 => '/opt/lampp/htdocs/ecomm/view/checkout.tpl',
      1 => 1511155745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a12682516e2e5_47157112 (Smarty_Internal_Template $_smarty_tpl) {
?>
							
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="" >
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
												<h4>Seja bem vindo!</h4>
												<p>Ao criar uma conta, você poderá comprar mais rápido, estar atualizado no status de uma encomenda e acompanhar os pedidos que você já fez.</p>
												<form action="#" method="post">
													<fieldset>
														<label class="radio" for="register">
															<input type="radio" name="account" value="register" id="register" checked="checked">Registre-se
														</label>
														<label class="radio" for="guest">
															<input type="radio" name="account" value="guest" id="guest">Checkout de Convidado
														</label>
														<br>
														<button class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2">Continue</button>
													</fieldset>
												</form>
											 </div>
											 <div class="span6">
												<h4>Cliente</h4>
												<p>Ja sou um cliente</p>
												<form action="#" method="post">
													<fieldset>
														<div class="control-group">
															<label class="control-label">Login</label>
															<div class="controls">
																<input type="text" placeholder="Digite seu username" id="username" class="input-xlarge">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Senha</label>
															<div class="controls">
															<input type="password" placeholder="Digite sua senha" id="password" class="input-xlarge">
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
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Conta &amp; Detalhe da Compra</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Detalhes pessoais</h4>
												<div class="control-group">
													<label class="control-label">Primeiro Nome</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Ultimo Nome</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">E-mail</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Telefone</label>
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
												<h4>Endereço</h4>
												<div class="control-group">
													<label class="control-label">Empresa</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">CNPJ da Empresa:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Endereço 1:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Endereço 2:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Cidade:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Código Postal:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> País:</label>
													<div class="controls">
														<select class="input-xlarge">
															<option value="1">País 1</option>
															<option value="2">País 2</option>
															<option value="3">País 3</option>
															<option value="4">País 4</option>
															<option value="5">País 5</option>
															<option value="6">País 6</option>
														</select>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Região :</label>
													<div class="controls">
														<select name="zone_id" class="input-xlarge">
															<option value=""> --- Selecione --- </option>
															<option value="3513">Opcao 1</option>
															<option value="3514">Opcao 2</option>
															<option value="3515">Opcao 3</option>
															<option value="3516">Opcao 4</option>
															<option value="3517">Opcao 5</option>
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
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirmar pedido</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="control-group">
												<label for="textarea" class="control-label">Comentarios</label>
												<div class="controls">
													<textarea rows="3" id="textarea" class="span12"></textarea>
												</div>
											</div>									
											<button class="btn btn-inverse pull-right">Copnfirmar Pedido</button>
										</div>
									</div>
								</div>
							</div>
						</div>				
					</div>
				</div>
			</section>			
		<?php echo '<script'; ?>
 src="themes/js/common.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
