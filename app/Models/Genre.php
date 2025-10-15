<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        ['horror'=> 1],
        ['komedi'=> 2],
        ['romansa'=> 3],
        ['realistis' =>4],
];

public function getGenres(){
return $this->genres;
}
}
