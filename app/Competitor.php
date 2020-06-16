<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{
    protected $fillable = ["name", "bio", "dob", "sport_id", "img_pathway"];

    public function sport()
    {
        // a competitor belongs to a sport
        return $this->belongsTo(Sport::class);
    }
}
