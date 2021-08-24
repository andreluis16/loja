<?php

if(isset($_SESSION['PRO'])){
    
$smarty = new Template();

$cart = new Cart();

$smarty->assign('PRO', $cart->GetCart());
$smarty->assign('TOTAL', Sistema::MoedaBR($cart->GetTotal()));

$smarty->assign('TEMA', Routes::getSiteTemplate());



$smarty->display('purchase_finish.tpl');
}else{
    echo '<h4 class="alert alert-danger">Não possui produtos no carrinho!</h4>';
}