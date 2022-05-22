<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Enums\OrderStatusEnum;

class OrderController extends Controller
{
    public function store(StoreOrderRequest $request)
    {
        if (Auth::check()) {
            $request->user()->orders()->save(Order::make($request->validated()));
        } else {
            session()->flash('errors');
            return redirect()->back()->withErrors('errors', 'errors');
        }
        return redirect()->back();
    }

    public function show()
    {
        $loadResources = LoadResourcesClass::loadResources();
        return view('pages.personal-info-and-orders', $loadResources);
    }
}
