
			<section class="header_text sub">
			<img class="pageBanner" src="{$GET_TEMP}/themes/images/pageBanner.png" alt="Novos Produtos" >
				<h4><span>Carrinho</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Meu</strong> Carrinho</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Remover</th>
									<th>Imagem</th>
									<th>Nome do Produto</th>
									<th>Quantidade</th>
									<th>Preço da Unidade</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="#"><img alt="" src="{$GET_TEMP}/themes/images/ladies/9.jpg"></a></td>
									<td>Produto qualquer</td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>$2,350.00</td>
									<td>$2,350.00</td>
								</tr>			  
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="#"><img alt="" src="{$GET_TEMP}/themes/images/ladies/1.jpg"></a></td>
									<td>Outro produto qualquer</td>
									<td><input type="text" placeholder="2" class="input-mini"></td>
									<td>$1,150.00</td>
									<td>$2,450.00</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="#"><img alt="" src="{$GET_}/themes/images/ladies/3.jpg"></a></td>
									<td>Mais um produto qualquer</td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>$1,210.00</td>
									<td>$1,123.00</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>$3,600.00</strong></td>
								</tr>		  
							</tbody>
						</table>
						<h4>O que deseja fazer agora?</h4>
						<p>Escolha a forma de envio</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Usar codigo de copom
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Taxas &amp; Entrega
						</label>
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong>:	$100.00<br>
							<strong>Taxa Ecologica (-2.00)</strong>: $2.00<br>
							<strong>Taxa Adicionada (17.5%)</strong>: $17.50<br>
							<strong>Total</strong>: $119.50<br>
						</p>
						<hr/>
						<p class="buttons center">				
							<button class="btn" type="button">Atualizar</button>
							<button class="btn" type="button">Continuar</button>
							<button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
						</p>					
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIAS</li>
								<li><a href="#">AEAEAEAE</a></li>
								<li class="active"><a href="#">PASDASDASDSD</a></li>
								<li><a href="#">SDFSDFSDF</a></li>
								<li><a href="#">SDGSDGSDG</a></li>
								<li><a href="#">DFGDFGDFG</a></li>
								<li><a href="#">DGHFHDFHDFH</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">FABRICANTES</li>
								<li><a href="#">Adidas</a></li>
								<li><a href="#">Nike</a></li>
								<li><a href="#">Dunlop</a></li>
								<li><a href="#">Yamaha</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomizar</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="#"><img alt="" src="{$GET_TEMP}/themes/images/ladies/2.jpg"></a><br/>
													<a href="#" class="title">Produto 1</a><br/>
													<a href="#" class="category">Categoria 1</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="#"><img alt="" src="{$GET_TEMP}/themes/images/ladies/4.jpg"></a><br/>
													<a href="#" class="title">Produto 2/a><br/>
													<a href="#" class="category">Categoria 2</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</section>			

		<script>
			$(document).ready(function() {
				$('#checktout').click(function (e) {
					document.location.href = "{$GET_HOME}/checkout";
				})
			});
		</script>	