<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ShowServiceController extends Controller
{
    public function show(Service $id)
    {
        $loadResources = LoadResourcesClass::loadResources();

        return view('pages.service-page', $loadResources +=
            [
                'service' => $id,
            ]);
    }
}
