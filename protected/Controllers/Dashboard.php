<?php

namespace Controllers;

use Raice\Controller as Controller;

class Dashboard
    extends Controller
{
    
    public static $user;
    
    public function index ()
    {

       session_start();
    
       if ( !empty( $_SESSION['authorized'] ) ) {
           
           self::$user = \Models\User::getOneById( $_SESSION['authorized'] )[0];
           
           parent::getView( $this->getName() );
           
       } else {
           
           header('Location: /');
           
       }
        
    }
    
}
