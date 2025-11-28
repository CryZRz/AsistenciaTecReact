<?php

namespace App\Models;

use App\BaseModel;
use Illuminate\Database\Eloquent\Model;

class StudentUpdate extends Model
{
    use BaseModel;

    protected $fillable = [
      "control_number",
      "semester",
    ];

    public function career(){
        return $this->hasMany(Career::class);
    }

    public function period(){
        return $this->hasMany(Career::class);
    }

    public function student(){
        return $this->hasMany(Student::class);
    }
}
