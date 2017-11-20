<?php 
$smarty = new Template();
// $smarty->assign('SET_TITULO', Config::SITE_NOME);
$smarty->assign('GET_TEMP', Rotas::get_SiteTEMP());
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
$smarty->display('cart.tpl');


