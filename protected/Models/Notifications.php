<?php

namespace Models;

use Raice\Model as Model;
        
class Notifications
    extends Model
{

    const TABLE = 'notifications';
    
    public $id;
    public $author_id;
    public $content;
    public $date;

}
