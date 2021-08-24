<?php

class Cart{
    private $totalValue, $totalWheight, $items = array();
    
    function  GetCart($session = null){
        
        $i = 1; $sub = 1.00; $peso = 0;
        
        
        
        foreach ($_SESSION['PRO'] as $list){
            
            $sub = ($list['VALOR_US'] * $list['QTD']);
            $this->totalValue += $sub;
            $this->items[$i] = array(
                
              'pro_id' =>  $list['ID'],
              'pro_nome' => $list['NOME'],  
              'pro_valor' => $list['VALOR'], 
              'pro_valor_us' => $list['VALOR_US'], 
              'pro_peso' => $list['PESO'], 
              'pro_qtd' => $list['QTD'], 
              'pro_img' => $list['IMG'], 
              'pro_link' => $list['LINK'], 
              'pro_img' => $list['IMG'],
              'pro_subTotal' => Sistema::MoedaBR($sub),
              'pro_subTotal_us' => $sub  
                    
            );
            $i++;
        }
        
        if(count($this->items) > 0){
            return $this->items;
        }else{
            echo '<h4 class="alert alert-danger">Não há produtos no carrinho</h4>';
        }
        
    }
    
    function GetTotal(){
        return $this->totalValue;
    }
    
    function GetWeight(){
        return $this->totalWheight;
    }
    
    function CartADD($id){
        $products = new Products();
        $products->GetProductsID($id);
        
        foreach ($products->GetItems() as $pro) {
            $ID = $pro['pro_id'];
            $NOME  = $pro['pro_nome'];
            $VALOR_US = $pro['pro_valor_us'];
            $VALOR  = $pro['pro_valor'];
            $PESO  = $pro['pro_peso'];
            $QTD   = 1;
            $IMG   = $pro['pro_img_p'];
            $LINK  = Routes::productsInfoPage().'/'.$ID.'/'.$pro['pro_slug'];
            $ACAO  = $_POST['acao'];

        }
         echo $ACAO;   
         dump($_POST);
        
        switch ($ACAO) {  
            
            case 'add':
                if(!isset($_SESSION['PRO'][$ID]['ID'])){
                    $_SESSION['PRO'][$ID]['ID'] =  $ID;
                    $_SESSION['PRO'][$ID]['NOME']  = $NOME;
		    $_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
		    $_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
		    $_SESSION['PRO'][$ID]['PESO']  = $PESO;
		    $_SESSION['PRO'][$ID]['QTD']   = $QTD;
		    $_SESSION['PRO'][$ID]['IMG']   = $IMG;
		    $_SESSION['PRO'][$ID]['LINK']  = $LINK;  
                  
                }else{
                    $_SESSION['PRO'][$ID]['QTD']   += $QTD;
                }
              

                break;
            case 'del':
                $this->DellCart($id);
                  echo '<h4 class="alert alert-danger">Produto removido!</h4>';

                break;

            case 'clean':
                $this->CleanCart();
                echo '<h4 class="alert alert-danger">Produtos removido!</h4>';
                
                break;
           
            
        }
      
    }
    
    private function DellCart($id){
        unset($_SESSION['PRO'][$id]);
    }
    
     function  CleanCart(){
        unset($_SESSION['PRO']);
    }
      
}