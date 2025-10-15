<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        ['a'=> 1],
        ['b'=> 2],
        ['c'=> 3],
        ['d' =>4],
];

public function getAuthors(){
return $this->authors;
}
}
