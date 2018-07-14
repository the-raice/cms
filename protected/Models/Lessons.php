<?php

namespace Models;

use Raice\Model as Model;
        
class Lessons
    extends Model
{

    const TABLE = 'lessons';
    
    public $id;
    public $title;
    public $content;
    public $date;
    public $author_id;
    public $url;
    public $lead;

}
