<?php

namespace Models;

use Raice\Model as Model;
        
class Actions
    extends Model
{

    const TABLE = 'actions';
    
    public $id;
    public $title;
    public $content;
    public $date;
    public $author_id;
    public $url;
    public $lead;

}
