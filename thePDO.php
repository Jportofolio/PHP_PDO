<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'loadingclass_Eg.php';
use dermol\TheLoader as Loadme;
class vermuse extends PDO{
    
    static protected $dns;
    static protected $username;
    static protected $passwd;
    static protected $options;
    
    public static function exception_handler($exception){
        //Outout The Exception Details
        die('Uncaught Exception'.$exception->getMessage());
        
    }
    //Constrcutor
    public function __construct($dsn, $username, $passwd, $options = array(
    parent::ATTR_PERSISTENT => true
    )) {
        
        //Temporarily Change The PHP exception handler
        
        set_exception_handler(array(__CLASS__, 'exception_handler'));
        
        //Creating and Connecting to the Databas
        parent::__construct($dsn, $username, $passwd, $options);
        
        //Changing the Exception handler back to whatever it was before
        restore_exception_handler();
    }
}
//Defining the Connection Credentials

define('DNS', 'mysql:host=localhost;dbname=vermuse;chartset=utf8');
define('USR','root');
define('PSSWD','jkool@2014');
//define('CLSS_ROOT','theClass/');

//Ending 
//set_include_path(get_include_path(). PATH_SEPARATOR.CLSS_ROOT);


$theloader = new Loadme;
$prod = new product();
$prod->addprod();