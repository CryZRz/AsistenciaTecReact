<?php

namespace App\Models;

use App\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use BaseModel;

    protected $fillable = [
      "name",
      "time_start",
      "time_end"  
    ];
}
