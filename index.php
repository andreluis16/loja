<?php

require './lib/autoload.php';


$smarty = new Template();
//Routes::getPage();

//Template values

$smarty->assign('NOME', 'ANDRÈ LUIS');  
$smarty->assign('GET_TEMPLATE', Routes::getSiteTemplate());
$smarty->assign('GET_HOME', Routes::getSiteHome());
$smarty->assign('PAGE_CART', Routes::cartPage());
$smarty->assign('PAGE_CONTACT', Routes::contactPage());
$smarty->assign('PAGE_MYACCOUNT', Routes::myAccountPage());
$smarty->assign('TITLE', Config::SITE_NAME);
//echo Routes::getSiteTemplate();

$dados = new Connection();  
$sql = "SELECT * FROM categorias";
$dados->ExecuteSQL($sql);
//echo  $dados->TotalData();

$smarty->display('index.tpl');  

?>