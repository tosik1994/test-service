<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\WhatWeDo;

class MainPageController extends Controller
{
    public function index()
    {
        $what_we_dos = WhatWeDo::all();
        $advantages = Advantage::all();

        $loadResources = LoadResourcesClass::loadResources();

        return view('pages.main', $loadResources += [
            'what_we_dos' => $what_we_dos,
            'advantages' => $advantages,
        ]);
    }
}
