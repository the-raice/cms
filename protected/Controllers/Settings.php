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
           
		   if ( !empty( explode( '/', $_SERVER['REQUEST_URI'] )[2] ) ) {
			   
			   $this->{explode( '/', $_SERVER['REQUEST_URI'] )[2]}();
			   
		   }
		   
           parent::getView( $this->getName(), 'Панель управления: настройки' );
           
       } else {
           
           header('Location: /');
           
       }
        
    }
    
	public function main () 
	{
		
		parent::getView( 'SettingsMain', 'Панель управления: настройки' );
		
	}
    
	public function users () 
	{
		
		parent::getView( 'SettingsUsers', 'Панель управления: настройки' );
		
	}
	
    
	public function design () 
	{
		
		parent::getView( 'SettingsDesign', 'Панель управления: настройки' );
		
	}
	
}
