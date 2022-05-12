<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class ShowContactController extends Controller
{
    public function show()
    {
        $positions = Position::all();
        $loadResources = LoadResourcesClass::loadResources();

        return view('pages.contacts', $loadResources +=[
            'positions' => $positions,
        ]);
    }
}
