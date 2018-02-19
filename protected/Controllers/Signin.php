<?php

namespace Controllers;

use Raice\Controller as Controller;
    
class Signin
    extends Controller
{
    
    public static $error;
    
    public static $username;
    public static $email;
    public static $login;
    
    public function index ()
    {
       
       if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
           
           \Models\User::validateSignin( $_POST );
           
       }
       
       parent::getView( $this->getName() );
       
        
    }
    
}
