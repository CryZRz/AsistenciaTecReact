<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

trait BaseModel
{
    use SoftDeletes;
    
    protected $commonFillable = [
        "token",
        "status",
        "user_reg",
        "user_mod",
    ];

    public function initializeBaseModel(){
        $this->fillable = array_merge($this->fillable, $this->commonFillable);
    }
}
