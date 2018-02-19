<?php

namespace Models;

use Raice\Model as Model;
        
class Page
    extends Model
{

    const TABLE = 'pages';
    
    public $id;
    public $title;
    public $content;
    public $date;
    public $author_id;
    public $url;
    public $lead;

}
