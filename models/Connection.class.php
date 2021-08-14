<?php

class Connection extends Config{
    
    private $host ,$user, $passWord, $dataBaseName;
    
    protected $obj, $items=array(), $prefix;
            
    function __construct(){
        $this->host = self::DB_HOST;
        $this->user = self::DB_USER;
        $this->passWord = self::DB_SENHA;
        $this->dataBaseName = self::DB_BANCO;
        $this->prefix = self::DB_PREFIX;
        
         try{
       
        if($this->Connect() == null){
            $this->Connect();
        }
        
    } catch (Exception $e) {
        
        exit($e->getMessage().'<h2>Data Base Error</h2>');
                
    }
    
    }
    
   
    
    private function Connect(){
        
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        );
        
        $link = new PDO(
                "mysql:host={$this->host};dbname={$this->dataBaseName}",  
                $this->user, 
                $this->passWord,
                $options
                );
        return $link;        
    }
    
    function ExecuteSQL($query, array $params = array()){
        
        $this->obj = $this->Connect()->prepare($query);
        
        if(count($params) > 0){
            foreach ($params as $key => $value){
                $this->obj->bindValue($key, $value);
            }
        }
        
        return $this->obj->execute();
    }
    
    function DataList(){
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }
    
    function TotalData(){
        return $this->obj->rowCount();
    }
    
    function GetItems(){
        return $this->items;
        
    }
    public function GetPrefix() {
        return $this->prefix;
    }
    
}
