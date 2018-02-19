<?php

namespace Models;

use Raice\Model as Model;
        
class Article 
    extends Model
{

    const TABLE = 'articles';
    
    public $id;
    public $title;
    public $content;
    public $date;
    public $author_id;
    public $url;
    public $lead;

}
