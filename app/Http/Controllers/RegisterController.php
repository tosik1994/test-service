<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        User::create($request->validated());
        Auth::attempt(['email' => $request->email, 'password' => $request->password], 'true');
        return redirect()->route('main');
    }

    public function show()
    {
        $loadresources = LoadResourcesClass::loadResources();
        return view('pages.register', $loadresources);
    }
}
