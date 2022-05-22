<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function show()
    {
        $loadResources = LoadResourcesClass::loadResources();
        return view('pages.personal-info-and-orders', $loadResources);
    }

    public function update(UpdateUserRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->update();

        return redirect()->route('personal-info');
    }
}
