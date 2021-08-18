<?php
    
    $smarty = new Template();
    
    $products = new Products();
    $products->GetProductsID(Routes::$pag[1]);
        
    $images = new ProductsImages();
    $images->GetImagesPRO(Routes::$pag[1]);
    
    $smarty->assign('PRO', $products->GetItems());
    $smarty->assign('TEMA', Routes::getSiteTemplate());
    $smarty->assign('IMAGES', $images->GetItems());
    $smarty->assign('PAGE_BUY', Routes::cartPageAlter());
   
 /* $ID = Routes::$pag[1];
    foreach ($products->GetItems() as $pro){
        $_SESSION['PRO'][$ID]['ID'] = $pro['pro_id'];
        $_SESSION['PRO'][$ID]['NOME'] = $pro['pro_nome'];
        $_SESSION['PRO'][$ID]['VALOR'] = $pro['pro_valor'];
        $_SESSION['PRO'][$ID]['VALOR_US'] = $pro['pro_valor_us'];
        $_SESSION['PRO'][$ID]['PESO'] = $pro['pro_peso'];
        $_SESSION['PRO'][$ID]['QTD'] = 1 ;   
        $_SESSION['PRO'][$ID]['IMG'] = $pro['pro_img_p'];
        $_SESSION['PRO'][$ID]['LINK'] = 'sssslink';
        $ID++;
    }*/


    $smarty->display('products_info.tpl');
 
   
?>