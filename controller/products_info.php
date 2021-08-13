<?php
    
    $smarty = new Template();
    
    $products = new Products();
    $products->GetProductsID(Routes::$pag[1]);
    
    $smarty->assign('PRO', $products->GetItems());
    $smarty->assign('TEMA', Routes::getSiteTemplate());
   

    $smarty->display('products_info.tpl');
 
   
?>