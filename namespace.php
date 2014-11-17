<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Varsall;


class Ubeing{
    
    //some properties
    public $name;
    public $lastname;
    public $therole = array();
    
  
    
} 
class session {
    
    public $state;
    protected $id_session;
    protected $username;
    protected $password;
    
    public function __construct() {
        
    }
            
      function loging($tokens = array()){
      /// 
     $tokens = array (
         'id' =>$this->id_session,
         'username' => $this->username,
         'password' =>$this->password
         
             );
     if (in_array(array($this->id_session, $this->username, $this->password), $tokens)){
         $this->state = 1;
     }
     else{
         $this->state = 0;
     }
     //
     switch ($this->state){
         case "1":
             success();
             break;
         case "0":
             $tokens = array();
             fail();
         break;
     
      }
   } 
   /*===============================
    * **** when the Connection Succeed ******
    ============================*/
   function success(){
       
       
   }
}
 
if (!function_exists('Loadclass')){
    function Loadclass($name_class){
        $name_class = strtolower($name_class);
        $classfile  = $_SERVER['DOCUMENT_ROOT'].'/theClass/'.$name_class.'.php';
        if (file_exists($classfile)&& class_exists($name_class)){ include $classfile; }
    }   
}
spl_autoload_register('Loadclass');

