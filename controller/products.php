<?php
    
    $smarty = new Template();
    
    $products = new Products();
    $products->GetProducts();
    
    $smarty->assign('PRO', $products->GetItems());
    $smarty->assign('PRO_INFO', Routes::productsInfoPage());
    $smarty->display('products.tpl');
    
   
?>