<?php

class ProductsImages extends Connection{
    function  GetImagesPRO($pro){
        $query = "SELECT * FROM {$this->prefix}imagens WHERE img_pro_id = :pro";
        
        $params = array(':pro'=>(int)$pro);
        $this->ExecuteSQL($query, $params);
        $this->GetList();
            
    }
    
    private function GetList(){
        $i = 1;
        while ($list = $this->DataList()){
        $this->items[$i] = array(
            'img_id' => $list['img_id'],
            'img_nome' => Routes::imageLink($list['img_nome'], 150, 150) ,  
            'img_pro_id'  => $list['img_pro_id'] ,   
            'img_link' => Routes::imageLink($list['img_nome'], 500, 500) ,
            'img_arquivo' => $list['img_nome']
            
        );
        
        $i++;
        
        }
    }
        
}