<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Banner;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        $what_we_dos = WhatWeDo::all();
        $advantages = Advantage::all();
        $banners = Banner::all();
        return view('pages.main',
            [
                'what_we_dos' => $what_we_dos,
                'advantages' => $advantages,
                'banners' => $banners,
            ]);
    }

}
