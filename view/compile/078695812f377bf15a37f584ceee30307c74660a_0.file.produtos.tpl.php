<?php
/* Smarty version 3.1.31, created on 2017-11-26 06:52:24
  from "/opt/lampp/htdocs/ecomm/view/produtos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a1a5698748bb8_95924038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '078695812f377bf15a37f584ceee30307c74660a' => 
    array (
      0 => '/opt/lampp/htdocs/ecomm/view/produtos.tpl',
      1 => 1511675543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1a5698748bb8_95924038 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>pagina de produtos</h2>


<section class="main-content">
    
    <div class="row">						
        <div class="span3">								
            <ul class="thumbnails listing-products">
                <div class="product-box">


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <li class="span3">
                        <span class="sale_tag"></span>												
                        <a href="#"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_img'];?>
"></a><br/>
                        <a href="#" class="title"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</a><br/>
                        <a href="#" class="category">Categoria 1</a>
                        <p class="price"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_preco'];?>
</p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
;
                
                </div>
            </ul>
        </div>								
            <hr>
            <div class="pagination pagination-small pagination-centered">
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>   
    </div>
    
</section>

<?php }
}
