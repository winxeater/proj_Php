<?php 

require './lib/autoload.php';

$smarty = new Template();

$smarty->assign('GET_TEMP', Rotas::get_SiteTEMP());
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
// $smarty->assign('GET_CART', Rotas::pag_Cart());
// $smarty->assign('GET_CHECK', Rotas::pag_CheckOut());
// $smarty->assign('GET_LOGIN', Rotas::pag_Login());



$smarty->display('layout.tpl');









