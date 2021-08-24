<?php

if(isset($_SESSION['PRO'])){
    
$smarty = new Template();

$cart = new Cart();

$smarty->assign('PRO', $cart->GetCart());
$smarty->assign('TOTAL', Sistema::MoedaBR($cart->GetTotal()));
$smarty->assign('PAGE_CART_ALTER', Routes::cartPageAlter());
$smarty->assign('PAGE_CONFIRM', Routes::purchaseConfirmPage());
$smarty->assign('PAGE_PRODUCTS', Routes::productsPage());




$smarty->display('cart.tpl');
}else{
    echo '<h4 class="alert alert-danger">Não possui produtos no carrinho!</h4>';
}