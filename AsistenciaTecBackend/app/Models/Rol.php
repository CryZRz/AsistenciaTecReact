<?php

namespace App\Models;

use App\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rol extends Model
{
    use BaseModel;

    protected $fillable = [ 
        'name',
        'abrev',
    ];

    protected $hidden = [
        'user_reg',
        'user_mod',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function FunctionName() : HasMany {
        return $this->hasMany(User::class);
    }
}
