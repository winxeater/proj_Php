<?php 

$smarty = new Template();
// $smarty->assign('SET_TITULO_CHECK', Config_Checkout::SITE_NOME_CHECK);
// $smarty->assign('GET_TEMP', Rotas::get_SiteTEMP());
// $smarty->assign('GET_HOME', Rotas::get_SiteHome());
$smarty->display('checkout.tpl');

