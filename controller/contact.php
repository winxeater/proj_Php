<?php 

$smarty = new Template();
// $smarty->assign('GET_CONTACT', 'Página de Contatos');
// $smarty->assign('SET_TITULO_CONTACT', Config_Contact::SITE_NOME_CONTACT);
// $smarty->assign('GET_CONTACT', Rotas::pag_Contact());
$smarty->assign('GET_TEMP', Rotas::get_SiteTEMP());
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
$smarty->display('contact.tpl');

 ?>