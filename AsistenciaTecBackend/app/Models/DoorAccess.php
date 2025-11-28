<?php

namespace App\Models;

use App\BaseModel;
use Illuminate\Database\Eloquent\Model;

class DoorAccess extends Model
{
    use BaseModel;

    protected $table = "door_access";

    protected $fillable = [       
        "name",
        "campus_id",
    ];

    public function campus(){
        return $this->belongsTo(Campus::class);
    }
}
