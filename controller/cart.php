<?php

$smarty = new Template();

$cart = new Cart();

$smarty->assign('PRO', $cart->GetCart());
$smarty->assign('TOTAL', Sistema::MoedaBR($cart->GetTotal()));



$smarty->display('cart.tpl');
