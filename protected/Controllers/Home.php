<?php

namespace Controllers;

use Raice\Controller as Controller;
    
class Home
    extends Controller
{
    
    public function index ()
    {

        session_start();
    
       if ( !empty( $_SESSION['authorized'] ) ) {
           
           header('Location: /dashboard');
           
       } else {
        
           parent::getView( $this->getName(), 'The Raice CMS' );
           
       }
        
    }
    
}
