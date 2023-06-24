<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $guarded = [];
    public function setFileUrlAttribute($value)
    {
        $path=$value->store('public');
        $this->attributes['file_url']=$path;
    }
}
