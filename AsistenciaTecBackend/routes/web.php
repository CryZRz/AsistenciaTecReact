<?php

use App\Models\Campus;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    $campus = new Campus();
    Campus::create([
        'name' => "Campus1",
        'state_name' => "Guanajuao",
        'municipality' => "Leon",
        "token" => Str::uuid(),
        "status" => 1,
        "user_reg" => 1,
        "user_mod" => 1,
    ]);

    $campus = Campus::withTrashed()->get();
    dd($campus);
});
