<?php

namespace Controllers;

use Raice\Controller as Controller;
use Models\Article as Article;
use Models\User as User;
    
class Pages
    extends Controller
{
    
    
    public static $pages;
    public static $user;
    
    public function index ()
    {
        
        session_start();

        self::$pages = \Models\Page::getAll();
    
        if ( !empty( $_SESSION['authorized'] ) ) {
            
            self::$user = \Models\User::getOneById( $_SESSION['authorized'] )[0];
               
            parent::getView( $this->getName() );
               
        } else {
               
            header('Location: /');
               
        }
        
    }
    
}
