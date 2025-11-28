<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Schema\Blueprint;

trait AuditoryColumns{
    use SoftDeletes;

    public function auditoryFill(Blueprint $table){
        $table->uuid("token");
        $table->boolean("status");
        $table->foreignIdFor(User::class, "user_reg")->nullable();
        $table->foreignIdFor(User::class, "user_mod")->nullable();
        $table->softDeletes("deleted_at");
    }
}