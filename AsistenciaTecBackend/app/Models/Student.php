<?php

namespace App\Models;

use App\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use BaseModel;

    protected $fillable = [
      "name",
      "last_name",
      "curp",
    ];

}
