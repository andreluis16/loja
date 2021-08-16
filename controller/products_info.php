<?php
    
    $smarty = new Template();
    
    $products = new Products();
    $products->GetProductsID(Routes::$pag[1]);
        
    $images = new ProductsImages();
    $images->GetImagesPRO(Routes::$pag[1]);
    
    $smarty->assign('PRO', $products->GetItems());
    $smarty->assign('TEMA', Routes::getSiteTemplate());
    $smarty->assign('IMAGES', $images->GetItems());
   

    $smarty->display('products_info.tpl');
 
   
?>