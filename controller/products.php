<?php
    
    $smarty = new Template();
    
    $products = new Products();
    
    if(isset(Routes::$pag[1])){
         $products->GetProductsCateID(Routes::$pag[1]);
    }else{
        $products->GetProducts();
    }
    
    $smarty->assign('PRO', $products->GetItems());
    $smarty->assign('PRO_INFO', Routes::productsInfoPage());
    $smarty->assign('PRO_TOTAL', $products->TotalData());
    $smarty->display('products.tpl');
    
   
?>