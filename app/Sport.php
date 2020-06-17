<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable = ["id", "name", "description", "start_time", "arena", "category_id", "img_pathway"];
    // use singular, as a sport only has one category
    public function category()
    {
        // a sport belongs to a category
        return $this->belongsTo(Category::class);
    }

    public function competitors()
    {
        // use hasMany relationship method
        return $this->hasMany(Competitor::class);
    }
}
