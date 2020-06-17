<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["name", "img_pathway"];

    // plural, as a category can have multiple sports
    public function sports()
    {
        // use hasMany relationship method
        return $this->hasMany(Sport::class);
    }
}
