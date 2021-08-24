<?php

if(isset($_SESSION['PRO'])){
    
$smarty = new Template();

$cart = new Cart();

$smarty->assign('PRO', $cart->GetCart());
$smarty->assign('TOTAL', Sistema::MoedaBR($cart->GetTotal()));
$smarty->assign('PAGE_CART_ALTER', Routes::cartPageAlter());
$smarty->assign('PAGE_CART', Routes::cartPage());
$smarty->assign('PAGE_FINISH', Routes::purchaseFinishPage());




$smarty->display('purchase_confirm.tpl');
}else{
    echo '<h4 class="alert alert-danger">Não possui produtos no carrinho!</h4>';
}