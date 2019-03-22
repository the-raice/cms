<?php

namespace Controllers;

use Raice\Controller as Controller;

class Settings
    extends Controller
{
    
    public static $user;
    public static $notifications;
    
    public function index ()
    {

       session_start();
    
       if ( !empty( $_SESSION['authorized'] ) ) {
           
           self::$user = \Models\User::getOneById( $_SESSION['authorized'] )[0];
           self::$notifications = \Models\Notifications::getAll();
           
		   if ( !empty( explode( '/', $_SERVER['REQUEST_URI'] ) ) ) 
		   
           parent::getView( $this->getName(), 'Панель управления' );
           
       } else {
           
           header('Location: /');
           
       }
        
    }
    
}
