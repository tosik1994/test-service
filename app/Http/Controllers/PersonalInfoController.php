<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function show()
    {
        $loadResources = LoadResourcesClass::loadResources();
        return view('pages.personal-info-and-orders', $loadResources);
    }
}
