<?php

namespace Models;

use Raice\Model as Model;
        
class Settings
    extends Model
{

    const TABLE = 'settings';
    
    public $id;
    public $title;
    public $admin_email;

}
