<?php

namespace Controllers;

use Raice\Controller as Controller;
    
class Signup
    extends Controller
{
    
    public static $error;
    
    public static $username;
    public static $email;
    
    public function index ()
    {
       
       if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
           
           \Models\User::validateSignup( $_POST );
           
       }
       
       parent::getView( $this->getName() );
       
        
    }
    
}
