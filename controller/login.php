<?php 

$smarty = new Template();
// $smarty->assign('SET_TITULO_LOGIN', Config_Login::SITE_NOME_LOGIN);
$smarty->assign('GET_TEMP', Rotas::get_SiteTEMP());
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
$smarty->display('login.tpl');

