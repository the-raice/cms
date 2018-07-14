<?php

namespace Models;

use Raice\Model as Model;
        
class Course
    extends Model
{

    const TABLE = 'courses';
    
    public $id;
    public $title;
    public $content;
    public $date;
    public $author_id;
    public $url;
    public $lead;

}
