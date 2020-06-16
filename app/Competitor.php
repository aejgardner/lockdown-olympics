<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{
    public function sport()
    {
        // a competitor belongs to a sport
        return $this->belongsTo(Sport::class);
    }
}
