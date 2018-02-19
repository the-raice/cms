<?php

namespace Controllers;

use Raice\Controller as Controller;
    
class User
    extends Controller
{
    
    
    public $user;
    
    public function __call ( $url, $arguments = false )
    {
        
        session_start();
        
        $url = strtolower( $url);

        $this->user = \Models\User::getOneByField( $url, 'username' )[0];
        
        parent::getView( $this->getName(), $this->user );

    }
    
}
