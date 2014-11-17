<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace dermol;
class TheLoader {
    
    public function __construct(){
    spl_autoload_register(array($this, 'loader'));
        
    }
 

    function loader($name_class){
        
        include './theClass/'.$name_class.'.php';
    }

}

