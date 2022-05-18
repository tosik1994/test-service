<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SetLanguageController extends Controller
{
    public function change($lang)
    {
        App::setLocale($lang);
        Session::put('locale', $lang);
        return redirect()->back();
    }
}

