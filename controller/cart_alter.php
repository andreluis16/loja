<?php


if(!isset($_POST['pro_id']) or $_POST['pro_id'] < 1){
    echo '<h4 class="alert alert-danger">Erro na operação!</h4>';
    Routes::Redirect(1, Routes::cartPage());    
    exit();
}


$id = (int)$_POST['pro_id'];

$cart = new Cart();
//$cart->CartADD($id);

try {
    $cart->CartADD($id);
} catch (Exception $ex) {
    echo '<h4 class="alert alert-danger">Erro na operação!</h4>';
}

Routes::Redirect(4, Routes::cartPage());    