<?php

namespace Models;

use Raice\Model as Model;
        
class Comments 
    extends Model
{

    const TABLE = 'comments';
    
    public $id;
    public $author_id;
    public $content;
    public $date;

    public function isEditor( $id, $author_id )
    {
        
        session_start();
        
        $user = self::getOneById( $_SESSION['authorized'] );
        
        if ( ( $author_id == $_SESSION['authorized'] ) || ( $user['role'] == 'admin' ) ) {
         
            return true;
            
        } else {
            
            return false;
            
        }
        
    }

}
