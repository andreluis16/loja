<?php

require './lib/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors',1);

$smarty = new Template();
$categories = new Categories();
$categories->GetCategories();

//Routes::getPage();



//Template values
 
$smarty->assign('GET_TEMPLATE', Routes::getSiteTemplate());
$smarty->assign('GET_HOME', Routes::getSiteHome());
$smarty->assign('PAGE_CART', Routes::cartPage());
$smarty->assign('PAGE_PRODUCTS', Routes::productsPage());
$smarty->assign('PAGE_CONTACT', Routes::contactPage());
$smarty->assign('PAGE_MYACCOUNT', Routes::myAccountPage());
$smarty->assign('TITLE', Config::SITE_NAME);
$smarty->assign('CATEGORIES', $categories->GetItems());
$smarty->assign('DATA', Sistema::DataAtualBR());
//echo Routes::getSiteTemplate();

$dados = new Connection();  
$sql = "SELECT * FROM {$dados->GetPrefix()}categorias";
$dados->ExecuteSQL($sql);
//echo  $dados->TotalData();

$smarty->display('index.tpl');  

?>