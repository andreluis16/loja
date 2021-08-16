<?php

class Routes {
    
       public static $pag;
       private static $controllerFolder = 'controller';
       private static $viewFolder = 'view';


       static function getSiteHome(){
           return Config::SITE_URL;
       }
       
       static function getSiteSource(){
           return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_FOLDER;
       }
       
       static function getSiteTemplate(){
           return self::getSiteHome() . '/' .self::$viewFolder;
       }
       
       static function cartPage(){
           return self::getSiteHome() . '/cart' ;
       }
       
       static function productsPage(){
           return self::getSiteHome() . '/products' ;
       }
       
       static function productsInfoPage(){
           return self::getSiteHome() . '/products_info' ;
       }
       
       static function contactPage(){
           return self::getSiteHome() . '/contact' ;
       }
       
       static function myAccountPage(){
           return self::getSiteHome() . '/myaccount' ;
       }
       
       static function getImageFolder(){
           return 'media/images/';
       }    
       
       static function getImageURL(){
           return self::getSiteHome(). '/'. self::getImageFolder();
       }
       
       static function imageLink($img, $width, $height) {
           $image = self::getImageURL(). "thumb.php?src={$img}&w={$width}&h={$height}&zc=1";
           return $image;   
       }
       
       static function getFolderController() {
           return self::$controllerFolder;
       }


       static function getPage(){
            if(isset($_GET['pag'])){

                $page = $_GET['pag'];

                self::$pag = explode('/',$page);    


                $page = 'controller/' . self::$pag[0] . '.php';
                //$page = 'controller/' . $_GET['pag'] . '.php';

                   if(file_exists($page)){

                      include $page;  

                    }else{
                    include 'erro.php';
                    }

                }else {
                  include 'home.php';
                }
       }
    
}