<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Auth;

class LoginController extends Controller
{
    public function login(LoginUserRequest $request)
    {
        if($request->email != '' && $request->password != '')
        {
            if (auth()->attempt(['email' => $request->email, 'password' => $request->password], true)) {
                return redirect()->route('main');
            } else {
                session()->flash('errors');
                return redirect()->back()->withErrors('errors', 'errors');
            }
        }
        return redirect()->back();
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function show()
    {
        $loadresources = LoadResourcesClass::loadResources();
        return view('pages.login', $loadresources);
    }
}
