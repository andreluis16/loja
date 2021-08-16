<?php

class Pagination extends Connection{
    
    public $limit, $start, $totalPages, $link = array();
            
    function  GetPagination($field, $table){
        $query = "SELECT {$field} FROM {$table}";
        $this->ExecuteSQL($query);
        $total = $this->TotalData();
        
        $this->limit = Config::DB_LIMIT_PER_PAGE;
        $pages = ceil($total / $this->limit);
        $this->totalPages = $pages;
        
        $p = (int)isset($_GET['p']) ? $_GET['p'] : 1;
        
        //TEST IN PRATICE
        $this->start = ($p * $this->limit) - $this->limit; 
        
        for($i = 1; $i <= $pages; $i++){
            array_push($this->link, $i);
        }
    }
}
