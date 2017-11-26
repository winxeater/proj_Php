<?php

$smarty = new Template();

$produto=new Produtos();
$produto->get_Produto();

// $smarty->assign('GET_TEMP', Rotas::get_SiteTEMP());
// $smarty->assign('GET_HOME', Rotas::get_SiteHome());

$smarty->assign('PRO',$produto->get_Itens());

$smarty->display('produtos.tpl');

echo '<pre>';
var_dump($produto->get_Itens());
echo '</pre>';
?>