<?php

namespace Models;

use Raice\Model as Model;
        
class Purchases
    extends Model
{

    const TABLE = 'purchases';
    
    public $id;
    public $title;
    public $content;
    public $date;
    public $author_id;
    public $url;
    public $lead;

}
