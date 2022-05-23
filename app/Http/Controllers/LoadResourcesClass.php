<?php


namespace App\Http\Controllers;

use App\Models\ContactEmail;
use App\Models\Phone;
use App\Models\Location;
use App\Models\Service;
use App\Models\SocialNetwork;
use App\Models\TypeService;

class LoadResourcesClass
{
    public static function loadResources()
    {
        $type_services = TypeService::all();
        $services = Service::all();
        $phones = Phone::all();
        $emails = ContactEmail::all();
        $social_networks = SocialNetwork::all();
        $main_positions = Location::query()->where('is_main', '=',true)->get();

        return [
            'services' => $services,
            'type_services' => $type_services,
            'emails' => $emails,
            'social_networks' => $social_networks,
            'phones' => $phones,
            'main_positions' => $main_positions,
        ];

    }
}
