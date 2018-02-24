<?php

namespace Controllers;

use Raice\Controller as Controller;
    
class User
    extends Controller
{
    
    
    public static $user;
    public static $notifications;
    public static $articles;
    
    public function __call ( $url, $arguments = false )
    {
        
        session_start();
        
        $url = strtolower( $url);

        self::$user = \Models\User::getOneByField( $url, 'username' )[0];
        self::$articles = \Models\Article::getOneByField( self::$user['id'], 'author_id' );
        self::$notifications = \Models\Notifications::getOneByField( self::$user['id'], 'author_id' );
        
        parent::getView( $this->getName(), $this->user );

    }
    
}
