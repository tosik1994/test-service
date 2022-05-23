<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class ShowContactController extends Controller
{
    public function show()
    {
        $positions = Location::all();
        $loadResources = LoadResourcesClass::loadResources();

        return view('pages.contacts', $loadResources +=[
            'positions' => $positions,
        ]);
    }
}
