<?php 

require './lib/autoload.php';

$smarty = new Template();

$smarty->assign('GET_TEMP', Rotas::get_SiteTEMP());
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
// $smarty->assign('GET_CART', Rotas::pag_Cart());
// $smarty->assign('GET_CHECK', Rotas::pag_CheckOut());
// $smarty->assign('GET_LOGIN', Rotas::pag_Login());

$var_get = filter_input(INPUT_GET,'pag', FILTER_DEFAULT);

$var_get = $var_get ?? 'home';

require Rotas::get_SiteRAIZ()."/controller/{$var_get}.php";

$smarty->display('layout.tpl');









