<?php

class Categories extends Connection{
    
    private $cateID, $cateName,$cateSlug;
    
   function __construct() {
       parent::__construct();
   }
   
    function GetCategories(){
        
        //query para buscar produtos de uma categoria especifica
        $query = "SELECT * FROM {$this->prefix}categorias";
        
        $this->ExecuteSQL($query);
        $this->GetList();
        
    }
    
    
    private function GetList(){
        $i = 1;
        while ($list = $this->DataList()){
            
        $this->items[$i] = array(
            
            'cate_id' => $list['cate_id'],
            'cate_nome'  => $list['cate_nome'] ,  
            'cate_slug'  => $list['cate_slug'] ,  
            'cate_link' => Routes::productsPage(). '/' . $list['cate_id']. '/'. $list['cate_slug']
        );
        
        $i++;
        
        }
        
    }
   
   
}
