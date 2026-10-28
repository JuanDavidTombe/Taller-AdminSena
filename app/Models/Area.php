<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['name', 'image_url'];

    public function teachers()
    {
        return $this->hasMany('App\Models\Teacher');
    }
}
