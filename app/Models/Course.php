<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function trainingCenter()
    {
        return $this->belongsTo('App\Models\TrainingCenter');
    }
    public function apprentices()
    {
        return $this->hasMany('App\Models\Apprentice');
    }
    public function teachers()
    {
        return $this->belongsToMany('App\Models\Teacher');
    }
}
