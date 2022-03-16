<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    protected $fillable = ["polemico", "divertente", "abitudini quotidiane"];

    public function posts() {
        return $this->belongsToMany("App\Post");
    }
    
}
