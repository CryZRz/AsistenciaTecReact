<?php

namespace App\Models;

use App\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use BaseModel;

    protected $fillable = [
        "name",
        "acronym"
    ];
}
