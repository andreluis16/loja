<?php

class Products extends Connection{
    function __construct() {
        parent::__construct();
    }
    
    function GetProducts(){
        //query para buscar produtos de uma categoria especifica
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " ORDER BY pro_id DESC";
        
        $this->ExecuteSQL($query);
        $this->GetList();
    }
    
    function GetProductsID($id){
        //query para buscar produtos de uma categoria especifica
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " AND pro_id = :id";
        
        $params = array(':id'=>(int)$id);  
        
        $this->ExecuteSQL($query, $params);
        $this->GetList();
    }
    
    function GetProductsCateID($id){
        //query para buscar produtos de uma categoria especifica
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " AND pro_categoria = :id";
        
        $params = array(':id'=>(int)$id); 
        
        $this->ExecuteSQL($query, $params);
        $this->GetList();
    }   
    
    private function GetList(){
        $i = 1;
        while ($list = $this->DataList()){
        $this->items[$i] = array(
            'pro_id' => $list['pro_id'],
            'pro_nome'  => $list['pro_nome'] ,  
            'pro_desc'  => $list['pro_desc'] ,  
            'pro_peso'  => $list['pro_peso'] ,  
            'pro_valor'   => Sistema::MoedaBR($list['pro_valor']),  
            'pro_altura' => $list['pro_altura'] ,  
            'pro_largura' => $list['pro_largura'] ,  
            'pro_comprimento' => $list['pro_comprimento'] ,  
            'pro_img'     => Routes::imageLink($list['pro_img'], 180, 180) ,  
            'pro_img_g'     => Routes::imageLink($list['pro_img'], 300, 300) ,
            'pro_img_p'     => Routes::imageLink($list['pro_img'], 70, 70) ,
            'pro_slug' => $list['pro_slug'], 
            'pro_ref' => $list['pro_ref'],
            'cate_nome' => $list['cate_nome'] , 
            'cate_id'   => $list['cate_id']  
        );
        
        $i++;
        
        }
        
    }
}
