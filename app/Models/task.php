<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required|string|max:30',
        'description' => 'required|string|max:180',
        'deadline' => 'after:now'
    );

    public function getData()
    {
        return $this->id . ':' . $this->title . '/' . $this->description . '(' . $this->deadline . ')';
    }
}
