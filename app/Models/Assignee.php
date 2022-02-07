<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignee extends Model
{
    use HasFactory;

    public function tasks()
    {
        return $this->hasMany('App\Models\task');
    }
}
