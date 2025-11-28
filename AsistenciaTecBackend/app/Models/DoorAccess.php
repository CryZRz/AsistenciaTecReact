<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoorAccess extends Model
{
    protected $fillable = [
        
        'name',
        'campus_id',

        'token',
        'estatus',
        'user_reg',
        'user_mod',
        'created_at',
        'updated_at',
        'deleted_at'

    ];

    protected $hidden = [
        'user_reg',
        'user_mod',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function Campus(){
        return $this->belongsTo(Campus::class);
    }
}
