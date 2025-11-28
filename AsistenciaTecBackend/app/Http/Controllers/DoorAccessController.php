<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\DoorAccess;
use Illuminate\Http\Request;

class DoorAccessController extends Controller
{
    public function index(Campus $campus){
        $doors = $campus->doorAccess;

        return response()->json($doors, 200);
    }
}
