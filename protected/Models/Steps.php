<?php

namespace Models;

use Raice\Model as Model;
        
class Steps
    extends Model
{

    const TABLE = 'steps';
    
    public $id;
    public $title;
    public $content;
    public $date;
    public $author_id;
    public $url;
    public $lead;

}
